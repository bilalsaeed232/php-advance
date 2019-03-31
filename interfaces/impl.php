<?php 

require_once('interfaces.php');

class Table implements TableInterface, LogInterface, Countable {
    public function save($data) {
        echo "Saving {$data}";
    }

    public function log($msg) {
        echo "Logging {$msg}";
    }

    public function count() {
        return 20;
    }
}


$t = new Table();
$t->save('random data...');
echo "\n";
$t->log("random log data...");
echo "\n";
echo $t->count();

?>