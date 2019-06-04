<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Crud</title> <!--Titulo de la pagina-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> <!--librerias-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #000000;    /*<!--color de la captura de datos-->*/
		background-image:url('../img/dobla-papeles.jpg'); -webkit-background-size: cover; /*<!--del fondo de la pagina-->*/
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
	.table-title {       /*<!--tamaño del cuadro princiapal-->*/
		padding-bottom: 15px;
		background: #0174DF;
		color: #fff;  /*<!--color del titulo del cuadro-->*/
		padding: 30px 30px;
		margin: 10px 0px 10px;  /*<!--ancho del cuadro-->*/
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
		border-radius: 5px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;      /*<!--´posicion de los - + -->*/
		font-size: 0px;   /*<!--tamaño del + --->*/
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {    /*<!-- espacio entre los productos-->*/
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
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
			});
		}
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<body style="background-image:url('../img/dobla-papeles.jpg'); -webkit-background-size: cover;">
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Ordenar compra</h2>   <!--subtitulo de la pagina-->
					</div>
					<div class="col-sm-6">
						<a href="Inicio.php" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Enviar</span></a>   <!--botones de eliminar y agregar-->
						<a href="Inicio.php" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Regresar</span></a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>

						</th>     <!--encaebzado-->
                        <th>Producto</th>
                        <th>Codigo de barra</th>
						            <th>Precio de venta</th>
                        <th>Existencia</th>
                        <th>Precio de compra</th>
                        <th>Categoria</th>
                        <th>Cantidad a ordenar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
						<td>

						</td>
                        <td>Lapiz mirado #2</td>
                        <td>7584155587</td>
						            <td>$4</td>
                        <td>526</td>
                        <td>$2</td>
                        <td>Oficina</td>
                        <td>
                          <input type="number" name="" value="">
                        </td>
                    </tr>
                    <tr>
						<td>

						</td>
                        <td>Borrrador</td>
                        <td>9677134458</td>
						<td>$5</td>
                        <td>230</td>
                        <td>$3</td>
                        <td>Oficina</td>
                        <td>
                          <input type="number" name="" value="">
                        </td>
                    </tr>
					<tr>
						<td>

						</td>
                        <td>Tajador</td>
                        <td>3357418468</td>
						<td>$4</td>
                        <td>200</td>
                        <td>$2</td>
                        <td>Oficina</td>
                        <td>
                          <input type="number" name="" value="">
                        </td>
                    </tr>
                    <tr>
						<td>

						</td>
                        <td>Colores 12P Normal</td>
                        <td>7778854185792</td>
						<td>$59</td>
                        <td>80</td>
                        <td>$45</td>
                        <td>Oficina</td>
                        <td>
                          <input type="number" name="" value="">
                        </td>
                    </tr>
					<tr>
						<td>

						</td>
                        <td>Libreta polito</td>
                        <td>6321572020750</td>
						<td>$10</td>
                        <td>6054</td>
                        <td>$5</td>
                        <td>Oficina</td>
                        <td>
                          <input type="number" name="" value="">
                        </td>
                    </tr>
                </tbody>
            </table>
			<div class="clearfix">     <!--numero de productos que asoman de cuantos-->
                <div class="hint-text">Viendo <b>5</b> de <b>25</b> productos</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Principal</a></li>      <!--paginacion-->
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
                </ul>

            </div>
        </div>
    </div>
</body>
</html>
