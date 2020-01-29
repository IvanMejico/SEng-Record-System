<?php

namespace App\Models;
use Core\Model;
use Core\Validators\DBConfirmValidator;
use Core\Validators\RequiredValidator;
use Core\Validators\MatchesValidator;
use Core\Validators\MinValidator;

class Settings extends Model {
    public $old_pwd, $new_pwd, $confirm;

    public function __construct() {
        parent::__construct('tmp_fake');
    }

    public function validator() {
        /**
         * 1. Check if the fields are not empty.
         * 2. check if the current password matches with one in the database.
         * 3. Check if the confirmation matches with the new password.
         */

        // If these passes ...
        $this->runValidation(new RequiredValidator($this, ['field'=>'old_pwd', 'msg'=>'Input current password.']));;
        $this->runValidation(new RequiredValidator($this, ['field'=>'new_pwd', 'msg'=>'Input new password.']));;
        $this->runValidation(new RequiredValidator($this, ['field'=>'confirm', 'msg'=>'Input password confirmation.']));;


        // ... then do these
        if($this->_validates) {
            $this->runValidation(new MinValidator($this, ['field'=>'new_pwd', 'rule'=>6, 'msg'=>'Password must be a minimum 6 characters.']));
            $this->runValidation(new DBConfirmValidator($this, ['field'=>'old_pwd', 'msg'=>'Current password is wrong.']));
            $this->runValidation(new MatchesValidator($this, ['field'=>'new_pwd', 'rule'=>$this->confirm, 'msg'=>"Password confirmation do not match."]));
            $this->runValidation(new MatchesValidator($this, ['field'=>'confirm', 'rule'=>$this->new_pwd, 'msg'=>""]));
        }
    }

    public function getSuccessMessage() {
        return $html = '<div class="message success"><i class="flaticon-close close-button"></i>Password successfully updated!</div>';
    }
}