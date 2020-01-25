<?php

namespace App\Models;

use Core\Model;
use core\Validators\RequiredValidator;
use core\Validators\UniqueValidator;

class Programs extends Model {
    public $id, $name, $mission, $vision, $goal, $logo;

    public function __construct() {
        $table = 'programs';
        parent::__construct($table);
    }

    public function validator() {
        $this->runValidation(new UniqueValidator($this, ['field'=>'id', 'msg'=>'Program ID is already taken.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'id', 'msg'=>'Program ID is required.']));
        $this->runValidation(new RequiredValidator($this, ['field'=>'name', 'msg'=>'Name is required.']));
    }

    public function getSuccessMessage() {
        return $html = '<div class="message success"><i class="flaticon-close close-button"></i>Program successfully Added</div>';
    }
}