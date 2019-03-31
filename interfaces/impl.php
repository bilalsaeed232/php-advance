<?php 

require_once('interfaces.php');

class Table implements TableInterface, LogInterface {
    public function save($data) {
        echo "Saving {$data}";
    }

    public function log($msg) {
        echo "Logging {$msg}";
    }
}


$t = new Table();
$t->save('random data...');
echo "\n";
$t->log("random log data...");


?>