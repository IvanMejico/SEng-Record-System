<?php

namespace App\Controllers;
use Core\Controller;
use Core\H;
use App\Models\Users;

class HomeController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Home';
        $this->view->render('home/index');
    }

    public function logoutAction() {
        $this->view->render('login');
    }

    public function testAjaxAction() {
        $resp = ['success'=>true, 'data'=>['id'=>23,'name'=>'Ivan', 'favorite_food'=>'beef wellington']];
        $this->jsonResponse($resp);
    }
}