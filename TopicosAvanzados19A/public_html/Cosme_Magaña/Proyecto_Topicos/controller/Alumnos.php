<?php

require_once '../Model/Alumnos.php';
  //Instanciando la clase alumnos
  $alumnos= new Alumnos();
  //Indicando que si se envia por metodo post se reciba y dependiendo el valor de el action realizara la accion indicada
  if (isset($_POST['action'])) {
      $action =$_POST['action'];
      if ($action=='agregar') {
        $alumnos->matricula= $_POST['matricula'];
        $alumnos->nombre= $_POST['nombre'];
        $alumnos->apellidopat= $_POST['apellido_pat'];
        $alumnos->apellidomat= $_POST['apellido_mat'];
        $alumnos->id_grado= $_POST['grado'];
        $alumnos->id_nivel= $_POST['nivel'];
        $alumnos->create();
      }
      if ($action=='editar') {
        $alumnos->matricula= $_POST['matricula'];
        $alumnos->nombre= $_POST['nombre'];
        $alumnos->apellidopat= $_POST['apellido_pat'];
        $alumnos->apellidomat= $_POST['apellido_mat'];
        $alumnos->id_grado= $_POST['grado'];
        $alumnos->id_nivel= $_POST['nivel'];
        $alumnos->update($alumnos->matricula);
      }
      if ($action=='eliminar') {
        $alumnos->matricula= $_POST['matricula'];
        $alumnos->delete($alumnos->matricula);
      }

  }

  function read(){
    $alumnos= new Alumnos();
    return $alumnos->read();
  }
 ?>
