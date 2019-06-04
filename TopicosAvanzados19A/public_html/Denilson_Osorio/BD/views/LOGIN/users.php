<?php
//session_start();
require_once '../../core/Config.php';




////CONECTARME A LA BASE DE DATOS
$config = new Config();
$conexion = $config->conectar();

$sql="SELECT comida.Nombre, comida.ID_comida,comida.status FROM comida";
$tablacomida = $conexion->query($sql);

$sqlcomidas="SELECT comida.Nombre, comida.ID_comida,comida.status FROM comida";
$tablacomidas = $conexion->query($sqlcomidas);

$sqlprecio="SELECT precio.Precio, precio.ID_p,precio.status FROM precio";
$tablaprecio=$conexion->query($sqlprecio);

$sqlprecios="SELECT precio.Precio, precio.ID_p,precio.status FROM precio";
$tablaprecios=$conexion->query($sqlprecios);

$usuario=$_POST['usuario'];
$contrasena=$_POST['contra'];


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
$sqlventas="SELECT venta.ID_venta, cliente.nombre, comida.Nombre, precio.Precio,venta.Cantidad, venta.Importe,venta.Fecha,venta.Hora, usuarios.Nombre, usuarios.Apellido_P,usuarios.Apellido_M,venta.status FROM cliente,venta,comida,precio,usuarios WHERE cliente.ID_Cliente=venta.ID_Cliente AND usuarios.ID_usuario=venta.ID_usuario AND comida.ID_comida=venta.ID_comida AND precio.ID_p=venta.ID_p";
$tablaventa=$conexion->query($sqlventas);


////Realizar una consulta

////Ejecutar una consulta y obtener la tabla

////Obtener la primera fila de la tabla
?>
<html lang="es">
    <head>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
            <table class="table table-striped table-hover" border="1" width="80%">
              <thead>
                <th colspan="7" ><center>Nueva Venta</center></th>
              </thead>
                <thead>
                <th>Nombre del cliente</th>
                <th>Comida</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Hora</th>
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
                        <td> <input id="cantidadventa" type="number" name="campo3" value=""></td>
                        <td> <input id="fechaventa" type="date" name="campo3" value=""></td>
                          <td> <input id="horaventa" type="text" name="campo3" value=""></td>
                        <td><button type="buttton" onclick="agregarVenta('<?php echo $id_usuario; ?>')">Agregar Venta</button> </td>
                    </form>
                    </tr>


                    <thead>
                      <th colspan="7" ><center>Ventas Realizadas</center></th>
                    </thead>
                    <thead>
                      <th>Nombre del cliente</th>
                      <th>Comida</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>Importe</th>
                      <th>Fecha</th>
                      <th>Hora</th>
                      <th>Despachador</th>
                      <th>Acciones</th>
                    </thead>
                    <?php while($filaventa=$tablaventa->fetch_array(MYSQLI_BOTH)){
                      if ($filaventa[11]==1){ ?>

                      <tr>

                        <td><?php echo $filaventa[1]; ?></td>
                        <td><?php echo $filaventa[2]; ?></td>
                        <td><?php echo $filaventa[3]; ?></td>
                        <td><?php echo $filaventa[4]; ?></td>
                        <td><?php echo $filaventa[5]; ?></td>
                        <td><?php echo $filaventa[6]; ?></td>
                        <td><?php echo $filaventa[7]; ?></td>
                        <td><?php echo $filaventa[8]." ".$filaventa[9]." ".$filaventa[10]; ?></td>
                          <td><button type="buttton" onclick="eliminarVenta('<?php echo $filaventa[0]; ?>');">Eliminar</button> </td>
                      </tr>
                    <?php }
                  } ?>
                </tbody>
            </table>
        </div>



<br>
<br>
<br>




                <div class="content">
                    <table class="table table-striped table-hover" border="1" width="80%">
                      <thead>
                        <th colspan="3" ><center>Comidas</center></th>
                      </thead>
                      <td>Nueva Comida</td>
                      <td><input id="agregarcomida" type="text" value=""></td>
                      <td><button type="buttton" onclick="agregarComida()">Agregar</button></td>
                      <tbody>
                        <thead>
                          <th>Comidas</th>
                          <th>Cambiar comida</th>
                          <th>Acciones</th>
                        </thead>
                        <tr>
                          <?php while ($filacomidas=$tablacomidas->fetch_array(MYSQLI_BOTH)) {
                            if ($filacomidas[2]==1) {
                           ?>
                          <td><?php echo $filacomidas[0]; ?></td>
                          <td><input id="editarcomida" type="text" value=""></td>
                          <td><button type="buttton" onclick="editarComida('<?php echo $filacomidas[1]; ?>')">Editar</button><button onclick="eliminarComida('<?php echo $filacomidas[1]; ?>')" type="buttton">Eliminar</button></td>
                        </tr>
                      <?php }} ?>
                      </tbody>
                    </table>
                </div>



                <div class="content">

                    <table class="table table-striped table-hover" border="1" width="80%">
                      <thead>
                        <th colspan="3" ><center>Precios</center></th>
                      </thead>
                      <td>Nuevo Precio</td>
                      <td><input id="agregarprecio" type="text" value=""></td>
                      <td><button type="buttton" onclick="agregarPrecio()">Agregar</button></td>
                      <tbody>
                        <thead>
                          <th>Precios</th>
                          <th></th>
                          <th>Acciones</th>
                        </thead>
                        <tr>
                          <?php while ($filaprecios=$tablaprecios->fetch_array(MYSQLI_BOTH)) {
                            if ($filaprecios[2]==1) {
                           ?>
                          <td><?php echo $filaprecios[0]; ?></td>
                          <td>----------------</td>
                          <td><button onclick="eliminarPrecio('<?php echo $filaprecios[1]; ?>')" type="buttton">Eliminar</button></td>
                        </tr>
                      <?php }} ?>
                      </tbody>
                    </table>
                </div>

    </div>
</div>
</body>
</html>
