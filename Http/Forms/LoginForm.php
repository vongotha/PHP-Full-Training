<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm {

    protected $errors = [];
    public function validate($email, $password) {
        
        if (!Validator::email($email)) {
            $this->errors['email'] = "Please enter a valid email address.";
        }


        if (!Validator::string($password, 7, 255)) {
            $this->errors['password'] = "Password must be between 7 and 255 characters.";
        }
        return empty($this->errors);
    }

    public function errors() {
        return $this->errors;
    }
}