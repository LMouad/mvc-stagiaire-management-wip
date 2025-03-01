<?php 
$host = 'localhost';
$dbname = 'mvc_project1';
$username ='root';
$password ='';
$message = "ERROR MESSAGE -> ";
try{
    $conn = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'connected ✔';
}catch(PDOException $e){
    die($message .$e->getMessage());
}
?>