<?php
//iniciamos la sesion
session_start();
if (isset($_SESSION['usuario'])) {
  //obtenemos el valor mandado desde Perfilcontroller.php
 $matriculay = $_SESSION['usuario'];


   $nombrealumno="hey";
   $matriculaalumno;
   $apalumno;
   $model;

    require_once '../../Core/Config.php';
    $perfil=new Config();
    $model=$perfil->conectar();
    $sql="SELECT * FROM alumnos WHERE matricula=$matriculay";
    $tabla=$model->query($sql);
    $alumno1=array();
    $i=0;
    while($registro=$tabla->fetch_array(MYSQLI_ASSOC)){

      $alumno1[$i]=$registro;

  $i++;
}

$matriculaalumno =$alumno1[0]['matricula'];
$nombrealumno =$alumno1[0]['nombre'];
$apalumno =$alumno1[0]['apellido_p'];
$amaalumno =$alumno1[0]['apellido_m'];

$sqlg="SELECT maestros.nombre,maestros.apellido_p,maestros.apellido_m,telefono.telefono FROM alumnos,impartir,maestros,telefono WHERE alumnos.matricula=$matriculay AND alumnos.id_g=impartir.id_g AND alumnos.id_n=impartir.id_n AND maestros.matricula_m=impartir.matricula_m AND maestros.matricula_m=telefono.matricula_m";
$sqlp1=$model->query($sqlg);

$sqlpg1="SELECT monto.monto,fecha_pago.fecha FROM monto,fecha_pago,alumnos,pagos WHERE alumnos.matricula=$matriculay AND alumnos.matricula=pagos.matricula AND pagos.id_fp=fecha_pago.id_fp AND monto.id_m=pagos.id_m";
$sqlpg=$model->query($sqlpg1);

$sqlgrado="SELECT id_g FROM alumnos WHERE matricula=$matriculay ";
$grados=$model->query($sqlgrado);
$gradoa= array();
$nivela= array();
$imagea=array();
$i=0;
while($registro=$grados->fetch_array(MYSQLI_ASSOC)){

  $gradoa[$i]=$registro;

$i++;
}

$grado=$gradoa[0]['id_g'];
$sqlev1="SELECT eventos.nombre,fecha.fecha,lugar.lugar,hora.hora FROM eventos,fecha,lugar,hora,nivel,participar WHERE participar.id_n=$grado AND participar.id_e=eventos.id_e AND participar.id_l=lugar.id_l AND participar.id_f=fecha.id_f AND participar.id_h=hora.id_h AND nivel.id_n=participar.id_n AND eventos.Status=1";
$sqlev=$model->query($sqlev1);
$sqlnivel="SELECT id_n FROM alumnos WHERE matricula=$matriculay ";
$nivels=$model->query($sqlnivel);
$i=0;
while($registro=$nivels->fetch_array(MYSQLI_ASSOC)){

  $nivela[$i]=$registro;

$i++;
}

$nivel=$nivela[0]['id_n'];

$sqlimg="SELECT foto FROM images WHERE matricula=$matriculay";
$sqlimg2=$model->query($sqlimg);
$i=0;
while($registro=$sqlimg2->fetch_array(MYSQLI_ASSOC)){

$imagea[$i]=$registro;

$i++;
}

if(!empty($imagea[0])){
  $rutimg=$imagea[0]['foto'];
}else{
$rutimg="http://bootdey.com/img/Content/avatar/avatar6.png";
}




if ($grado=='1') {
  $grado="Primer";
}
else if ($grado=='2') {
  $grado="Segundo";
}
else if ($grado=='3') {
  $grado="Tercer";
}
else if ($grado=='4') {
  $grado="Cuarto";
}
else if ($grado=='5') {
  $grado="Quinto";
}
else if ($grado=='6') {
  $grado="Sexto";
}

//Validacion del nivel
if($nivel=='1'){
  $nivel="Kinder";
}else if($nivel=='2'){
  $nivel="Primaria";
}else if ($nivel=='3'){
  $nivel="Secundaria";
}else if($nivel=='4'){
  $nivel="Bachiller";
  }
}

?>


<!DOCTYPE html>
<html lang="en" >
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
  <script src="perfil.js"></script>
  <script src="jspdf.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.js" integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="dist/jquery-1.12.0.min.js"> </script>
  <script type="text/javascript" src="dist/Chart.bundle.min.js"> </script>
  <meta charset="UTF-8">
  <title>PERFIL</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="perfil.css">



</head>

<body>

  <!--Cambiar Foto-->
 <div id="cambFoto" class="modal fade" align="center">
   <div class="modal-dialog">
     <div class="modal-content">
<div class="input-group">
 <div class="input-group-prepend">
   <h1>Nueva Foto</h1>
 </div>
 <div class="custom-file">
   <form action="../../controller/PerfilController.php" method="post" enctype="multipart/form-data">
   <input type="file" class="custom-file-input" id="inputGroupFile01"
     aria-describedby="inputGroupFileAddon01">
   <input type="hidden" name="action" value="subirfoto">
   <br>
   <input class="btn btn-success" type="submit" name="enviar" value="Subir Foto">
 </form>
 </div>
</div>
     </div>
   </div>
 </div>


  <div id="user-profile-2" class="user-profile">
		<div class="tabbable">

      <center>
        	<header class="header d-flex flex-row">
        		<div class="header_content d-flex flex-row align-items-center">
        			<!-- Logo -->
        			<div class="logo_container">
        				<div class="logo">
        					<span>Estudiante</span>
        				</div>
        			</div>
<br>
        			<!-- Main Navigation -->
        			<nav class="main_nav_container">
        				<div class="main_nav">
        					<ul class="main_nav_list">
        				<div>
                  <li class="main_nav_item"><a href="#" onclick="mostrarInfo()">Usuario</a></li>
        					<li class="main_nav_item"><a href="#" onclick="mostrarMaes()">Maestros</a></li>
                  <li class="main_nav_item"><a href="#" onclick="mostrarPag()">Pagos</a></li>
                  <li class="main_nav_item"><a href="#" onclick="mostrarEven()">Eventos</a></li>
                </div>
        					</ul>
        				</div>
        			</nav>
        		</div>
        </header>
      </center>
      <br><br><br><br><br><br><br>

			<div class="tab-content no-border padding-24">
				<div id="home" class="tab-pane in active">
					<div class="row">




              <!-- Informacion -->
              <div id="info"  style="display:in line;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form>
                      <div class="modal-header" align="center">
                        <h4 class="modal-title">Colegio del Mayab A.C.</h4>
                      </div>
                      <div class="modal-header" align="center">
                        <span class="profile-picture">
          								<img class="editable img-responsive" alt=" Avatar" id="avatar2" src="<?php echo $rutimg ?>">
          							</span>
                        <br>
                            <a href="#cambFoto" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Seleccionar Foto</span></a>                      </div>
                      <div class="modal-body" align="center">
                        <div class="form-group">
                          <label>Matricula</label>
                          <input id="mattrab" type="text" class="form-control" value="<?php echo $matriculay; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label>Nombre</label>
                          <input  type="text" class="form-control" value="<?php echo $nombrealumno; ?>"readonly>
                        </div>
                        <div class="form-group">
                          <label>Apellido Paterno</label>
                          <input  type="text" class="form-control" value="<?php echo $apalumno; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label>Apellido Materno</label>
                          <input  type="text" class="form-control" value="<?php echo $amaalumno; ?>" readonly>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-success"type="button" onclick="button" id=button >Generar Constancia</button>
                        <a href="grafica.html" >
                       <input type="button" class="btn btn-warning" id="b" value="Ver Criterios"/>
         							</a>
                      <input type="button" class="btn btn-danger" onclick="location.href='../login.php'" value="Cerrar Sesión">
                      </div>
                    </form>
                  </div>
                </div>
              </div>



							<div class="hr hr-8 dotted"></div>

							<div class="profile-user-info">
								<div class="profile-info-row">


									<div  id="grafica" class="profile-info-value">
									</div>
								</div>




							</div>
					</div><!-- /.row -->

					<div class="space-20"></div>


				</div><!-- /#home -->



                <!-- -->

                <div class="divClassMaestros"  >
              <div id="mstr" class="tab-pane" style="display:none;"> <!--Tabla de Alumnos-->
                <div class="container">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                        <h2><b>Lista de Maestros</b></h2>
                      </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                  <td>Nombre</td>
                                  <td>Apellido Paterno</td>
                                  <td>Apellido Materno</td>
                                  <td>Telefono</td>
                                </tr>
                            </thead>
                            <tbody>

                              <?php
                              while($filapago=$sqlp1->fetch_array(MYSQLI_BOTH)){
                                ?>
                                 <form>
                                 <tr>
                                   <td><input type="text" name="campo0read" class="form-control" readonly="readonly" value="<?php echo $filapago[0];?>"></td>
                                   <td><input type="text" name="campo1read" class="form-control" readonly="readonly" value="<?php echo $filapago[1];?>"></td>
                                   <td><input type="text" name="campo2read" class="form-control" readonly="readonly" value="<?php echo $filapago[2];?>"></td>
                                   <td><input type="text" name="campo3read" class="form-control" readonly="readonly" value="<?php echo $filapago[3];?>"></td>

                                  </tr>
                                <?php

                                    }
                                ?>
                                </form>
                            </tbody>
                        </table>

                    </div>
                </div>
                </div>
                </div>

                <div class="divEventos">
                <div id="eventos" class="tab-pane" style="display:none;"> <!--Tabla de Eventos-->
                  <div class="container">
                      <div class="table-wrapper">
                          <div class="table-title">
                              <div class="row">
                                  <div class="col-sm-6">
                          <h2><b>Lista de Eventos</b></h2>
                        </div>
                              </div>
                          </div>
                          <table class="table table-striped table-hover">
                              <thead>
                                  <tr>
                                    <td>Evento</td>
                                    <td>Lugar</td>
                                    <td>Fecha</td>
                                    <td>Hora</td>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php
                                while($filapagos=$sqlev->fetch_array(MYSQLI_BOTH)){
                                  ?>
                                 <form>
                                  <tr>
                                  <td><input type="text" name="campo0read" class="form-control" readonly="readonly" value="<?php echo $filapagos[0];?>"></td>
                                  <td><input type="text" name="campo1read" class="form-control" readonly="readonly" value="<?php echo $filapagos[1];?>"></td>
                                  <td><input type="text" name="campo2read" class="form-control" readonly="readonly" value="<?php echo $filapagos[2];?>"></td>
                                  <td><input type="text" name="campo3read" class="form-control" readonly="readonly" value="<?php echo $filapagos[3];?>"></td>
                                    </tr>
                                  <?php

                                      }
                                  ?>
                                  </form>
                              </tbody>
                          </table>

                      </div>
                  </div>
                </div>
              </div>

              <div class="divPagos">
              <div id="pagos" class="tab-pane" style="display:none;"> <!--Tabla de Pagos-->
                <div class="container">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                        <h2><b>Lista de Pagos</b></h2>
                      </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                  <td>Monto</td>
                                  <td>Pago</td>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              while($filapag=$sqlpg->fetch_array(MYSQLI_BOTH)){
                              ?>
                              <form>
                              <tr>
                              <td><input type="text" name="campo0read" class="form-control" readonly="readonly" value="<?php echo $filapag[0];?>"></td>
                              <td><input type="text" name="campo1read" class="form-control" readonly="readonly" value="<?php echo $filapag[1];?>"></td>
                              </tr>
                              <?php
                              //Cierro el ciclo while
                               }
                              ?>
                                </form>
                            </tbody>
                        </table>

                    </div>
                </div>
              </div>
            </div>






				<div id="friends" class="tab-pane">
<div>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>



          <script>

          //funcion donde tomaremos los valores llamando a los diferentes input para rellenar el formulario
          $('#button').click(function() {

            var doc = new jsPDF();

            var name = '<?php echo $nombrealumno; ?>';
            var lastname = '<?php echo $apalumno; ?>';
            var lastname2 = '<?php echo $amaalumno; ?>';
            var matricula ='<?php echo $matriculay; ?>';
            var grado='<?php echo $grado; ?>';
            var nivel='<?php echo $nivel; ?>';

            var hoy = new Date();
            var dd = hoy.getDate();
            var mm = hoy.getMonth()+1;
            var yyyy = hoy.getFullYear();

            var fecha = dd+'/'+mm+'/'+yyyy;

            var logo = new Image();
            logo.src = 'logom.jpg';

            doc.setFontSize(15);
            doc.addImage(logo, 'JPEG', 120, 15,50,50);
            doc.text(15, 60,'A Quien corresponda:');
            doc.text(15, 80, "El que suscribe Hace constar que segun constancias que existen en el ");
            doc.text(15, 90,"archivo escolar el alumno "+name+" "+lastname+" "+lastname2);
            doc.text(15, 100,"esta cursando actualmente el "+grado+" grado nivel "+nivel);
              doc.text(15, 110,"con matricula "+matricula);



            doc.text(15, 130,"Se extiende la presente en Merida, Yucatan al dia "+fecha+" para los fines ");
            doc.text(15, 140, "que convenga al interesado");

            doc.text('Atentamente: \rServicios Escolares\r________________________\rFirma de responsable.',160,180,'center');
            doc.save('ConstanciaEstudios.pdf');



          });
          </script>

				</div><!-- /#pictures -->
			</div>
		</div>
	</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>


</body>

</html>
