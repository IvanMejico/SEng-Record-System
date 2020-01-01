<?php

namespace App\Controllers;
use Core\Controller;

class ManageschoolController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'School Information';
        $this->view->render('school/index');
    }

    public function edit_school_infoAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Edit School Information';
        $this->view->render('school/school_form');
    }
}