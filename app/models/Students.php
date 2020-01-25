<?php

namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator;
use Core\Validators\UniqueValidator;

class Students extends Model {
    public $id, $firstname, $middlename, $lastname, $gender, $yearlevel, $course, $section, $picture = '';

    public function __construct() {
        $table = 'students';
        parent::__construct($table);
    }

    public function validator() {
        $this->runValidation(new UniqueValidator($this, ['field'=>'id', 'msg'=>'Student ID No. already taken.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'id', 'msg'=>'Student ID No. is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'firstname', 'msg'=>'First name is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'middlename', 'msg'=>'Middle name is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'lastname', 'msg'=>'Last name is required.']));
    }

    public function getSuccessMessage() {
        return $html = '<div class="message success"><i class="flaticon-close close-button"></i>Student successfully added</div>';
    }
}