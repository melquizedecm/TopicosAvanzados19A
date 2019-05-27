<?php
$host="localhost";
$user = "root";
$password = "";
$database = "proyecto";
$dsn="mysql:host=$host; dbname=$database";

try{
	$conexion=new PDO($dsn, $user, $password);
} catch(PDOException $error){
	echo $error->getMessage();
}