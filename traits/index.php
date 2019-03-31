<?php 

trait Log {
    protected function log($msg) {
        echo "{$msg}. \n";
    }
}


class User {
    use Log;

    public function save($username) {
        $this->log("Saving {$username}");
    }
}


$u = new User();
$u->save('Bilal Saeed');


?>