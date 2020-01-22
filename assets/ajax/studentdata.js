window.onload = function() {

    /**
     * Function Declaration
     */

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

    function assignChangeEventToTabs(tabs) {
        var prev = null;
        for (var i=0; i<tabs.length; i++) {
            tabs[i].addEventListener('change', function() {
                if (this !== prev) {
                    prev = this;
                }
                getStudentsByCourse(this.value);
            });
        }
    }

    function getStudents(course, section, yearlevel, limit) {
    }
    function searchStudentsByKeyword(keyword) {
    }
    function deleteStudent(id) {
    }
    function deleteSelectedStudents() {
    }




    /**
     * Function Execution
     */
    // This code every time the page gets accessed or refreshed
    getStudentsByCourse('bsce'); // Defaulted to bsce because there's no state/change detection yet

    // Assign event handlers to tabs
    tabs = this.document.getElementsByName('course');
    assignChangeEventToTabs(tabs);
    
};