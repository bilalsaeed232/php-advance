<?php 


class User {
    public $username;
    private $password;  
    private $email;

    //only one can be declared, php do not support constructor overloading...
    function __construct() {
        $this->password = 'secret123';
    }

    // when an undefined function is called
    function __call($name, $args) {
        $arguments = implode(',',$args);
        echo "magic __call called because of {$name} and with parameters {$arguments} \n";
    }
    
    // when an undefined static function is called
    public static function __callStatic($name, $args){
        $arguments = implode(',',$args);
        echo "magic __callStatic called because of {$name} and with parameters {$arguments}\n";    
    }


    // when any none public property or which do not exist is about to be set.
    public function __set($prop, $val) {
        echo "Magic __set called with property {$prop} & value {$val}.\n";
        $this->$prop = $val;
    }


    //when a property which do not exist or is private is called on instance of this class
    public function __get($prop) {
        echo "Magic __get called because of {$prop} property.\n";

        if($prop == "password") {
            echo "Sorry, this property is not accessible. \n";
            return null;
        }

        return (isset($this->$prop) ? $this->$prop : null);
    }



    public function __toString(){
        $result = "{\n";
        $result .= "Username : {$this->username}\n";
        $result .= "Email : {$this->email}\n";
        $result .= "}\n";

        return $result;
    }


    public function __invoke() {
        echo "\nThis object is being invoked as a function...\n";
    }


    // to override var_dump behavior...
    public function __debuginfo() {
        if ($this->username == 'bilalsaeed232') {
            return [
                "type"=> "Admin"
            ];
        }
        else{
            return [
                "type"=> "User"
            ];
        }
    }

    // called before serialization
    function __sleep() {
        echo "__sleep called before serialization...\n";

        $this->email = base64_encode($this->email);
        $this->username = base64_encode($this->username);
        return array('email', 'username');
    }

    // called before deserialization
    function __wakeup() {
        echo "__wakeup called...";
        $this->email = base64_decode($this->email);
        $this->username = base64_decode($this->username);
     }


    /**
     * only in php5 and above
     * do not take any arguments
     * used for object cleanup, e.g closing file, database connection etc.
     */
    public function __destruct() {
        echo "Destructing the object User...";
    }



}




$u = new User();

$u->someUndefinedMethod('bilal','khan');
User::insertUser('bilalsaeed');


$u->email = 'bilalsaeed232@gmail.com';
echo $u->email . "\n";
echo $u->password . "\n";
echo $u->sdfs . "\n";

$u->password = '23232';
echo $u->password . "\n";


$u->username = 'bilalsaeed';
echo 'Username: ' . $u->username . "\n";

echo "User object: " . $u . "\n";

var_dump($u);


$u();


echo "Serializing Object...\n";
$serialized =  serialize($u);
echo $serialized;
echo "\n";
echo "UnSerializing Object...\n";
echo (unserialize($serialized));
echo "\n";



?>