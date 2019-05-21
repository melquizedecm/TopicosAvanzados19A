<?php
require_once '../core/Config.php';

//
//Sourse: Users.php
//Author: Karen López
//Date: 09/05/19
//Description: clase que permite realizar el modelo a la BD
//

class Users extends Config{
	private $id;
	public $username;
	public $password;
	public $email;
	public $status;
	private $created_at;
	private $updated_at;
	private $link;

//en el CONSTRUCT tiene al comienzo dos __
	function __CONSTRUCT(){
		$this->link=parent:: conectar();
	}

	function creat(){

	}

	function read(){

	}

	function update($id){
		$sql="UPDATE users SET username='".$this->username."', password='".$this->password."', email='".$this->email."' WHERE id='".$id."'";
		return $this->link->query($sql);
	}

	function delete($id){
		$sql="UPDATE users SET status='0' WHERE id='".$id."'";
		return $this->link->query($sql);
	}
}