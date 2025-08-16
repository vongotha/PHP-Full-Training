<?php

namespace Core;

class App {
    protected static $container; 
    public function setContainer($container) {
        static::$container = $container;
    }
    public function container($container) {
        static::$container;
    }
    public function bind($key,$resolver) {
        static::container()->bind($key,$resolver);
    }
    public function resolve($key) {
        return static::container()->resolve($key);
    }

}