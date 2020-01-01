<?php


namespace App\Controllers;
use Core\Controller;
use App\Models\Login;

class LoginController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->view->setLayout('login');
        // $this->load_model('Users');      // No models and database yet
    }

    public function indexAction() {
        $loginModel = new Login();
        if($this->request->isPost()) {
            // TODO: CSRF check.
            

            // TODO: Form validation.
        }

        // TODO: Display errors.

        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';    // Maket this better.
        $this->view->render('login/index');
    }
    
    public function adminAction() {
        $this->view->bodyAttr = 'class="align"';    // Maket this better.
        
        //Write a validation here
        
        $this->view->render('login/admin');
    }
}