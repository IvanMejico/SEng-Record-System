window.onload = function() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/SENG_SYSTEM/managestudents/getdata', true);
    xhr.onload = function() {
        if(this.status == 200) {
            var response = JSON.parse(this.responseText);
            renderTable(response);
        }
    };
    xhr.send();
};