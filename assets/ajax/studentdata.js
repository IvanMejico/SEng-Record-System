function getStudentsByCourse(course) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/SENG_SYSTEM/managestudents/getdata/'+course, true);
    xhr.onload = function() {
        if(this.status == 200) {
            var response = JSON.parse(this.responseText);
            renderTable(response);
        }
    };
    xhr.send();
}

function getAllStudents() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/SENG_SYSTEM/managestudents/getdata/', true);
    xhr.onload = function() {
        if(this.status == 200) {
            var response = JSON.parse(this.responseText);
            renderTable(response); // Render "Student List" table
        }
    };
    xhr.send();
}

function getStudents(course, section, yearlevel, limit) {
}
function searchStudentsByKeyword(keyword) {
}
function deleteStudent(id) {
}
function deleteSelectedStudents() {
}