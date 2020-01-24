<?php

namespace Core\Validators;
use Core\Validators\CustomValidator;

use Core \H;

class UniqueValidator extends CustomValidator {

    public function runValidation() {
        $field = (is_array($this->field)) ? $this->field[0] : $this->field;
        $value = $this->_model->{$field};

        // Check if id is being updated. If it hasn't changed then return true to skip further validation.
        if($field=='id' && $this->_model->isUpdating()) {
            $path = $_SERVER['PATH_INFO'];
            $path_arr = explode('/', $path);
            $id = end($path_arr);
            if($id == $value) {
                return true;
            }
        }

        // check if just validating and updating other fields.
        if($field!='id' && $this->_model->isUpdating()) {
            $conditions[] = 'id != ?';
            $bind[] = $this->_model->id;
        }

        $conditions = ["{$field} = ?"];
        $bind = [$value];

        // this allows you to check multiple fields for Unique
        // TODO: might have to update this later
        if(is_array($this->field)) {
            array_unshift($this->field);
            foreach($this->field as $adds) {
                $conditions[] = "{$adds} = ?";
                $bind[] = $this->_model->{$adds};
            }
        }
        $queryParams = ['conditions'=>$conditions, 'bind'=>$bind];
        $other = $this->_model->findFirst($queryParams);
        return(!$other);
    }
}