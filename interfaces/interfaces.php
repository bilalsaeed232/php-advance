<?php 

interface TableInterface {
    public function save(array $data);
}

interface LogInterface {
    public function log($message);
}



?>