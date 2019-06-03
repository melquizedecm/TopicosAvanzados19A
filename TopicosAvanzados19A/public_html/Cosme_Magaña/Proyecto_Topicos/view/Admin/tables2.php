<!DOCTYPE html>
<!--
Authors: Francisco Montalvo
Jesus Lira
Cosme Magaña

-->



<?php
session_start();
require_once '../../Core/Config.php';
require_once '../../controller/pagosu.php';
$datosid=$_SESSION['usuario'];
  $conexion=new Config();
  $link=$conexion->conectar();
  //consulta trabajadores
  $sqldatos="SELECT trabajadores.matricula, trabajadores.nombre, trabajadores.apellido_p,trabajadores.apellido_m FROM trabajadores WHERE matricula='$datosid'";
  $tabladatos=$link->query($sqldatos);
  $filadatos=$tabladatos->fetch_array(MYSQLI_BOTH);
  //Consulta alumnos
  $sql="SELECT alumnos.matricula,alumnos.nombre,alumnos.apellido_p,alumnos.apellido_m,grado.grado,nivel.nivel FROM alumnos,grado,nivel WHERE nivel.id_n=alumnos.id_n AND grado.id_g=alumnos.id_g AND alumnos.Status=1";
  $tablaalumnos=$link->query($sql);
  //Consulta trabajadores
  $sqltrabajadores="SELECT * FROM trabajadores WHERE trabajadores.Status=1";
  $tablatrabajadores=$link->query($sqltrabajadores);

  /*Consulta eventos*/
  $sqlE="SELECT eventos.id_e,eventos.nombre,lugar.lugar,fecha.fecha,hora.hora,nivel.nivel FROM participar,eventos,lugar,fecha,hora,nivel WHERE eventos.id_e=participar.id_e AND lugar.id_l=participar.id_l AND fecha.id_f=participar.id_f AND hora.id_h=participar.id_h AND nivel.id_n=participar.id_n AND eventos.Status=1";
  $tablaEventos=$link->query($sqlE);
  //Consulta pagos
  $sqlp="SELECT monto.id_m,monto.monto,fecha_pago.fecha,pagos.matricula FROM pagos,monto,fecha_pago WHERE fecha_pago.id_fp=pagos.id_fp AND monto.id_m=pagos.id_m AND monto.Status=1";
  $tablapagos=$link->query($sqlp);

  //maestros
  $sqlMstr="SELECT maestros.matricula_m,maestros.nombre,maestros.apellido_p,maestros.apellido_m,grado.grado,nivel.nivel,telefono.telefono FROM maestros,impartir,grado,nivel,telefono WHERE maestros.matricula_m=impartir.matricula_m AND maestros.matricula_m=telefono.matricula_m AND grado.id_g=impartir.id_g AND nivel.id_n=impartir.id_n AND maestros.Status=1";
  $tablaMaestros=$link->query($sqlMstr);
  //consulta pagos
  $sqlpagos="SELECT alumnos.matricula,alumnos.nombre,alumnos.apellido_p,alumnos.apellido_m, alumnos.Status FROM alumnos";
  $tablaoptionpagos=$link->query($sqlpagos);
 ?>

<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="tables.css">
      <script  src="tables.js"></script>


      <script type="text/javascript" src="js/Alumnos.js">

      </script>
      <script type="text/javascript" src="js/Trabajadores.js">

      </script>

      <script type="text/javascript" src="js/eventos.js">

      </script>
      <script type="text/javascript" src="js/eventos1.js">

      </script>
      <script type="text/javascript" src="js/Pagos.js">

      </script>
      <script type="text/javascript" src="js/Maestros.js">

      </script>
      <script type="text/javascript" src="js/Trabajadores1.js">

      </script>

    <title>Pagos y Eventos</title>
  </head>
  <body>


    <!-- Header -->
<center>
  	<header class="header d-flex flex-row">
  		<div class="header_content d-flex flex-row align-items-center">
  			<!-- Logo -->
  			<div class="logo_container">
  				<div class="logo">
  					<!--<img src="../images/logo1.png" href="#addEmployeeModal">-->
  					<span>Pagos y Eventos</span>
  				</div>
  			</div>
<br>
  			<!-- Main Navigation -->
  			<nav class="main_nav_container">
  				<div class="main_nav">
  					<ul class="main_nav_list">
  				<div style="color: white">
            <li class="main_nav_item"><a href="#" onclick="mostrarInfo()">Info</a></li>
  					<!--<li class="main_nav_item"><a href="#" onclick="mostrarAlumn()">Alumnos</a></li>-->
  					<!--<li class="main_nav_item"><a href="#" onclick="mostrarMaes()">Maestros</a></li> -->
            <!--<li class="main_nav_item"><a href="#" onclick="mostrarTrab()">Trabajadores</a></li> -->
            <li class="main_nav_item"><a href="#" onclick="mostrarPag()">Pagos</a></li>
            <li class="main_nav_item"><a href="#" onclick="mostrarEven()">Eventos</a></li>
            <li class="main_nav_item"><a href="#" onclick="contraseña()">Cambiar Contraseña</a></li>

          </div>

  					</ul>
  				</div>
  			</nav>
  		</div>
  </header>
</center>

  <div class="separador"></div> <!--separador de DIV -->
  <div class="separador"></div> <!--separador de DIV -->
  <div class="separador"></div> <!--separador de DIV -->


    <!--Div Apartado de Alumnos -->
        <div class="divAlumnos">

      <div id="alumn" style="display:none;"> <!--Tabla de Alumnos-->
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                <h2><b>Alumnos</b></h2>
              </div>
              <div class="col-sm-6">
                <a onclick="ocultarAlumn()" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Cerrar Tabla</span></a>
                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo Alumno</span></a>

              </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td>Matricula</td>
                            <td>Nombre</td>
                            <td>Apellido Paterno</td>
                            <td>Apellido Materno</td>
                            <td>Grado</td>
                            <td>Nivel</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                          //While para mostrar mis datos
                            while($filaalumnos=$tablaalumnos->fetch_array(MYSQLI_BOTH)){

                         ?>
                         <form>
                         <tr> <!--datos mostrados-->
                          <td><input type="text" name="campo0read" class="form-control" readonly="readonly" value="<?php echo $filaalumnos[0];?>"></td>
                          <td><input type="text" name="campo1read" class="form-control" readonly="readonly" value="<?php echo $filaalumnos[1];?>"></td>
                          <td><input type="text" name="campo2read" class="form-control" readonly="readonly" value="<?php echo $filaalumnos[2];?>"></td>
                          <td><input type="text" name="campo3read" class="form-control" readonly="readonly" value="<?php echo $filaalumnos[3];?>"></td>
                          <td><input type="text" name="campo4read" class="form-control" readonly="readonly" value="<?php echo $filaalumnos[4];?>"></td>
                          <td><input type="text" name="campo5read" class="form-control" readonly="readonly" value="<?php echo $filaalumnos[5];?>"></td>
                          <td>
                            <!--agarra el id del elemento a eliminar o editar en automatico-->
                              <a href="#editEmployeeModal" onclick="enviarmatricula('<?php echo $filaalumnos[0]; ?>');" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                              <a href="#deleteEmployeeModal" onclick="matriculadelete('<?php echo $filaalumnos[0]; ?>');" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                          </td>
                          </tr>
                        <?php
                                //cierro el ciclo while
                            }
                        ?>
                        </form>
                    </tbody>
                </table>
          <div class="clearfix">

                    <ul class="pagination">
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                    </ul>
                </div>
            </div>
        </div>

      <!-- Agregar Alumno -->
      <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form>
              <div class="modal-header">
                <h4 class="modal-title">Agregar Alumno</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Matricula</label>
                  <input id="campo0add" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Nombre</label>
                  <input id="campo1add" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Apellido Paterno</label>
                  <input id="campo2add" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Apellido Materno</label>
                  <input id="campo3add" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Grado</label>
                  <select class="form-control" id="campo4add" required>
                    <option value="1">Primero</option>
                    <option value="2">Segundo</option>
                    <option value="3">Tercero</option>
                    <option value="4">Cuarto</option>
                    <option value="5">Quinto</option>
                    <option value="6">Sexto</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nivel</label>
                  <select class="form-control" id="campo5add" required>
                    <option value="1">Kinder</option>
                    <option value="2">Primaria</option>
                    <option value="3">Secundaria</option>
                    <option value="4">Bachiller</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="button" onclick="agregarAlumno()" class="btn btn-success" value="Agregar">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Edit Modal HTML -->
      <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post">
              <div class="modal-header">
                <h4 class="modal-title">Editar Alumno</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Matricula</label>
                  <input id="campo0edit" type="text" class="form-control" readonly="readonly" value="">
                </div>
                <div class="form-group">
                  <label>Nombre</label>
                  <input id="campo1edit" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Apellido Paterno</label>
                  <input id="campo2edit" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Apellido Materno</label>
                  <input id="campo3edit" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Grado</label>
                  <select class="form-control" id="campo4edit" required>
                    <option value="1">Primero</option>
                    <option value="2">Segundo</option>
                    <option value="3">Tercero</option>
                    <option value="4">Cuarto</option>
                    <option value="5">Quinto</option>
                    <option value="6">Sexto</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nivel</label>
                  <select class="form-control" id="campo5edit" required>
                    <option value="1">Kinder</option>
                    <option value="2">Primaria</option>
                    <option value="3">Secundaria</option>
                    <option value="4">Bachiller</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="button" onclick="editarAlumno()" class="btn btn-info" value="Editar">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Delete Modal HTML -->
      <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post">
              <div class="modal-header">
                <h4 class="modal-title">Borrar Alumno</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Matricula</label>
                  <input id="campo0delete" type="text" class="form-control" readonly="readonly">
                </div>
                <p>Seguro que desea dar de baja?</p>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                <input type="button" onclick="eliminarAlumno()" class="btn btn-danger" value="Eliminar">
              </div>
            </form>
          </div>
        </div>
      </div>
          </div>
      </div>




      <!--Div Apartado de Maestros-->
          <div class="divMaestros">


              <!--PEGAR ACA LO DE MAESTROS -->

              <div id="maes" style="display:none;">     <!--Tabla de Maestros-->
                <div class="container">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                        <h2><b>Maestros</b></h2>
                      </div>
                      <div class="col-sm-6">
                          <a onclick="ocultarMaes()" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Cerrar Tabla</span></a>
                        <a href="#addMaestro" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo Maestro</span></a>

                      </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>Matricula</td>
                                    <td>Nombre</td>
                                    <td>Apellido Paterno</td>
                                    <td>Apellido Materno</td>
                                    <td>Grado</td>
                                    <td>Nivel</td>
                                    <td>Telefono</td>

                                </tr>
                            </thead>
                            <tbody>           <!--Validacion para el READ de la tabla y llenado -->

                              <?php
                                //While para mostrar mis datos
                                  while($filaMaestros=$tablaMaestros->fetch_array(MYSQLI_BOTH)){

                               ?>
                               <form>
                               <tr>
                                <td><input type="text" name="campo0M" class="form-control" readonly="readonly" value="<?php echo $filaMaestros[0];?>"></td>
                                <td><input type="text" name="campo1M" class="form-control" readonly="readonly" value="<?php echo $filaMaestros[1];?>"></td>
                                <td><input type="text" name="campo2M" class="form-control" readonly="readonly" value="<?php echo $filaMaestros[2];?>"></td>
                                <td><input type="text" name="campo3M" class="form-control" readonly="readonly" value="<?php echo $filaMaestros[3];?>"></td>
                                <td><input type="text" name="campo4M" class="form-control" readonly="readonly" value="<?php echo $filaMaestros[4];?>"></td>
                                <td><input type="text" name="campo5M" class="form-control" readonly="readonly" value="<?php echo $filaMaestros[5];?>"></td>
                                <td><input type="text" name="campo5M" class="form-control" readonly="readonly" value="<?php echo $filaMaestros[6];?>"></td>
                                <td>
                                  <a href="#editMaestro" class="edit" onclick="idMaestros('<?php echo $filaMaestros[0]; ?>');" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                  <a href="#deleteMaestro" onclick="idMaestrosD('<?php echo $filaMaestros[0]; ?>');" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                                </tr>
                              <?php

                                  }
                              ?>

                            </tbody>
                        </table>
                  <div class="clearfix">

                            <ul class="pagination">
                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
               <!--Agregar Maestro-->
              <div id="addMaestro" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form>
                      <div class="modal-header">
                        <h4 class="modal-title">Agregar Maestro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Nombre</label>
                          <input id="agregarNomM" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Apellido Paterno</label>
                          <input id="agregarAp" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Apellido Materno</label>
                          <input id="agregarAm" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Grado</label>  <!--el nivel se agrega por un value que se pasa a la base -->
                          <select class="form-control" id="agregarGrad" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Nivel</label>
                          <select class="form-control" id="agregarNiv" required>
                            <option value="1">Kinder</option>
                            <option value="2">Primaria</option>
                            <option value="3">Secundaria</option>
                            <option value="4">Bachiller</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Telefono</label>
                            <input id="agregarTel" type="text" class="form-control" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="button" onclick="agregarMaestro()" class="btn btn-success" value="Add">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
               <!--Edit Modal HTML-->
              <div id="editMaestro" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form>
                      <div class="modal-header">
                        <h4 class="modal-title">Editar Maestro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Matricula</label>
                        <input id="campo0" type="text" class="form-control" required readonly="readonly">
                        </div>
                        <div class="form-group">
                          <label>Nombre</label>
                        <input id="campo1" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Apellido Paterno</label>
                          <input id="campo2" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Apellido Materno</label>
                          <input id="campo3" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Grado</label>  <!--el nivel se agrega por un value que se pasa a la base -->
                          <select class="form-control" id="campo4" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Nivel</label>
                          <select class="form-control" id="campo6" required>
                            <option value="1">Kinder</option>
                            <option value="2">Primaria</option>
                            <option value="3">Secundaria</option>
                            <option value="4">Bachiller</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Telefono</label>
                          <input id="campo5" type="text" class="form-control" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="button" onclick="editarMaestros()" class="btn btn-info" value="Save">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Delete Modal -->
              <div id="deleteMaestro" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form>
                      <div class="modal-header">
                        <h4 class="modal-title">Borrar Maestro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>

                      <div class="modal-body"> <!--Advrtenvia de baja -->
                        <div class="form-group">
                            <label>Matricula de Maestro</label>
                            <input id="campo0D" type="text" class="form-control" required readonly="readonly">
                        </div>
                        <p>Seguro que desea dar de baja?</p>
                      </div>
                      <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="button" onclick="eliminarM()" class="btn btn-danger" value="Delete"> <!--El id se pone en automatico -->
                      </div>
                    </form>
                  </div>
                </div>
              </div>
                  </div>
                </div>




                <!--Div Apartado de Trabajadores -->
              <div class="divTrabajadores">

                <div id="trab" style="display:none;"> <!--Tabla de trabajadores-->
                  <div class="container">
                      <div class="table-wrapper">
                          <div class="table-title">
                              <div class="row">
                                  <div class="col-sm-6">
                          <h2><b>Trabajadores</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a onclick="ocultarTrab()" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Cerrar Tabla</span></a>
                          <a href="#addTrab" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo empleado</span></a>
                        </div>
                              </div>
                          </div>
                          <table class="table table-striped table-hover">
                              <thead>
                                  <tr>
                                      <td>Matricula</td>
                                      <td>Nombre</td>
                                      <td>Apellido Paterno</td>
                                      <td>Apellido Materno</td>
                                  </tr>
                              </thead>
                              <tbody>

                                <?php   //while para mostrar los datos
                                 while($filatrabajadores=$tablatrabajadores->fetch_array(MYSQLI_BOTH)){
                                ?>
                                <tr>
                                      <!--Validacion-->
                                    <?php if($filatrabajadores[0]=='04150010'){}else{?>

                                    <td><input type="text" name="campo0tread" class="form-control" readonly="readonly" value="<?php echo $filatrabajadores[0];?>"></td>
                                    <td><input type="text" name="campo1tread" class="form-control" readonly="readonly" value="<?php echo $filatrabajadores[1];?>"></td>
                                    <td><input type="text" name="campo2tread" class="form-control" readonly="readonly" value="<?php echo $filatrabajadores[2];?>"></td>
                                    <td><input type="text" name="campo3tread" class="form-control" readonly="readonly" value="<?php echo $filatrabajadores[3];?>"></td>
                                    <td>
                                        <a href="#editTrab" class="edit" onclick="editmatt('<?php echo $filatrabajadores[0]; ?>')" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                        <a href="#deleteTrab" class="delete" onclick="deletematt('<?php echo $filatrabajadores[0]; ?>')" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>


<?php }?>
                                    </td>
                                  </tr>
                                <?php //cierro ciclo while
                                      }
                                      ?>
                              </tbody>
                          </table>
                    <div class="clearfix">

                              <ul class="pagination">
                                  <li class="page-item"><a href="#" class="page-link">1</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                <!-- Agregar Trabajador -->
                <div id="addTrab" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form>
                        <div class="modal-header">
                          <h4 class="modal-title">Agregar Trabajador</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Matricula</label>
                            <input id="campo0tadd" type="text" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label>Nombre</label>
                            <input id="campo1tadd" type="text" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label>Apellido Paterno</label>
                            <input id="campo2tadd" type="text" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label>Apellido Materno</label>
                            <input id="campo3tadd" type="text" class="form-control" required>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                          <input type="button" class="btn btn-success" onclick="agregarTrabajador()" value="Agregar">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Edit Modal HTML -->
                <div id="editTrab" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form method="post">
                        <div class="modal-header">
                          <h4 class="modal-title">Editar Empleado</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Matricula</label>
                            <input id="campo0tedit" type="text" class="form-control" readonly="readonly" required>
                          </div>
                          <div class="form-group">
                            <label>Nombre</label>
                            <input id="campo1tedit" type="text" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label>Apellido Paterno</label>
                            <input id="campo2tedit" type="text" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label>Apellido Materno</label>
                            <input id="campo3tedit" type="text" class="form-control" required>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                          <input type="button" onclick="editarTrabajador()" class="btn btn-info" value="Save">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Delete Modal HTML -->
                <div id="deleteTrab" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form>
                        <div class="modal-header">
                          <h4 class="modal-title">Borrar Empleado</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Matricula</label>
                            <input id="campo0tdelete" type="text" class="form-control" readonly="readonly" required>
                          </div>
                          <p>Seguro que desea dar de baja?</p>
                        </div>
                        <div class="modal-footer">
                          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                          <input type="button" onclick="eliminarTrabajador()" class="btn btn-danger" value="Eliminar">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                    </div>
              </div>



                <!--Div Apartado de pagos -->
              <div class="divPagos">

                <div id="pag" style="display:none;"> <!--Tabla de pagos -->
                    <div class="container">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                            <h2><b>Pagos</b></h2>
                          </div>
                          <div class="col-sm-6">
                              <a onclick="ocultarPag()" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Cerrar Tabla</span></a>
                            <a href="#addPag" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo Pago</span></a>
                          </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Monto</td>
                                        <td>Fecha Pago</td>
                                        <td>Matricula</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php //while para mostrar datos
                                  while($filapagos=$tablapagos->fetch_array(MYSQLI_BOTH)){
                                    ?>
                                   <form>
                                    <tr>
                                    <td><input type="text" name="campo0read" class="form-control" readonly="readonly" value="<?php echo $filapagos[0];?>"></td>
                                    <td><input type="text" name="campo1read" class="form-control" readonly="readonly" value="<?php echo $filapagos[1];?>"></td>
                                    <td><input type="text" name="campo2read" class="form-control" readonly="readonly" value="<?php echo $filapagos[2];?>"></td>
                                    <td><input type="text" name="campo3read" class="form-control" readonly="readonly" value="<?php echo $filapagos[3];?>"></td>
                                    <td>
                                        <a href="#deletePag" class="delete" data-toggle="modal" onclick="deletee('<?php echo $filapagos[0];?>');" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

                                      </td>


                                  </tr>
                                    <?php
                                    //Cierro el ciclo while
                                        }
                                     ?>




                                </form>
                                </tbody>
                            </table>
                      <div class="clearfix">

                                <ul class="pagination">
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  <!-- Agregar Alumno -->
                  <div id="addPag" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form method="post" action="../controller/pagosu.php">
                          <div class="modal-header">
                            <h4 class="modal-title">Agregar Pago</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                              <label>Monto</label>
                              <input type="text" class="form-control" id="montopago" required>
                            </div>
                            <div class="form-group">
                              <label>Fecha Pago</label>

                              <input type="text" value='<?php $hoy=date("Y-m-d"); echo $hoy;?>' class="form-control" id="fechapago" readonly required >
                            </div>
                            <div class="form-group">
                              <label>Matricula</label>
                              <select class="form-control" id="matriculapago" required>
                                <?php while($filaoptionpagos=$tablaoptionpagos->fetch_array(MYSQLI_BOTH)){
                                      if($filaoptionpagos[4]==1){
                                   ?>
                                <option value="<?php echo $filaoptionpagos[0]; ?>"><?php echo $filaoptionpagos[1]." ".$filaoptionpagos[2]." ".$filaoptionpagos[3]." - ".$filaoptionpagos[0]; ?></option>
                              <?php }} ?>
                              </select>
                            </div>
                          </div>
                          <div class="modal-footer">

                             <input type="hidden" name="action" value="agregarpago">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input href="#addPag" type="button" onclick="agregarPago()" class="btn btn-success" value="Agregar">
                          </form>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- Delete Modal HTML -->
                  <div id="deletePag" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form>

                          <div class="modal-body">
                            <div class="form-group">
                              <label>Id</label>
                                <input type="text" class="form-control" id="InputId" readonly="readonly"  required>
                            </div>
                            <p>Seguro que desea dar de baja?</p>
                          </div>
                          <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="button" onclick="eliminarPago()" class="btn btn-danger" value="Delete">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




                    <!--Div Apartado de Eventos -->
                  <div class="divEventos">

                    <div id="even" style="display:none;"> <!--Tabla Eventos -->
                        <div class="container">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-6">
                                <h2>Base de datos de <b>Evento</b></h2>
                              </div>
                              <div class="col-sm-6">
                                  <a onclick="ocultarEven()" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Cerrar Tabla</span></a>
                                <a href="#addE" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo Evento</span></a>
                              </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <tdead> <!-- Encabezados de tabla -->
                                        <tr>
                                          <td>ID</td>
                                            <td>Nombre</td>
                                            <td>Lugar</td>
                                            <td>Fecha</td>
                                            <td>Hora</td>
                                            <td>Nivel</td>
                                        </tr>
                                    </tdead>
                                    <tbody>
                                                        <?php

                                                        while($filaEventos=$tablaEventos->fetch_array(MYSQLI_BOTH))
                                                        {


                                                         ?>
                                                              <!--Cuerpo de la tabla -->
                                                         <form method="post">
                                                         <tr>
                                                           <td><input type="text" class="form-control" readonly="readonly" value="<?php echo $filaEventos[0];?>"></td>
                                                          <td><input type="text" class="form-control" readonly="readonly" value="<?php echo $filaEventos[1];?>"></td>
                                                          <td><input type="text" class="form-control" readonly="readonly" value="<?php echo $filaEventos[2];?>"></td>
                                                          <td><input type="text" class="form-control" readonly="readonly" value="<?php echo $filaEventos[3];?>"></td>
                                                          <td><input type="text" class="form-control" readonly="readonly" value="<?php echo $filaEventos[4];?>"></td>
                                                          <td><input type="text" class="form-control" readonly="readonly" value="<?php echo $filaEventos[5];?>"></td>
                                                          <td>  <!--Botones auxiliares -->
                                                            <a href="#editE" class="edit" onclick="ideventos('<?php echo $filaEventos[0]; ?>');" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                            <a href="#deleteE" onclick="ideventosD('<?php echo $filaEventos[0]; ?>');" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                          </td>
                                                          </tr>
                                                        <?php

                                                            }
                                                        ?>
                                                        </form>
                                                    </tbody>
                                </table>
                          <div class="clearfix">

                                    <ul class="pagination">
                                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      <!-- div Agregar Evento -->
                      <div id="addE" class="modal fade">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <form>
                              <div class="modal-header">
                                <h4 class="modal-title">Agregar Evento</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <label>Nombre</label>
                                  <input id="agregarNom" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Lugar</label>
                                  <input id="agregarLug" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Fecha</label>
                                  <input id="agregarFec" type="text" value='<?php $hoy=date("Y-m-d"); echo $hoy;?>' readonly class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Hora</label>
                                  <input id="agregarHor" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nivel</label>  <!--el nivel se agrega por un value que se pasa a la base -->
                                  <select class="form-control" id="agregarNiv" required>
                                    <option value="1">Kinder</option>
                                    <option value="2">Primaria</option>
                                    <option value="3">Secundaria</option>
                                    <option value="4">Bachiller</option>
                                  </select>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="button" onclick="agregarEvento()" class="btn btn-success" value="Add">
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                      <!-- Edit Modal HTML -->
                      <div id="editE" class="modal fade">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <form>
                              <div class="modal-header">
                                <h4 class="modal-title">Editar Evento</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                    <label>ID de Evento</label>
                                    <input id="campo0" type="text" class="form-control" readonly="readonly" required >
                                </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input id="campo1" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Lugar</label>
                                    <input id="campo2" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input id="campo3" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Hora</label>
                                    <input id="campo4" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nivel</label> <!--el nivel se agrega por un value que se pasa a la base -->
                                  <select class="form-control" id="campo5" required>
                                    <option value="1">Kinder</option>
                                    <option value="2">Primaria</option>
                                    <option value="3">Secundaria</option>
                                    <option value="4">Bachiller</option>
                                  </select>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="button" onclick="editarEventos()" class="btn btn-info" value="Save"> <!-- El id se pone en automatico -->
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- Delete Modal HTML -->
                      <div id="deleteE" class="modal fade">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <form>
                              <div class="modal-header">
                                <h4 class="modal-title">Borrar Evento</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              </div>

                              <div class="modal-body"> <!--Advrtenvia de baja -->
                                <div class="form-group">
                                    <label>ID de Evento</label>
                                    <input id="campo0D" type="text" class="form-control" readonly="readonly" required >
                                </div>
                                <p>Seguro que desea dar de baja?</p>
                              </div>
                              <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="button" onclick="eliminarE()" class="btn btn-danger" value="Delete"> <!--El id se pone en automatico -->
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                          </div>
                        </div>

                        <!-- Cambiar Contraseña -->
                        <div id="contraseña"  style="display:none;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <form>
                                <div class="modal-header">
                                  <h4 class="modal-title">Cambiar Contraseña</h4>
                                  <button onclick="ocultarContraseña()" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label>Nueva Contraseña</label>
                                    <input id="newpass" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <input type="button" class="btn btn-success" onclick="newPass()" value="Aceptar">
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <!-- Informacion -->
                        <div id="info"  style="display:in line;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <form>
                                <div class="modal-header" align="center">
                                  <h4 class="modal-title">Informacion de Usuario</h4>
                                  <button onclick="ocultarInfo()" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body" align="center">
                                  <div class="form-group">
                                    <h4 class="modal-title">Bienvenido</h4>
                                  </div>
                                  <div class="form-group">
                                    <label>Matricula</label>
                                    <input id="mattrab" type="text" class="form-control" value="<?php echo $filadatos[0]; ?>" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label>Nombre</label>
                                    <input  type="text" class="form-control" value="<?php echo $filadatos[1]; ?>"readonly>
                                  </div>
                                  <div class="form-group">
                                    <label>Apellido Paterno</label>
                                    <input  type="text" class="form-control" value="<?php echo $filadatos[2]; ?>" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label>Apellido Materno</label>
                                    <input  type="text" class="form-control" value="<?php echo $filadatos[3]; ?>" readonly>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <input type="button" class="btn btn-danger" onclick="location.href='../login.php'" value="Cerrar Sesión">
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>


                    <div class="separador"></div> <!--separador de DIV -->



  </body>
</html>
