<!--Aqui llenamos los input para el momento de editar-->
<script>
    function TomarValores(id_fecha, folio, nombre, fechare, hora, cant_personas) {
        document.getElementById('id_fechaHabilitar').value = id_fecha;
        document.getElementById('FolioHabi').value = folio;
        document.getElementById('nombreHabilitar').value = nombre;
        document.getElementById('fechareHabilitar').value = fechare;
        document.getElementById('horaHabilitar').value = hora;
        document.getElementById('cant_personasHabilitar').value = cant_personas;
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
                    <h2>Tabla Reservaciones (Hasta reservaciones eliminadas o culminadas)</h2>
                </div>
                <div class="col-sm-6">
                    <a href="<?php echo RUTA_URL . '/Tablareservaciones_controller/' ?>" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#xEB3D;</i> <span>Mostrar Todos</span></a>
                </div>
            </div>
        </div>
        <!--En el código de abajo se programa el Header de la tabla.-->
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Folio</th>
                <th>Nombre<i class="fa fa-sort"></i></th>
                <th>Fecha a Reservar</th>
                <th>Hora Reservación</th>
                <th>Cantidad de Personas</th>
                <th>Fecha de realización de la reservación</th>
                <th>Actions</th>
            </tr>
        </thead>
        <!--En el código de abajo se prende generar un for con datos de la Bd.-->
        <tbody>
            <?php $estadocolor = array('0' => '#D2D6D9', '1' => '') ?>
            <?php $simbolo = array('0' => '&#xE166;', '1' => '') ?>
            <?php $simbolourl = array('0' => '#Habilitar', '1' => '') ?>
            <?php foreach ($datos['reservaciones'] as $reservaciones): ?>
                <tr>
                    <td bgcolor="<?php echo $estadocolor[$reservaciones->status] ?>"><center><?php echo $reservaciones->folio; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$reservaciones->status] ?>"><center><?php echo $reservaciones->nombre; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$reservaciones->status] ?>"><center><?php echo $reservaciones->fechare; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$reservaciones->status] ?>"><center><?php echo $reservaciones->hora; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$reservaciones->status] ?>"><center><?php echo $reservaciones->cant_personas; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$reservaciones->status] ?>"><center><?php echo $reservaciones->created_at; ?></center></td>
            <td bgcolor="<?php echo $estadocolor[$reservaciones->status] ?>">
            <center>
                <a href="<?php echo $simbolourl[$reservaciones->status]?>" class="edit" onclick="TomarValores('<?php echo $reservaciones->id_fecha; ?>', '<?php echo $reservaciones->folio; ?>', '<?php echo $reservaciones->nombre; ?>', '<?php echo $reservaciones->fechare; ?>', '<?php echo $reservaciones->hora; ?>', '<?php echo $reservaciones->cant_personas; ?>');" title="Hailitar" data-toggle="modal"><i class="material-icons"><?php echo $simbolo[$reservaciones->status] ?></i></a>
            </center>
            </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Eliminamos un Cliente -->
<div id="Habilitar" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo RUTA_URL . '/Tablareservaciones_controller/Habilitar' ?>" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Habilitar Reservación</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input id="FolioHabi" type="hidden" name="FolioHabi" class="form-control" required="" >
                        <input id="id_fechaHabilitar" type="hidden" name="id_fechaHabilitar" class="form-control" required="" >
                    </div>
                    <div class="form-group">
                        <label>Nombre Reservación</label>
                        <input id="nombreHabilitar" type="text" name="nombreHabilitar" class="form-control" required="" >
                    </div>
                    <div class="form-group">
                        <label>Fecha Reservación</label>
                        <input id="fechareHabilitar" type="date" name="fechareHabilitar" class="form-control" required="" >
                    </div>
                    <div class="form-group">
                        <label>Hora Reservación</label>
                        <input id="horaHabilitar" type="time" name="horaHabilitar" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Cantidad de Personas</label>
                        <input id="cant_personasHabilitar" type="number" name="cant_personasHabilitar" class="form-control" required="">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Habilitar Reservación">
                </div>
            </form>
        </div>
    </div>
</div>