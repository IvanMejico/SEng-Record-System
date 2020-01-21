function renderTable (object) {
    object.forEach(function(item) {
        var table = document.querySelector("#students tbody")
        row = document.createElement('tr');

        // checkbox
        td = document.createElement('td');
        checkbox = document.createElement('input');
        checkbox.type='checkbox';
        td.appendChild(checkbox);
        row.appendChild(td);
        

        // student picture
        for(var key in item) {
            if(key == "picture") {
                td = document.createElement('td');
                img = document.createElement('img');
                img.src = "/SENG_SYSTEM/public/uploads/" + item[key];
                img.classList.add('profile-picture');
                td.appendChild(img);
            } else {
                td = document.createElement('td');
                td.innerText = item[key];
            }
            // TODO: Add buttons
            row.appendChild(td);
        }
        td = document.createElement('td');
        td.innerHTML = '<div class="table-action"><a href="<?=PROOT?>managestudents/edit_student_info" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a href="" class="table-delete"><i class="flaticon-garbage"></i></a></div>';

        row.appendChild(td);

        table.appendChild(row);
    });
}