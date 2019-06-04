<?php
require_once('../core/Config.php');

class Users extends config{

private $id;
public $username;
public $password;
private $created_at;
private $updated_at;
public $status;
private $link;


function __construct(){

$this->link= parent::conectar();
}

function create(){}


function read(){}


function update($id){

   $sql="UPDATE users SET username='".$this->username."', password='".$this->password."' WHERE id='".$id."'"; 
   return $this->link->query($sql);  


}



function delete(){}





}
/*prueba de update
$users= new Users();
$users->username="juan perez";
$users->password="juanito12345";
$id="1";
echo $users->update($id);
 * 
 */