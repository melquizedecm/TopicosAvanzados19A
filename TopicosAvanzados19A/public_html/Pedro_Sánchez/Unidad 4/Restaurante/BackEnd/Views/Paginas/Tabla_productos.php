<!--Aqui llenamos los input para el momento de editar-->
<script>
    function TomarValores(id_fec, id_nic, rfc, nombre, ape_p, ape_m, fecha, nickname, password) {
        document.getElementById('fecedith').value = id_fec;
        document.getElementById('nicedith').value = id_nic;
        document.getElementById('rfcedith').value = rfc;
        document.getElementById('nombreedith').value = nombre;
        document.getElementById('ape_pedith').value = ape_p;
        document.getElementById('ape_medith').value = ape_m;
        document.getElementById('fechaedith').value = fecha;
        document.getElementById('nicknameedith').value = nickname;
        document.getElementById('passwordedith').value = password;

    }

    function Elimina(id_fec, id_nic, rfc, nombre, ape_p, ape_m) {
        document.getElementById('fecdelete').value = id_fec;
        document.getElementById('nicdelete').value = id_nic;
        document.getElementById('rfcdelete').value = rfc;
        document.getElementById('nombredelete').value = nombre;
        document.getElementById('ape_pdelete').value = ape_p;
        document.getElementById('ape_mdelete').value = ape_m;
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<style>
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: 'Varela Round', sans-serif;
        font-size: 13px;
    }

    .table-wrapper {
        background: #fff;
        padding: 0px 0px;
        margin: 30px 0;
        border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
        padding-bottom: 15px;
        background: #ED5844;
        color: #fff;
        padding: 16px 30px;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
    }

    .table-title h2 {
        margin: 5px  0;
        font-size: 24px;
    }

    .table-title .btn-group {
        float: right;
    }

    .table-title .btn {
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

    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }

    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }

    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
        padding: 5px 10px;
        vertical-align: middle;
    }

    table.table tr th:first-child {
        width: 100px;
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

    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
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

<center>
    <br>
    <br>
    <br>
    <br>
    <h1>Restaurante Viña del Mar</h1>
    <br>
</center>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Tabla Productos</h2>
                </div>
                <div class="col-sm-6">
                    <a href="#add" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE7FE;</i> <span>Agregar Producto</span></a>
                    <a href="<?php echo RUTA_URL . '/TablaVentas_controller/Todos' ?>" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#xEB3D;</i> <span>Mostrar Todos</span></a>
                </div>
            </div>
        </div>
        <!--En el código de abajo se programa el Header de la tabla.-->
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Comida</th>
                <th>Precio</th>
                <th>Clasificación</th>
                <th>Actions</th>
            </tr>
        </thead>
        <!--En el código de abajo se prende generar un for con datos de la Bd.-->
        <tbody>
            <?php foreach ($datos['productos'] as $producto): ?>
                <tr>
                    <td><center><?php echo $producto->id_prod; ?></center></td>
            <td><center><?php echo $producto->comida; ?></center></td>
            <td><center><?php echo $producto->precio; ?></center></td>
            <td><center><?php echo $producto->clasificacion; ?></center></td>
            <td>
            <center>
                <a href="#Edith" class="edit" onclick="TomarValores('<?php echo $producto->id_prod; ?>', '<?php echo $producto->Comida; ?>', '<?php echo $producto->precio; ?>', '<?php echo $producto->clasificacion; ?>');" title="Edit" data-toggle="modal"><i class="material-icons">&#xE254;</i></a>
                <a href="#Delete" class="delete" onclick="Elimina('<?php echo $producto->id_prod; ?>', '<?php echo $producto->Comida; ?>', '<?php echo $producto->precio; ?>', '<?php echo $producto->clasificacion; ?>');" title="Delete" data-toggle="modal"><i class="material-icons">&#xE872;</i></a>
            </center>
            </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <!-- <div class="clearfix">
     <ul class="pagination">
         <li class="page-item disabled"><a href="#">Anterior</a></li>
         <li class="page-item active"><a href="#" class="page-link">1</a></li>
         <li class="page-item"><a href="#" class="page-link">2</a></li>
         <li class="page-item"><a href="#" class="page-link">3</a></li>
         <li class="page-item"><a href="#" class="page-link">4</a></li>
         <li class="page-item"><a href="#" class="page-link">5</a></li>
         <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
     </ul>
 </div> -->
</div>
<!-- Agregamos -->
<div id="add" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo RUTA_URL . '/TablaProductos_controller/Create' ?>" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Producto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre Producto</label> <input type="text" id="comida" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Precio</label> <input type="text" id="precio" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Clasificación</label> <input type="text" id="clasificacion" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar"> 
                    <input type="submit" class="btn btn-success" value="Guardar Producto">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Editamos -->
<div id="Edith" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo RUTA_URL . '/TablaProductos_controller/Update' ?>" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Producto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <input id="id_claedith" type="hidden" name="id_claedith" class="form-control" required="" readonly="">
                    </div>
                    <div class="form-group">
                        <input id="id_preedith" type="hidden" name="id_preedith" class="form-control" required="" readonly="">
                    </div>
                    <div class="form-group">
                        <label>ID</label> <input id="id_prodedith" type="text" name="id_prodedith" class="form-control" required="" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Nombre Producto</label> <input id="comidaEdith" type="text" name="comidaedith" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Precio</label> <input id="precioedith" type="text" name="precioedith" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Clasificación</label> <input id="clasificacionedith" type="text" name="clasificacionedith" class="form-control" required="">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel"> 
                    <input type="submit" class="btn btn-info" value="Editar Producto">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Eliminamos -->
<div id="Delete" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo RUTA_URL . '/TablaProductos_controller/Delete' ?>" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar Producto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>¿Seguro de eliminar esté Producto?</p>
                    <p class="text-warning">
                        <small>Datos Producto:</small>
                    </p>
                    <div class="form-group">
                        <input id="id_proddelete" type="hidden" name="id_proddelete" class="form-control" required="" readonly="">
                    </div>
                    <div class="form-group">
                        <input id="id_predelete" type="hidden" name="id_predelete" class="form-control" required="" readonly="">
                    </div>
                    <div class="form-group">
                        <input id="id_cladelete" type="hidden" name="id_cladelete" class="form-control" required="" readonly="">
                    </div>
                    <div class="form-group">
                        <input id="comidadelete" type="text" name="comidadelete" class="form-control" readonly="">
                    </div>
                    <div class="form-group">
                        <input id="preciodelete" type="text" name="preciodelete" class="form-control" readonly="">
                    </div>
                    <div class="form-group">
                        <input id="clasificacionedelete" type="text" name="clasificaciondelete" class="form-control" readonly="">
                    </div>
                    <p class="text-warning">
                        <small>Esta acción no podrá revertirse.</small>
                    </p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-danger" value="Eliminar Producto">
                </div>
            </form>
        </div>
    </div>
</div>