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
<<<<<<< HEAD
            $this->errors['password'] = "Password must be at least 7 characters long.";
=======
            $this->errors['password'] = "Password must be between 7 and 255 characters.";
>>>>>>> 5d568d9cb9ea815b278ad2e87afa8c4418a72de6
>>>>>>> ec8778e6315ff47c7b7853ad77e225949ffdc87d
        }
        return empty($this->errors);
    }

    public function errors() {
        return $this->errors;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ec8778e6315ff47c7b7853ad77e225949ffdc87d

    public function error($field, $message) {
        $this->errors[$field] = $message;
    }
<<<<<<< HEAD
=======
=======
>>>>>>> 5d568d9cb9ea815b278ad2e87afa8c4418a72de6
>>>>>>> ec8778e6315ff47c7b7853ad77e225949ffdc87d
}