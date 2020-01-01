<?php

namespace App\Controllers;
use Core\Controller;

class SettingsController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Settings';
        $this->view->render('settings/index');
    }
}