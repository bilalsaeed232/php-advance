<?php 

class BasicIterator extends IteratorIterator {
    public function __construct($path) {

        //create a traversable SplFileObject
        parent::__construct(new SplFileObject($path, 'r'));

        // properties for inner iterator (SplFileObject) to work with csv
        $file = $this->getInnerIterator();

        $file->setFlags(SplFileObject::READ_CSV);
        $file->setCsvControl(',', '"', "\\");
    }
}

class FilterRows extends FilterIterator {
    public function accept() {
        $current = $this->getInnerIterator()->current();
        if(count($current) == 1) {
            return false;
        }

        return true;
    }
}

$filePath = './data.csv';

$iterator = new BasicIterator($filePath);
$iterator = new FilterRows($iterator);

foreach ($iterator as $i => $row) {
    var_dump($row);
}


?>