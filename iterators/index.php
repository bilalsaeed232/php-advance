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

$filePath = './data.csv';
$iterator = new BasicIterator($filePath);

foreach ($iterator as $i => $row) {
    var_dump($row);
}


?>