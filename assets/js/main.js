var tabButtons = document.getElementsByClassName("tabBtn");

function showTables(yearLvl) {
    var panel = document.getElementById("ttr-panel");
    for (var i=1; i < panel.children.length; i++)
        panel.children[i].style.display = "none";

    content = document.getElementById(yearLvl);
    content.style.display = "block";
}

function addActive() {
    for (i=0; i < tabButtons.length; i++) {
        tabButtons[i].className = tabButtons[i].className.replace("active", "");
    }
    this.classList.add('active');
    showTables(this.dataset.tabname);
}

Array.prototype.forEach.call(tabButtons, function(b) {
    b.addEventListener('click', addActive);
});