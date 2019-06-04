<?php
require_once '../Core/Config.php';
date_default_timezone_set("America/Mexico_City");
session_start();
  $conexion=new Config();
  $link=$conexion->conectar();
  $id=$_SESSION['usuario'];

	$sql="SELECT venta.folio,venta.status,productos.nombre,venta.importe, usuarios.nombre, usuarios.ap, fh.fecha, fh.hora FROM productos,venta,usuarios,fh,id_pfolio WHERE productos.id_p=id_pfolio.id_p AND venta.folio=id_pfolio.folio AND venta.id_u=usuarios.id_u AND venta.id_fh=fh.id_fh";
  $tablaventa=$link->query($sql);
  $sqldesp="SELECT usuarios.nombre,usuarios.ap FROM usuarios WHERE id_u=$id";
  $tabladesp=$link->query($sqldesp);
  $filadesp=$tabladesp->fetch_array(MYSQLI_BOTH);
  $sqlp="SELECT productos.id_p,productos.nombre,preciov.preciov ,productos.id_prev FROM productos,preciov WHERE productos.status=1 AND productos.id_prev=preciov.id_prev";
  $tablaprod=$link->query($sqlp);


 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ventas</title> <!--Titulo de la pagina-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> <!--librerias-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            body {
                color: #000000;    /*<!--color de la captura de datos-->*/
                background-image:url('../img/dobla-papeles.jpg'); -webkit-background-size: cover;/*del fondo de la pagina*/
                font-family: 'Varela Round', sans-serif;
                font-size: 13px;    /*<!--tamaño de las letras de la cabeza-->*/
            }
            .table-wrapper {
                background: #fff;
                padding: 20px 25px; /*<!--Tamaño del titulo la tabla-->*/
                margin: 30px 0;
                border-radius: 3px;
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .table-title {       /*<!--tamaño del cuadro principal-->*/
                                 padding-bottom: 15px;
                                 background: #0174DF;
                                 color: #fff;  /*<!--color del titulo del cuadro-->*/
                                 padding: 30px 30px;
                                 margin: 10px 0px 10px;  //<!--ancho del cuadro-->
                                 border-radius: 3px 3px 0 0;
            }
            .table-title h2 {
                margin: 5px 0 0;
                font-size: 24px;
            }
            .table-title .btn-group {
                float: right;
            }
            .table-title .btn {   /*<!--tamaño del cuadro de agregar y eliminar-->*/
                                  color: #fff;
                                  float: right;
                                  font-size: 13px;
                                  border: none;
                                  min-width: 50px;
                                  border-radius: 2px;
                                  border: none;
                                  outline: none !important;
                                  margin-left: 10px;
            }
            .table-title .btn i {      /*<!--tamaño del + --->*/
                                       float: left;
                                       font-size: 21px;
                                       margin-right: 5px;
            }
            .table-title .btn span {
                float: left;
                margin-top: 2px;
            }
            table.table tr th, table.table tr td {    /*<!--espacio entre los productos-->*/
                                                      border-color: #e9e9e9;
                                                      padding: 12px 15px;
                                                      vertical-align: middle;
            }
            table.table tr th:first-child {
                width: 60px;
            }
            table.table tr th:last-child {
                width: 100px;
            }
            table.table-striped tbody tr:nth-of-type(odd) {
                background-color: #fcfcfc;
            }
            table.table-striped.table-hover tbody tr:hover {
                background: #f5f5f5;
            }
            table.table th i {
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }
            table.table td:last-child i {
                opacity: 0.9;
                font-size: 22px;
                margin: 0 5px;
            }
            table.table td a {
                font-weight: bold;
                color: #566787;
                display: inline-block;
                text-decoration: none;
                outline: none !important;
            }
            table.table td a:hover {
                color: #2196F3;
            }
            table.table td a.edit {
                color: #FFC107;
            }
            table.table td a.delete {
                color: #F44336;
            }
            table.table td i {
                font-size: 19px;
            }
            table.table .avatar {
                border-radius: 50%;
                vertical-align: middle;
                margin-right: 10px;
            }
            .pagination {
                float: right;
                margin: 0 0 5px;
            }
            .pagination li a {
                border: none;
                font-size: 13px;
                min-width: 30px;
                min-height: 30px;
                color: #999;
                margin: 0 2px;
                line-height: 30px;
                border-radius: 2px !important;
                text-align: center;
                padding: 0 6px;
            }
            .pagination li a:hover {
                color: #666;
            }
            .pagination li.active a, .pagination li.active a.page-link {
                background: #03A9F4;
            }
            .pagination li.active a:hover {
                background: #0397d6;
            }
            .pagination li.disabled i {
                color: #ccc;
            }
            .pagination li i {
                font-size: 16px;
                padding-top: 6px
            }
            .hint-text {
                float: left;
                margin-top: 10px;
                font-size: 13px;
            }
            /* Custom checkbox */
            .custom-checkbox {
                position: relative;
            }
            .custom-checkbox input[type="checkbox"] {
                opacity: 0;
                position: absolute;
                margin: 5px 0 0 3px;
                z-index: 9;
            }
            .custom-checkbox label:before{
                width: 18px;
                height: 18px;
            }
            .custom-checkbox label:before {
                content: '';
                margin-right: 10px;
                display: inline-block;
                vertical-align: text-top;
                background: white;
                border: 1px solid #bbb;
                border-radius: 2px;
                box-sizing: border-box;
                z-index: 2;
            }
            .custom-checkbox input[type="checkbox"]:checked + label:after {
                content: '';
                position: absolute;
                left: 6px;
                top: 3px;
                width: 6px;
                height: 11px;
                border: solid #000;
                border-width: 0 3px 3px 0;
                transform: inherit;
                z-index: 3;
                transform: rotateZ(45deg);
            }
            .custom-checkbox input[type="checkbox"]:checked + label:before {
                border-color: #03A9F4;
                background: #03A9F4;
            }
            .custom-checkbox input[type="checkbox"]:checked + label:after {
                border-color: #fff;
            }
            .custom-checkbox input[type="checkbox"]:disabled + label:before {
                color: #b8b8b8;
                cursor: auto;
                box-shadow: none;
                background: #ddd;
            }
            /* Modal styles */
            .modal .modal-dialog {
                max-width: 400px;
            }
            .modal .modal-header, .modal .modal-body, .modal .modal-footer {
                padding: 20px 30px;
            }
            .modal .modal-content {
                border-radius: 3px;
            }
            .modal .modal-footer {
                background: #ecf0f1;
                border-radius: 0 0 3px 3px;
            }
            .modal .modal-title {
                display: inline-block;
            }
            .modal .form-control {
                border-radius: 2px;
                box-shadow: none;
                border-color: #dddddd;
            }
            .modal textarea.form-control {
                resize: vertical;
            }
            .modal .btn {
                border-radius: 2px;
                min-width: 100px;
            }
            .modal form label {
                font-weight: normal;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                // Activate tooltip
                $('[data-toggle="tooltip"]').tooltip();

                // Select/Deselect checkboxes
                var checkbox = $('table tbody input[type="checkbox"]');
                $("#selectAll").click(function () {
                    if (this.checked) {
                        checkbox.each(function () {
                            this.checked = true;
                        });
                    } else {
                        checkbox.each(function () {
                            this.checked = false;
                        });
                    }
                });
                checkbox.click(function () {
                    if (!this.checked) {
                        $("#selectAll").prop("checked", false);
                    }
                });
            });
        </script>
        <script type="text/javascript" src="js/Ventas.js">

        </script>
    <body style="background-image:url('../img/dobla-papeles.jpg'); -webkit-background-size: cover;"> <!--fondo de la Pág-->
    </head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Venta de productos</h2>
                    </div>
                    <div class="col-sm-6">
                      <input type="button" name="button" onclick="location='Inicio.php'" class="btn btn-warning" id="button" value="Regresar"/>
                      <input type="button" name="button" onclick="location='Gráfica de ventas.html'" class="btn btn-warning" id="button" value="Grafica de ventas del año"/>
                      <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ventas</span></a>                     </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>

                        <th>Producto</th>
                        <th>Codigo de barra</th>
                        <th>Importe</th>
                        <th>Atendio</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                  <?php while ($filaventa=$tablaventa->fetch_array(MYSQLI_BOTH)){
                      if($filaventa[1]==1){
                   ?>
                  <tr>
                        <td><?php echo $filaventa[2]; ?></td>
                        <td><?php echo $filaventa[0]; ?></td>
                        <td><?php echo $filaventa[3]; ?></td>
                        <td><?php echo $filaventa[4]." ".$filaventa[5]; ?></td>
                        <td><?php echo $filaventa[6]; ?></td>
                        <td><?php echo $filaventa[7]; ?></td>
                        <td>
                            <a href="#deleteEmployeeModal" onclick="idventa('<?php echo $filaventa[0]; ?>')" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                  <?php }} ?>
                </tbody>
            </table>
        </div>
        <div id="addEmployeeModal" class="modal fade">
      		<div class="modal-dialog">
      			<div class="modal-content">
      				<form>
      					<div class="modal-header">
      						<h4 class="modal-title">Agregar Venta</h4>
      						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      					</div>
      					<div class="modal-body">

      						<div class="form-group">
      							<label>Atiende</label>
      							<input value="<?php echo $filadesp[0]." ".$filadesp[1]; ?>" type="text" class="form-control" readonly="readonly" required>
      						</div>
      						<div class="form-group">

      							<label>Productos</label>
      							<select  id="addprod" onchange="importe()">
                      <?php while($filaprod=$tablaprod->fetch_array(MYSQLI_BOTH)){
                         ?>
                      <option  value="<?php echo $filaprod[2].",".$filaprod[0]; ?>"><?php echo $filaprod[1]." -----$".$filaprod[2]; ?></option>
                    <?php } ?>
                    </select>
      						</div>
                  <div class="form-group">
      							<label>Cantidad</label>
      							<input id="addcant" type="text" class="form-control" onchange="importe()" value=0 required>
      						</div>
      						<div class="form-group">
      							<label>Importe</label>
      							<input id="addimp" type="text" class="form-control" readonly="readonly" required>
      						</div>

      						<div class="form-group">
      							<label>Fecha</label>
      							<input id="addfech" type="text"  value="<?php echo date("Y-m-d");?>" class="form-control" readonly  required>
      						</div>
                  <div class="form-group">
      							<label>Hora</label>
      							<input id="addhr" type="text" value="<?php echo date("H:i"); ?>" class="form-control" readonly required>
      						</div>

      					</div>
      					<div class="modal-footer">
      						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
      						<input type="button" onclick="agregarVenta(<?php echo $id; ?>)" class="btn btn-success" value="Agregar">
      					</div>
      				</form>
      			</div>
      		</div>
      	</div>

      	<!-- Delete Modal HTML -->
      	<div id="deleteEmployeeModal" class="modal fade">
      		<div class="modal-dialog">
      			<div class="modal-content">
      				<form>
      					<div class="modal-header">
      						<h4 class="modal-title">Eliminar</h4>
      						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      					</div>
      					<div class="modal-body">
                  <div class="form-group" style="display:none;" >

      							<input id="delid" type="text" class="form-control" required>
      						</div>
      						<p>¿Estas seguro de que quieres eliminar?</p>
      						<p class="text-warning"><small>Esta accion no se puede deshacer</small></p>
      					</div>
      					<div class="modal-footer">
      						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
      						<input type="button" onclick="eliminarVenta()" class="btn btn-danger" value="Eliminar">
      					</div>
      				</form>
      			</div>
      		</div>
      		<input type="button" value="Regresar" onclick="location='Inicio.php'"/>
      	</div>
        <script src="JS/jquery-3.1.1.min.js"></script>
        <script src="JS/main.js"></script>
</body>
</div>
</html>
