<?php


namespace App\Controllers;
use Core\Controller;
use Core\Router;
use App\Models\Login;
use App\Models\Users;

// debugging
use Core\H;

class LoginController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->view->setLayout('login');
        $this->load_model('Users');      // No models and database yet
    }

    public function indexAction() {
        $isAdmin = false;
        $loginModel = new Login($isAdmin);
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $loginModel->assign($this->request->get());
            $loginModel->validator();
            if($loginModel->validationPassed()) {
                $user = $this->UsersModel->findByUsername($_POST['username']); // returns an object of User class containing results as attributes
                if($user && password_verify($this->request->get('password'), $user->password)) {
                    $remember = false;
                    $user->login($remember); // Defaulted remember to false. Might change later but I don't see any need now.
                    Router::redirect('');
                } else {
                    $loginModel->addErrorMessage('username', 'Log-in failed!.');
                    $loginModel->addErrorMessage('password', '');
                }
            }
        }

        $this->view->login = $loginModel;
        $this->view->displayErrors = $loginModel->getErrorMessages();

        $this->view->pageTitle = "Log In";
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';    // Maket this better.
        $this->view->render('login/index');
    }
    
    public function adminAction() {
        $isAdmin = true;
        $loginModel = new Login($isAdmin);
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $loginModel->assign(($this->request->get()));
            $loginModel->validator();
            if($loginModel->validationPassed()) {
                $user = $this->UsersModel->findByUsername($_POST['username']);
                if($user && password_verify($this->request->get('password'), $user->password)) {
                    $remember = false;
                    $user->login($remember);
                    Router::redirect('');
                } else {
                    $loginModel->addErrorMessage('username', 'Log-in failed!');
                    $loginModel->addErrorMessage('password', '');
                }
            } 
        }

        $this->view->login = $loginModel;
        $this->view->displayErrors = $loginModel->getErrorMessages();
        
        $this->view->pageTitle = "Administrator Log In";
        $this->view->bodyAttr = 'class="align"';    // Maket this better.
        $this->view->render('login/admin');
    }

    public function logoutAction() {
        if(Users::currentUser()) {
            Users::currentUser()->logout();
        }
    }
}