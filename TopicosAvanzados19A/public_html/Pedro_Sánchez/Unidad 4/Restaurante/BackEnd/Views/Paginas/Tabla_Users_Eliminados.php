<!--Aqui llenamos los input para el momento de editar-->
<script>
    function TomarValores(id_fec, id_nic, rfc, nombre, ape_p, ape_m) {
        document.getElementById('fecHabilitar').value = id_fec;
        document.getElementById('nicHabilitar').value = id_nic;
        document.getElementById('rfcHabilitar').value = rfc;
        document.getElementById('nombreHabilitar').value = nombre;
        document.getElementById('ape_pHabilitar').value = ape_p;
        document.getElementById('ape_mHabilitar').value = ape_m;
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
        color: #F6901C;
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
                    <h2>Tabla Clientes (Hasta usuarios eliminados)</h2>
                </div>
                <div class="col-sm-6">
                    <a href="<?php echo RUTA_URL . '/TablaUsers_controller/' ?>" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#xE14A;</i><span>Quitar Eliminados</span></a>
                </div>
            </div>
        </div>
        <!--En el código de abajo se programa el Header de la tabla.-->
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <tr>
                <th><center>RFC</center></th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Fecha de Nacimiento</th>
        <th>Email</th>
        <th>NickName</th>
        <th>Password</th>
        <th>Reservación</th>
        <th>Mesero</th>
        <th>Actions</th>
        </tr>
        </thead>
        <!--En el código de abajo se prende generar un for con datos de la Bd.-->
        <tbody>
            <?php $estadocolor = array('0' => '#D2D6D9', '1' => '') ?>
            <?php $simbolo = array('0' => '&#xE166;', '1' => '') ?>
            <?php $simbolourl = array('0' => '#Habilitar', '1' => '') ?>
            <?php foreach ($datos['usuarios'] as $usuarios): ?>

                <tr> 
                    <td bgcolor="<?php echo $estadocolor[$usuarios->status] ?>"><center><?php echo $usuarios->rfc; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$usuarios->status] ?>"><center><?php echo $usuarios->nombre; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$usuarios->status] ?>"><center><?php echo $usuarios->ape_p; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$usuarios->status] ?>"><center><?php echo $usuarios->ape_m; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$usuarios->status] ?>"><center><?php echo $usuarios->fecha; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$usuarios->status] ?>">        <?php echo $usuarios->email; ?>         </td>
            <td bgcolor="<?php echo $estadocolor[$usuarios->status] ?>"><center><?php echo $usuarios->nickname; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$usuarios->status] ?>"><center><?php echo $usuarios->password; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$usuarios->status] ?>"><center><?php echo $usuarios->folio; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$usuarios->status] ?>"><center><?php echo $usuarios->nombreTra; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$usuarios->status] ?>">
            <center>
                <a href="<?php echo $simbolourl[$usuarios->status]?>" class="edit" onclick="TomarValores('<?php echo $usuarios->id_fec; ?>', '<?php echo $usuarios->id_nic; ?>', '<?php echo $usuarios->rfc; ?>', '<?php echo $usuarios->nombre; ?>', '<?php echo $usuarios->ape_p; ?>', '<?php echo $usuarios->ape_m; ?>');" title="Habilitar" data-toggle="modal"><i class="material-icons"><?php echo $simbolo[$usuarios->status] ?></i></a> 
            </center>
            </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Habilitamos un Cliente HTML-->
<div id="Habilitar" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo RUTA_URL . '/TablaUsers_controller/Habilitar' ?>" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Habilitar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>¿Seguro que desea Habilitar esté Usuario?</p>
                    <p class="text-warning">
                        <small>Datos Usuario:</small>
                    </p>
                    <div class="form-group">
                        <input id="fecHabilitar" type="hidden" name="fecHabilitar" class="form-control" required="" readonly="">
                    </div>
                    <div class="form-group">
                        <input id="nicHabilitar" type="hidden" name="nicHabilitar" class="form-control" required="" readonly="">
                    </div>
                    <div class="form-group">
                        <input id="rfcHabilitar" type="text" name="rfcHabilitar"class="form-control" readonly="">
                    </div>
                    <div class="form-group">
                        <input id="nombreHabilitar" type="text" class="form-control" readonly="">
                    </div>
                    <div class="form-group">
                        <input id="ape_pHabilitar" type="text" name="" class="form-control" readonly="">
                    </div>
                    <div class="form-group">
                        <input id="ape_mHabilitar" type="text" class="form-control" readonly="">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar"> 
                    <input type="submit" class="btn btn-success" value="Habilitar Usuario">
                </div>
            </form>
        </div>
    </div>
</div>