<?php 


class Singleton {
    protected static $instance;


    // unable to craete new instance from outside...
    protected function __construct(){

    }


    // only way to get instance of this class
    public static function getInstance() {
        if(null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }


    // unable to make a copy
    private function __clone(){

    }

    // unable to unserialize...
    private function __wakeup(){

    }

}


class SingletonChild extends Singleton {
    protected static $instance;
}



$singleton = Singleton::getInstance();
$childSingleton = SingletonChild::getInstance();


var_dump((Singleton::getInstance() === $singleton));
var_dump((Singleton::getInstance() === $childSingleton));
var_dump((SingletonChild::getInstance() === $childSingleton));


?>