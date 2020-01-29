<?php

namespace Core\Validators;
use Core\Validators\CustomValidator;
use Core\DB;
use App\Models\Users;

use Core\H;

class DBConfirmValidator extends CustomValidator {

    public function runValidation() {
        $value = $this->_model->{$this->field};
        // Compare $value from the password value from the database
        $UsersModel = new Users();
        $admin = $UsersModel->findById('6');
        $old_pwd = $admin->password;
        return ($admin && password_verify($value, $old_pwd));
    }
}