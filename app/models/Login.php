<?php

namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator;

class Login extends Model {
    public $username, $password, $remember_me;

    public function __construct() {
        parent::__construct('tmp_fake');
    }
    
    public function validator() {
        $this->runValidation(new RequiredValidator($this,['field'=>'username', 'msg'=>'No department selected.']));
        $this->runValidation(new RequiredValidator($this,['field'=>'password', 'msg'=>'Enter password.']));
    }

    public function getRememberMeChecked() {
        return $this->remember_me == 'on';
    }
}