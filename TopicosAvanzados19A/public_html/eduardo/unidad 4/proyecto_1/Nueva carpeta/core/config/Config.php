<?php

class config{

private $hostname="";
private $username="";
private $password="";
private $db="";

function conectar(){

$this->hostname="localhost";
$this->username="root";
$this->password="";
$this->db="topicos";

$link= mysqli_connect($this->hostname, $this->username, $this->password, $this->db); 
return $link;
}
}


    
    
?>