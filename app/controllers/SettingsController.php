<?php

namespace App\Controllers;
use Core\Controller;
use App\Models\Settings;
use App\Models\Users;
use Core\H;

class SettingsController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->load_model('Users');
    }

    public function indexAction() {
        $this->view->_message = '';
        $this->view->displayErrors = [];

        $SettingsModel = new Settings();

        if($this->request->isPost()) {
            $SettingsModel->assign($this->request->get());
            $admin = $this->UsersModel->findById('6');
            $SettingsModel->validator();
            if($SettingsModel->validationPassed()) {
                $password = $this->UsersModel->encrypt($SettingsModel->new_pwd);
                if($this->UsersModel->update($admin->id, ['password' => $password]))
                    $this->view->_message = $SettingsModel->getSuccessMessage();
            }

        }
        
        $this->view->displayErrors = $SettingsModel->getErrorMessages();
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Settings';
        $this->view->render('settings/index');
    }
}