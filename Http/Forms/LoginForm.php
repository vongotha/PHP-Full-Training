<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm {

    protected $errors = [];
    public function validate($email, $password) {
        
        if (!Validator::email($email)) {
            $this->errors['email'] = "Please enter a valid email address.";
        }


<<<<<<< HEAD
    if (!Validator::string($password, 7, 255)) {
        $this->errors['password'] = "Password must be between 7 and 255 characters.";
}
=======
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
>>>>>>> 4e4b4a27cc983be60564282e0b63c2643f9753ad
        return empty($this->errors);
    }

    public function errors() {
        return $this->errors;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ec8778e6315ff47c7b7853ad77e225949ffdc87d
>>>>>>> 4e4b4a27cc983be60564282e0b63c2643f9753ad

    public function error($field, $message) {
        $this->errors[$field] = $message;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 5d568d9cb9ea815b278ad2e87afa8c4418a72de6
>>>>>>> ec8778e6315ff47c7b7853ad77e225949ffdc87d
>>>>>>> 4e4b4a27cc983be60564282e0b63c2643f9753ad
}