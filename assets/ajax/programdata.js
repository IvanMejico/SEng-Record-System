function getProgramById(programId) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/SENG_SYSTEM/manageprograms/getdata/'+programId, true);
    xhr.onload = function() {
        if(this.status == 200) {
            var response = JSON.parse(this.responseText);
            renderSchoolInfo(response);
        }
    };
    xhr.send();
}