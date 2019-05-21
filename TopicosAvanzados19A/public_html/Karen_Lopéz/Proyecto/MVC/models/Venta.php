<?php
require_once '../core/Config.php';

//
//Sourse: Ventas.php
//Author: Karen López
//Date: 09/05/19
//Description: clase que permite realizar el modelo a la BD
//

class Ventas extends Config{
	public $precio_c;
	public $precio_v;
	public $codigo_b;
	public $existencia;
	private $link;

//en el CONSTRUCT tiene al comienzo dos __
	function __CONSTRUCT(){
		$this->link=parent:: conectar();
	}

	function creat(){

	}

	function read(){

	}

	function update($codigo_b){
		$sql="UPDATE productos SET precio_c='".$this->precio_c."', precio_v='".$this->precio_v."', existencia='".$this->existencia."' WHERE codigo_b='".$codigo_b."'";
		return $this->link->query($sql);
	}

	function delete($codigo_b){
		$sql="UPDATE productos SET status='0' WHERE codigo_b='".$codigo_b."'";
		return $this->link->query($sql);
	}
}