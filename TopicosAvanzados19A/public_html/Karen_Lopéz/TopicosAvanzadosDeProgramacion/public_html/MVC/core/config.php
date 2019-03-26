<?php
        function conectar(){
			//parametros para web
			$DBuser='root';
			$DBpass='';
			$DBserver='localhost';
			$DBdatos='asesorias';
			$link=mysqli_connect($DBserver, $DBuser, $DBpass, $DBdatos);
			return $link;
		}
        ?>