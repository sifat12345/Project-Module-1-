<?php
define("USERNAME", "admin");
define("PASSWORD", "12345");

echo "Enter a User Name: ";
$user_in = (int)readline();

if($user_in == USERNAME ){
    echo  " USERNAME Ok !!!";
}else{
    echo "Sorry......";
}

echo "Enter a Password: ";
$pass_in = (int)readline();


if($pass_in == PASSWORD){
    echo  " PASSWORD OK !!!";
}else{
    echo "Sorry......";
}
