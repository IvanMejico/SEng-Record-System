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


var tempRowContentBuffer = {};

// form Constants
const editOptions = {
    getForm : function (rowId) {
        return `<form id=form${rowId}></form>`
    },
    getText : function(rowId, cellName) {
        return `<input type="text" name="${cellName}" value="${tempRowContentBuffer[rowId][cellName]}" form="form${rowId}"/>`; // R
    },
    getSelect : function(rowId, cellName) {
        var lec="", lab="";
        tempRowContentBuffer[rowId][cellName] == "Lecture" ? lec="selected " : lab="selected ";
        return `<select name="${cellName}" form="form${rowId}"><option ${lec}value="lecture">Lecture</option><option ${lab}value="laboratory">Laboratory</option></select>`            
    },
    getNumber : function(rowId, cellName) {
        return `<input type="number" name="${cellName}" form="form${rowId}" value="${tempRowContentBuffer[rowId][cellName]}">` // R
    },
    getButtons : function(rowId) {
        return `<div class="table-action"><a class="table-save" form="form${rowId}"><i class="flaticon-save"></i></a><a class="table-cancel" form="form${rowId}"><i class="flaticon-edit-tools"></i></a></div>`;
    },
    getDefaultButtons : function () {
        return `<div class="table-action"><a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a></div>`;
    }
}
const icons = {
    edit: "flaticon-pencil-edit-button",
    delete: "flaticon-garbage",
    save: "flaticon-save",
    cancel: "flaticon-edit-tools"
}
// Form literals for generating a new row
const formLiterals = {
    form: '<form id="formNewRecord"></form>',
    subjectCode: '<input type="text name="subjectcode" form="formNewRecord"/>',
    subjectTitle: '<input type="text" name="subject" form="formNewRecord"/>',
    subjectType: '<select name="subjecttype" form="formNewRecord"><option selected value="lecture">Lecture</option><option value="laboratory">Laboratory</option></select>',
    subjectUnits: '<input type="number" name="units" form="formNewRecord" value="1"/>',
}



//*** HELPER FUNCTIONS ***

/**
 * Returns the parent table for the passed "Add Row" button.
 * @param {HTMLAnchorElement} addButton "Add Row" button for the table.
 */
function getParentTable(addButton) {
    // Extract the table head element that contains the addButton
    let thead = addButton.parentNode.parentNode.parentNode;
    
    // Extract the specific table that contains the table head
    let table = thead.parentNode;

    return table;
}

/**
 * Returns the specific table row where the passed button is located.
 * @param {HTMLLinkElement} button Row control button.
 */
function getTableRow(button) {
    // Extract the containing table cell
    let cell = button.parentNode.parentNode;

    // Extract the containing table row
    let row = cell.parentNode;

    return row;
}

/**
 * Deletes a row from the its parent table.
 * @param {HTMLTableRowElement} row Table row to be deleted.
 */
function deleteTableRow(row) {
	
    // Delete the object from the temporary buffer
    if (tempRowContentBuffer[row.id] !== undefined)
        delete tempRowContentBuffer[row.id];

    row.parentNode.removeChild(row);

    // *Probably write a code that performs AJAX requests here to physically delete the row data in the database.
}

/**
 * Updates cell with matching form elements designated in the custom data attributes.
 * @param {HTMLTableCellElement} tableCellObj HTML <td> DOM object
 * @param {HTMLTableRowElement} tableRowObj HTML <tr> DOM object
 */
function inlineUpdateCell(tableCellObj, tableRowObj) {
    rowId = tableRowObj.id;
    cellName = tableCellObj.dataset.inlinename;

    var cellContent = "";
    
    // Determine if the cell is the first child of the row
    if(tableCellObj.cellIndex === 0) {
       cellContent += editOptions.getForm(rowId);
    }
    
    switch(tableCellObj.dataset.inlinetype) {
        case "text":
            cellContent += editOptions.getText(rowId, cellName);
            break;
        case "select":
            cellContent += editOptions.getSelect(rowId, cellName);
            break;
        case "number":
            cellContent += editOptions.getNumber(rowId, cellName);
            break;
        case "buttons":
            cellContent += editOptions.getButtons(rowId);
            break;
    }
    tableCellObj.innerHTML = cellContent;
}

/**
 * Generates a split button for table control.
 * @param {string} button1 button name ['edit', 'delete', 'save', 'cancel']
 * @param {string} button2 button name ['edit', 'delete', 'save', 'cancel']
 */
function generateButtons(button1, button2) {
    var container = document.createElement('div');
    container.classList.add('table-action');

    var b1 = document.createElement('a');
    b1.classList.add(`table-${button1}`);
    var b1Logo = document.createElement('i');
    b1Logo.classList.add(icons[button1]);

    var b2 = document.createElement('a');
    b2.classList.add(`table-${button2}`);
    var b2Logo = document.createElement('i');
    b2Logo.classList.add(icons[button2]);
    
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

/**
 * Generates a table data cell with custom dataset values.
 * @param {string} inlineType 
 * @param {string} inlineName 
 */
function generateCell(inlineType, inlineName) {
    var cell = document.createElement('td');
    cell.dataset.inlinetype = inlineType;
    cell.dataset.inlinename = inlineName;
    return cell;
}


//*** Main ***

/**
 * Handles table button inline editing. Assigned to a button event handler.
 */
function inlineEdit() {
    var tableRowObj = getTableRow(this);
    var rowId = tableRowObj.id;
  
    // Initialize row temporary row data
    tempRowContentBuffer[rowId] = {};

    for (var i=0; i < tableRowObj.children.length; i++) {
        var tableCellObj = tableRowObj.children[i];
        var cellName = tableCellObj.dataset.inlinename;
        
        // Assign the value of the table in a global buffer array for simultaneous editing
        if(tableCellObj.innerText != "")
            tempRowContentBuffer[rowId][cellName] = tableCellObj.innerText;

        inlineUpdateCell(tableCellObj, tableRowObj);
    }
    
    // Add event handler for save and cancel button
    var save = document.querySelector(`#${rowId} .table-action .table-save`);
    var cancel = document.querySelector(`#${rowId} .table-action .table-cancel`);
    save.addEventListener('click', inlineSave);
    cancel.addEventListener('click', inlineCancel);
}

/**
 * Handles row delete.
 */
function inlineDelete() {
    var tableRow = getTableRow(this);
    deleteTableRow(tableRow);
}

/**
 * Handles AJAX requests for saving files to the database.
 */
function inlineSave() {
    console.log('save');
}

/**
 * Cancels row edit.
 */
function inlineCancel() {
    var tableRow = getTableRow(this);
    var rowId = tableRow.id;

    if(tempRowContentBuffer[rowId] === undefined) {
        tableRow.parentNode.removeChild(tableRow);
    } else {
        for(var i=0; i < tableRow.children.length; i++) {
            var tableCellObj = tableRow.children[i];
            var cellName = tableCellObj.dataset.inlinename;
            
            if(tableCellObj.dataset.inlinetype != "buttons") {
                tableCellObj.innerHTML = tempRowContentBuffer[rowId][cellName];
            } else {
                tableCellObj.innerHTML = editOptions.getDefaultButtons();
            }
        }
        // Add event handler for save and cancel button
        var save = document.querySelector(`#${rowId} .table-action .table-edit`);
        var cancel = document.querySelector(`#${rowId} .table-action .table-delete`);
        save.addEventListener('click', inlineEdit);
        cancel.addEventListener('click', inlineDelete);
    }
}

/**
 * Adds row with empty form elements.
 */
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

    var buttons = generateCell('buttons', 'actionbuttons');
    buttons.appendChild(generateButtons('save','cancel'));

    // Append cells to row
    row.appendChild(code);
    row.appendChild(title);
    row.appendChild(type);
    row.appendChild(units);
    row.appendChild(buttons);

    // Append row to the table
    table = getParentTable(this);
    table.children[1].appendChild(row);
}


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

    // Add event listener to every add button on the table
    Array.prototype.forEach.call(addButton, function(b) {
        b.addEventListener('click', addRow);
    });
}