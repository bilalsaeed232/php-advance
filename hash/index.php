<?php 

$password = password_hash('test', PASSWORD_DEFAULT, ['cost' => 10]);

echo $password . "\n";


// $verified = password_verify('bilal', $password);
$verified = password_verify('test', $password);



if($verified) {
    echo "Correct password! \n";
}else {
    echo "inCorrect password! \n";
}


if(password_needs_rehash($password, PASSWORD_DEFAULT, [ 'cost' => 12])) {
    echo "Password needs rehashing!!\n\n";
    $new_hash = password_hash('test', PASSWORD_DEFAULT, ['cost'=> 12]);
    echo "New hashed password:\n";
    echo $new_hash;
}else {
    echo "Password does not need rehashing!!";
}

?>