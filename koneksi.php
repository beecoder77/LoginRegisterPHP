<?php

$db_host = "localhost";
$db_user = "beecoder77_abid";
$db_pass = "Semar@365%";
$db_name = "beecoder77_abid";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
