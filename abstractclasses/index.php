<?php 

abstract class Database {

    abstract public function connect();

    public function disconnect() {
        echo "Disconnecting from database...\n";
    }


    public function __destruct() {
        $this->disconnect();
    }
}

class MySql extends Database {
    public function connect() {
        echo "Connecting to mysql database...\n";
    }
}

$mysql = new MySql();
$mysql->connect();


// not possible to instantiate abstract class
// $db = new Database();





?>