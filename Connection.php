<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "courier_managment";

 
$connection =  mysqli_connect($servername,$username,$password,$db);


if($connection == false){
    echo 'db is not connected';
}

?>