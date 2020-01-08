<?php

namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator;

class Login extends Model {
    public $username, $password, $remember_me;
    protected $admin;


    public function __construct($isAdmin) {
        parent::__construct('tmp_fake');
        $this->isAdmin = $isAdmin; // $admin is boolean true='login as admin'
    }
    
    public function validator() {
        if($this->isAdmin) {
            $this->runValidation(new RequiredValidator($this,['field'=>'username', 'msg'=>'Enter Username.']));
            $this->runValidation(new RequiredValidator($this,['field'=>'password', 'msg'=>'Enter password.']));
        } else {
            $this->runValidation(new RequiredValidator($this,['field'=>'username', 'msg'=>'No department selected.']));
            $this->runValidation(new RequiredValidator($this,['field'=>'password', 'msg'=>'Enter password.']));
        }
    }

    public function getRememberMeChecked() {
        return $this->remember_me == 'on';
    }
}