<?php

namespace App\Controllers;
use Core\Controller;

class ManageprogramsController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Academic Programs';
        $this->view->render('programs/index');
    }

    public function add_programAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Add Academic Program';
        $this->view->render('programs/program_form');
    }

    public function edit_programAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Edit Academic Program';
        $this->view->render('programs/program_form');
    }
}