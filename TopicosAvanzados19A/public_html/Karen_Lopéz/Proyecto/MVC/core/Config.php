<?php
//
//Sourse: Config.php
//Author: Karen López
//Date: 09/05/19
//Description: clase que permite realizar una conexion a la BD
//

class Config{
		private $hostname="";
		private $username="";
		private $password="";
		private $BD="";

	function conectar(){
		$this->hostname="localhost";
		$this->username="root";
		$this->password="";
		$this->BD="proyecto";

		$link=mysqli_connect($this->hostname, $this->username, $this->password, $this->BD);
		return $link;
	}
}