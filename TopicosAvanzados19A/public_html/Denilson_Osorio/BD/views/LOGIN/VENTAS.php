<?php
session_start();
if(!isset($_SESSION['user'])){
  header("location: Login.php");
}

require_once '../../core/Config.php';
////CONECTARME A LA BASE DE DATOS
$config = new Config();
$conexion = $config->conectar();
////Consultas para poner los datos de una nueva venta
$sql="SELECT comida.Nombre, comida.ID_comida,comida.status FROM comida";
$tablacomida = $conexion->query($sql);

$sqlcomidas="SELECT comida.Nombre, comida.ID_comida,comida.status FROM comida";
$tablacomidas = $conexion->query($sqlcomidas);

$sqlprecio="SELECT precio.Precio, precio.ID_p,precio.status FROM precio";
$tablaprecio=$conexion->query($sqlprecio);

$sqlprecios="SELECT precio.Precio, precio.ID_p,precio.status FROM precio";
$tablaprecios=$conexion->query($sqlprecios);
$usuario=$_SESSION['user'];
$contrasena=$_SESSION['pass'];

$sqlusuario="SELECT login.ID_login FROM login WHERE Nombre='$usuario' AND Contrasena='$contrasena'";
$tablausuario=$conexion->query($sqlusuario);
while ($filausuarios=$tablausuario->fetch_array(MYSQLI_BOTH)) {
  $idusuario=$filausuarios[0];
}
$sqlatiende="SELECT usuarios.ID_usuario, usuarios.Nombre, usuarios.Apellido_P,usuarios.Apellido_M FROM usuarios WHERE ID_login='$idusuario'";
$tablaatiende=$conexion->query($sqlatiende);
while ($filaatiende=$tablaatiende->fetch_array(MYSQLI_BOTH)) {
  $id_usuario=$filaatiende[0];
    $nombre= $filaatiende[1];
    $apellido_p= $filaatiende[2];
      $apellido_m= $filaatiende[3];

}

$sqlventas="SELECT venta.ID_venta, cliente.nombre, comida.Nombre, precio.Precio,venta.Cantidad, venta.Importe,venta.Fecha,venta.Hora, usuarios.Nombre, usuarios.Apellido_P,usuarios.Apellido_M,venta.status FROM cliente,venta,comida,precio,usuarios WHERE cliente.ID_Cliente=venta.ID_Cliente AND usuarios.ID_usuario=venta.ID_usuario AND comida.ID_comida=venta.ID_comida AND precio.ID_p=venta.ID_p ";
$tablaventa=$conexion->query($sqlventas);


////Realizar una consulta

////Ejecutar una consulta y obtener la tabla

////Obtener la primera fila de la tabla
?>

<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/maintable.css">
    <!--===============================================================================================-->

    <script type="text/javascript" src="js/Ventas1.js">

    </script>
    <script type="text/javascript" src="js/Ventas.js">

    </script>
    <script type="text/javascript" src="js/Comidas.js">

    </script>
    <script type="text/javascript" src="js/Precio.js">

    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        function Agregar() {
            document.getElementById("form3").style.display = "inline";
        }
        function editar(form) {
            //recepcion de variables;
            var id= form.campo0.value;
            var Nombre = form.campo1.value;
            var Fecha = form.campo2.value;
            var Hora = form.campo3.value;
            alert(cliente);
            ///llamar a la controlador de usuarios/////
            $.post('../controllers/cliente.php',
                    {
                        'id': id,
                        'Nombre': cliente,
                        'Fecha': Fecha,
                        'Hora': Hora,
                        'action': "editar"
                    },
                    function(id,cleinte){
                      alert(cliente);
                    }
                  );
            return false;
        }
        function eliminar(id) {
            $.post('../controllers/users.php',
                    {
                        'id': id,
                        'Nombre': Nombre,
                        'Fecha': Fecha,
                        'Hora': Hora,
                        'action': 'eliminar'
                    });
            return false;
        }
    </script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="form3" style="display:none;">
        <h3>Ingreso de Usuarios</h3>
        <br>
        <form method="post" action="../controllers/cliente.php">
            <label>Cliente:</label>
            <input type="text" name="inputNombre" placeholder="Ingresa aqui tu nombre de usuario">
            <br>
            <input type="hidden" name="action" value="agregar">
            <br>
            <input type="submit" value="Registrar">
        </form>
    </div>

    <div class="content">
      <div class="limiter">
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100">
              <!-- creacion de las tablas-->
              <table>
                <thead>
                  <tr class="table100-head">
                    <th colspan="7" ><center>Nueva Venta</center></th>
                  </thead>
                    <thead>
                      <tr class="table100-head">
                    <th>Nombre del cliente</th>
                    <th>Comida</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Accion</th>
                    </thead>
                    <tbody>
                            <tr>
                        <form>
                            <td> <input id="nombreventa" type="text" name="campo0" value="" >   </td>

                            <td> <select id="comidaventa">
                              <?php while($filacomida=$tablacomida->fetch_array(MYSQLI_BOTH)){
                                    if($filacomida[2]==1){
                               ?>
                              <option value="<?php echo $filacomida[1]; ?>"><?php echo $filacomida[0]; ?></option>
                            <?php }} ?>
                            </select>  </td>
                            <td> <select id="precioventa">
                              <?php while($filaprecio=$tablaprecio->fetch_array(MYSQLI_BOTH)){
                                  if($filaprecio[2]==1){
                               ?>
                              <option value="<?php echo $filaprecio[1]; ?>,<?php echo $filaprecio[0]; ?>"><?php echo $filaprecio[0]; ?></option>
                            <?php }} ?>
                            </select>  </td>
                            <td> <input id="cantidadventa" type="number" name="campo3" value="" header="[Ingrese Cantidad]"></td>
                            <td> <input id="fechaventa" type="date" name="campo4" value=""></td>
                              <td> <input id="horaventa" type="text" name="campo5" value=""></td>
                            <td><button type="buttton" onclick="agregarVenta('<?php echo $id_usuario; ?>')">Agregar Venta</button> </td>
                        </form>
                        </tr>
                      </tbody>
                      </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>

  </body>
</html>
