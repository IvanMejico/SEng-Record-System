/**
 * TO DO:
 * 1) Assign events to all respective buttons.
 * 2) Get the parent element of the selected button.
 * 3) Loop through its the children.
 * 4) Check of the inline type of each text content.
 * 5) Replace each text content with respective html elements
 *      based on their value types.
 * 6) Replace icons for buttons edit and delete with icons for save and cancel.
 * 7) When save is clicked, save inputted date via AJAX request.
 *      - Check for the ID of the parent(td element).
 *      - Save the inputted data under that ID in the database.
 *          + check whether it's insert or update.
 * 8) Replace each respective elements with text content.
 * 9) When cancel is clicked, replace each respective elements with text without saving the inputted data.
 */

// REMEMBER TO SET THE FORM NAME IN EVERY CONTROL


var inlineEditRowContents = {};

// form Constants
const editOptions = {
    'getForm' : function (rowId) {
        return `<form id=form${rowId}></form>`
    },
    'getText' : function(rowId, i) {
        name = document.getElementById(rowId).children[i].dataset.inlinename;
        return `<input type="text" name="${name}" value="${inlineEditRowContents[rowId][i]}" form="form${rowId}"/>`;
    },
    'getSelect' : function(rowId, i) {
        name = document.getElementById(rowId).children[i].dataset.inlinename;
        var lec="", lab="";
        inlineEditRowContents[rowId][i] == "Lecture" ? lec="selected " : lab="selected ";
        return `<select name="${name}" form="form${rowId}"><option ${lec} value="lecture">Lecture</option><option ${lab}value="laboratory">Laboratory</option></select>`            
    },
    'getNumber' : function(rowId, i) {
        name = document.getElementById(rowId).children[i].dataset.inlinename;
        return `<input type="number" name="${name}" form="form${rowId}" value="${inlineEditRowContents[rowId][i]}">`
    },
    'getButtons' : function(rowId) {
        return `<div class="table-action"><a class="table-save" form="form${rowId}"><i class="flaticon-save"></i></a><a class="table-cancel" form="form${rowId}"><i class="flaticon-edit-tools"></i></a></div>`;
    },
    'getDefaultButtons' : function () {
        return `<div class="table-action"><a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a></div>`;
    }
}
const buttons = {
    "edit": "flaticon-pencil-edit-button",
    "delete": "flaticon-garbage",
    "save": "flaticon-save",
    "cancel": "flaticon-edit-tools"
}
// Form literals for generating a new row
const formLiterals = {
    form: '<form id="formNewRecord"></form>',
    subjectCode: '<input type="text name="subjectcode" form="formNewRecord"/>',
    subjectTitle: '<input type="text" name="subject" form="formNewRecord"/>',
    subjectType: '<select name="subjecttype" form="formCPEM2113"><option selected value="lecture">Lecture</option><option value="laboratory">Laboratory</option></select>',
    subjectUnits: '<input type="number" name="units" form="formCPEM2113" value="1"/>',
}



// Helper Functions
function getTable(addButton) {
    return addButton.parentNode.parentNode.parentNode.parentNode;
}

function getRow(button) {
    var cell = button.parentNode.parentNode;
    var row = cell.parentNode;
    return row;
}

function deleteRow(row) {
    row.parentNode.removeChild(row);
}

function inlineUpdateCell(tableCell, i, rowId) {
    var cellContent = "";
    // Set the form
    if(i === 0) {
        cellContent += editOptions.getForm(rowId);
    }
    switch(tableCell.dataset.inlinetype) {
        case "text":
            cellContent += editOptions.getText(rowId, i);
            break;
        case "select":
            cellContent += editOptions.getSelect(rowId, i);
            break;
        case "number":
            cellContent += editOptions.getNumber(rowId, i);
            break;
        case "buttons":
            cellContent += editOptions.getButtons(rowId);
            break;
    }
    tableCell.innerHTML = cellContent;
}
function generateButtons(button1, button2) {
    var container = document.createElement('div');
    container.classList.add('table-action');

    var b1 = document.createElement('a');
    b1.classList.add(`table-${button1}`);
    var b1Logo = document.createElement('i');
    b1Logo.classList.add(buttons[button1]);

    var b2 = document.createElement('a');
    b2.classList.add(`table-${button2}`);
    var b2Logo = document.createElement('i');
    b2Logo.classList.add(buttons[button2]);
    
    b1.appendChild(b1Logo);
    b2.appendChild(b2Logo);

    // Add event listener for buttons
    a = button1.charAt(0).toUpperCase() + button1.slice(1);
    b = button2.charAt(0).toUpperCase() + button2.slice(1);    

    b1.addEventListener('click', eval(`inline${a}`));
    b2.addEventListener('click', eval(`inline${b}`));

    container.appendChild(b1);
    container.appendChild(b2);
    
    return container;
}
function generateCell(inlineType, inlineName) {
    var cell = document.createElement('td');
    cell.dataset.inlinetype = inlineType;
    cell.dataset.inlinename = inlineName;
    return cell;
}



// Main 
window.onload = function() {
    var editButton = document.getElementsByClassName('table-edit');
    var deleteButton = document.getElementsByClassName('table-delete');
    var addButton = document.getElementsByClassName('table-add');

    // Add event listener to every edit button on the table
    Array.prototype.forEach.call(editButton, function(b) {
        b.addEventListener('click', inlineEdit);
    });

    // Add event istener to every delete button on the table
    Array.prototype.forEach.call(deleteButton, function(b) {
        b.addEventListener('click', inlineDelete);
    });

    Array.prototype.forEach.call(addButton, function(b) {
        b.addEventListener('click', addRow);
    });
}

function inlineEdit() {
    var tableRow = getRow(this);
    var rowId = tableRow.id;
  
    inlineEditRowContents[rowId] = {};

    for (var i=0; i < tableRow.children.length; i++) {
        var tableCell = tableRow.children[i];

        // Assign the value of the table in a global array for simultaenous editing
        if(tableCell.innerText != "")
            inlineEditRowContents[rowId][i] = tableCell.innerText;

        inlineUpdateCell(tableCell, i, rowId);
    }

    // Add event handler for save and cancel button
    var save = document.querySelector(`#${rowId} .table-action .table-save`);
    var cancel = document.querySelector(`#${rowId} .table-action .table-cancel`);
    save.addEventListener('click', inlineSave);
    cancel.addEventListener('click', inlineCancel);
}



function inlineDelete() {
    var tableRow = getRow(this);
    deleteRow(tableRow);
}

function inlineSave() {
    console.log('save');
}

function inlineCancel() {
    var tableRow = getRow(this);
    var rowId = tableRow.id;

    if(inlineEditRowContents[rowId] === undefined) {
        tableRow.parentNode.removeChild(tableRow);
    } else {
        for(var i=0; i < tableRow.children.length; i++) {
            var tableCell = tableRow.children[i];
            if(tableCell.dataset.inlinetype != "buttons") {
                tableCell.innerHTML = inlineEditRowContents[rowId][i];
            } else {
                tableCell.innerHTML = editOptions.getDefaultButtons();
            }
        }
        // Add event handler for save and cancel button
        var save = document.querySelector(`#${rowId} .table-action .table-edit`);
        var cancel = document.querySelector(`#${rowId} .table-action .table-delete`);
        save.addEventListener('click', inlineEdit);
        cancel.addEventListener('click', inlineDelete);
    }
}


function addRow() {
    var row = document.createElement('tr');
    row.id = "newRow";

    var code = generateCell('text', 'subjectcode');
    code.innerHTML += formLiterals.form;
    code.innerHTML += formLiterals.subjectCode;

    var title = generateCell('text', 'subjecttitle');
    title.innerHTML += formLiterals.subjectTitle;
    
    var type = generateCell('select', 'subjecttype');
    type.innerHTML += formLiterals.subjectType;

    var units = generateCell('number', 'units');
    units.innerHTML = formLiterals.subjectUnits;

    // SEE HOW TO SETUP TABLE BUTTONS FOR NEW ROW - save and delete
    var buttons = generateCell('buttons', 'actionbuttons');
    buttons.appendChild(generateButtons('save','cancel'));


    // Append cells to row
    row.appendChild(code);
    row.appendChild(title);
    row.appendChild(type);
    row.appendChild(units);
    row.appendChild(buttons);

    // Append row to the table
    table = getTable(this);
    table.children[1].appendChild(row);
}