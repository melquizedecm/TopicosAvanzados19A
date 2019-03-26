        <?php
        function conectar(){
			$DBuser='root';
			$DBpass='';
			$DBserver='localhost';
			$DBdatos='asesorias';
			
			$link=mysql_connect($DBserver, $DBuser, $DBdatos, $DBdatos);
			return link;
        ?>