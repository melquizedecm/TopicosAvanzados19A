<?php
require_once '../core/Config.php';

//
//Sourse: Ventas.php
//Description: clase que permite realizar el modelo a la BD
//

class Ventas extends Config{
	public $precio_c;
	public $precio_v;
	public $codigo_b;
	public $existencia;
	private $link;

//en el CONSTRUCT tiene al comienzo dos __
	function __CONSTRUCT(){
		$this->link=parent:: conectar();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM producto");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$gam = new Producto();
			
				$gam->__SET('precio_c', $r->precio_c);
				$gam->__SET('precio_v', $r->precio_v);
				$gam->__SET('codigo_b', $r->codigo_b);
				$gam->__SET('existencia', $r->existencia);

				$result[] = $gam;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM producto WHERE producto = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$gam = new Producto();

			$gam->__SET('precio_c', $r->precio_c);
			$gam->__SET('precio_v', $r->precio_v);
			$gam->__SET('codigo_b', $r->codigo_b);
			$gam->__SET('existencia', $r->existencia);

			return $gam;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM producto WHERE precio_c = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Producto $data)
	{
		try 
		{
			$sql = "UPDATE producto SET 
						precio_v = ?,
						codigo_b  = ?,
						existencia  = ?
				    WHERE precio_c = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('precio_v'), 
					$data->__GET('codigo_b'), 
					$data->__GET('existencia'),
					$data->__GET('precio_c')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Producto $data)
	{

		try 
		{
		$sql = "INSERT INTO producto (precio_c, precio_v, codigo_b, existencia) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('precio_v'), 
				$data->__GET('codigo_b'), 
				$data->__GET('existencia')
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}