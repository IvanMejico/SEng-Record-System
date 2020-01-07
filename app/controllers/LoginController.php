<?php


namespace App\Controllers;
use Core\Controller;
use Core\Router;
use App\Models\Login;

// debugging
use Core\H;

class LoginController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->view->setLayout('login');
        $this->load_model('Users');      // No models and database yet
    }

    public function indexAction() {
        $loginModel = new Login();
        if($this->request->isPost()) {
            // Form validation.
            $this->request->csrfCheck();
            $loginModel->assign($this->request->get());
            $loginModel->validator();
            if($loginModel->validationPassed()) {
                $user = $this->UsersModel->findByUsername($_POST['username']); // returns an object of User class containing results as attributes
                if($user && password_verify($this->request->get('password'), $user->password)) {
                    $user->login(false); // Defaulted remember to false. Might change later but I don't see any need now.
                    Router::redirect('');
                } else {
                    $loginModel->addErrorMessage('username', 'Log-in failed!.');
                    $loginModel->addErrorMessage('password', '');
                }
            }
        }

        // TODO: Display errors.
        $this->view->login = $loginModel;
        $this->view->displayErrors = $loginModel->getErrorMessages();

        $this->view->pageTitle = "Log in";
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';    // Maket this better.
        $this->view->render('login/index');
    }
    
    public function adminAction() {
        $this->view->bodyAttr = 'class="align"';    // Maket this better.
        
        //Write a validation here
        
        $this->view->render('login/admin');
    }
}