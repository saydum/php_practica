<?php
class Singleton {
    protected static $instance;

    protected function __construct(){}

    protected function __clone() {}

    public static function getInstance() {
        if (!isset(self::$instance)){
            self::$instance == new Singleton;
        }
        return self::$instance;
    }

}

$singleTone  = Singleton::getInstance();
