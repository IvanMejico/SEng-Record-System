function renderSchoolInfo(schoolObj) {
    schoolName = document.getElementById('schoolname-text');
    mission = document.getElementById('mission-text');
    vision = document.getElementById('vision-text');
    goal = document.getElementById('goal-text');
    logo = document.getElementById('school-logo');
    editBtn = document.getElementById('btn-edit-program');
    schoolName.innerHTML = '<em><b>'+schoolObj[0].name+'</b></em>';
    mission.innerText = schoolObj[0].mission;
    vision.innerText = schoolObj[0].vision;
    goal.innerText = schoolObj[0].goal;
    logo.src = '/SENG_SYSTEM/public/uploads/logo/'+schoolObj[0].logo;
    editBtn.setAttribute('href', '/SENG_SYSTEM/manageprograms/edit_program/'+schoolObj[0].id);
}