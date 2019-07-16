<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$con = new mysqli($servername, $username, $password, $dbname);

//if ($con->connect_error) {
//    die("Connection failed: " . $con->connect_error);
//}

//try{
//    $con = new PDO("mysql:host=$servername; dbname = shop", $username, $password);
//    echo "Connection successful";
//}catch ( PDOException $e){
//    echo "Connection faild: . $e->getMessage()";
//}
//$sql = "CREATE DATABASE `MySQLDB`";
//if ($con->query($sql)===true){
//    echo '<br>'."Database create";
//}else{
//    echo "Error". $con->error;
//
//
//}

//$sql = "CREATE TABLE users( //создание таблицы
//        name varchar (30) NOT NULL,
//        surname varchar (30) NOT NULL PRIMARY KEY,
//        password varchar (30) NOT NULL)";

//if ($con->query($sql) === TRUE){
//    echo "Table users created successful";
//}else{
//    echo "Error". $con->error;
//}

$sql = "INSERT INTO users(name, surname, password)
VALUES('Ivan','Ivanov','54321')";
if ($con->query($sql) === TRUE) {
    echo '<pre>' . "Record created";
}
