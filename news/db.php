<?php
$servername = "localhost";
$database = "news";
$user = "root";
$password = "";

//Соединение
$db = mysqli_connect($servername,$user,$password,$database);
if(!$db){
    die("Connection failed" . mysqli_connect_error());
}
?>