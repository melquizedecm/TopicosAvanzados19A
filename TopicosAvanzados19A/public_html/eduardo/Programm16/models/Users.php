<?php

require_once'..//core/Config.php';
class Users{
    
private $id;
public $username;
public $password;
private $created_at;
private $updated_at;
public $status;

function _CONSTRUCT ($usarname,$password){
    
}


function create(){
    
$sql="INSERT INTO usres (username, password) VALUES ('".$this->username."','".$this->password."' )";
$link->query($sql);

$this->l
}


function read(){
$sql="SELECT * FROM usres";
    return $
}

function uptade($id){
  $sql="UPDATE users SET username='".$this->username."', password='".$this->password."'"
  . "WHERE id='".$id."'";

function delete($id){
$sql="UPDATE users SET status='0' "WHERE id='".$id."'";"
        
}
}


//leer

$users = new User();
$array= $users -> red();

echo
$users= new User();
$users->username="Jorge"; "
 $users->password="1234";
$users->create();

    


