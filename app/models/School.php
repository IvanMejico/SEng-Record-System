<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator;
use Core\Validators\UniqueValidator;

class School extends Model {
    public $id, $name, $mission, $vision, $goal, $logo;
    public function __construct() {
        $table = 'school';
        parent::__construct($table);
    }

    public function validator() {
        $this->runValidation(new UniqueValidator($this, ['field'=>'id', 'msg'=>'School ID is already taken.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'id', 'msg'=>'School ID is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'name', 'msg'=>'Name of the school is required.']));
    }
}