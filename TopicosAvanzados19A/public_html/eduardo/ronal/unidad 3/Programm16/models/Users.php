<?php

require_once '../core/config.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

///depende el nobre de la tabla va el nmbre de la clase
class Users {

    private $id;
    public $username;
    public $password;
    private $created_at;
    private $updated_at;
    public $status;
    private $link;

    function __CONSTRUCT() {
        require_once '..//core/config.php';
        $model = new config();
        $this->link = $model->conectar();
    }

    function create() {

        $sql = "INSERT INTO user (username, password) VALUES ('" . $this->username . "','" . $this->password . "')";
        $this->link->query($sql);
    }

    function read() {
        $sql = "SELECT * FROM user";
        $tabla = $this->link->query($sql);
        $array = array();
        $i = 0;
        while ($fila = $tabla->fetch_array(MYSQLI_BOTH)) {
            $array[$i] = $fila;
            $i++;
        }
        return $array;
    }

    function uptade($id) {
        $sql = "UPDATE user SET username='" . $this->username . "', password='" . $this->password . "'" . "WHERE id='" . $id . "'";
        $this->link->query($sql);
    }

    function delete($id) {
        $sql = "UPDATE user SET status='0' WHERE id='" . $id . "'";
        $this->link->query($sql);
    }

}

/*
 agregar

 $user=new User();
 $user->username="oscar";
 $user->password="45455";
 $user->create();
*/


 /*
  leer

  $users=new Users();
  $array=$users->read();
  echo json_encode($array);
*/


/*
 modificar

 $users=new Users();
 $users->username="jorge";
 $users->password="1234";
 $users->update('6');
*/

 /*
eliminar

  $users=new Users();
  $users->username="jorge";
  $users->password="12345";
  $users->delete();
*/
//-------------------------------------------------------------
//prueba del metodo create
//$users= new Users();
//$username="jorge";
//$password="12345";
//$users->create();
    
//prueba del metodo read
//$users= new Users();
//$array= $users->read();
//echo json_encode($array);
//el j_son convierte una tabla en forma de texto

//prueba del metodo update
//$users= new Users();
//$username="juan_perez";
//$password="12345678";
//$users->update();

//prueba del metodo delete
//$users= new Users();
//$users->delete('2');