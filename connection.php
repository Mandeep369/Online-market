<?php

$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "MHshop";

$connection = mysqli_connect($servername, $username, $password, $databaseName) ;

if($connection){
    echo "";
}
else {
    die("Connection Failed because ".mysqli_connect_error());
}


?>