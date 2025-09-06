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
<<<<<<< HEAD
            $this->errors['password'] = "Password must be at least 7 characters long.";
=======
            $this->errors['password'] = "Password must be between 7 and 255 characters.";
>>>>>>> 5d568d9cb9ea815b278ad2e87afa8c4418a72de6
        }
        return empty($this->errors);
    }

    public function errors() {
        return $this->errors;
    }
<<<<<<< HEAD

    public function error($field, $message) {
        $this->errors[$field] = $message;
    }
=======
>>>>>>> 5d568d9cb9ea815b278ad2e87afa8c4418a72de6
}