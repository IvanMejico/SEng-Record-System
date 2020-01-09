<?php

namespace App\Controllers;
use Core\Controller;

class ManagestudentsController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Student List';
        $this->view->render('students/index');
    }

    public function add_studentAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Add Student';
        $this->view->render('students/student_form');
    }

    public function bulk_add_studentsAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Bulk Add Students';
        $this->view->render('students/bulk_add_students');
    }

    public function edit_student_infoAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Edit Student Information';
        $this->view->render('students/student_form');
    }

    public function infoAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Student Information';
        $this->view->render('students/info');
    }
}