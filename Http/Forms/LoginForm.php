<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm {

    protected $errors = [];
    public function __construct(public array $attributes) {
        $this->attributes = $attributes;

        if (!Validator::email($attributes['email'])) {
            $this->errors['email'] = "Please enter a valid email address.";
        }

        if (!Validator::string($attributes['password'], 7, 255)) {
            $this->errors['password'] = "Password must be between 7 and 255 characters.";
        }
    }


    public static function validate($attributes) {
        $instance = new static($attributes);

        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw() {
        ValidationException::throw($this->errors, $this->attributes);
    }
    
    public function failed() {
        return count($this->errors);
    }

    public function errors() {
        return $this->errors;
    }
    public function error($field, $message) {
        $this->errors[$field] = $message;

        return $this;
    }
}