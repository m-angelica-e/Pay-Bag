<?php 
	require_once "Conexion.php";

	class Cliente extends Conexion
	{
		public $id;
		public $cedula;
		public $nombre;
		public $apellido;
		public $direccion;
		public $telefono;
		public $rutaId = 1;

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO clientes VALUES(null, ?, ?, ?, ?, ?, ?)");
			$consulta->bindParam(1, $this->cedula);
			$consulta->bindParam(2, $this->nombre);
			$consulta->bindParam(3, $this->apellido);
			$consulta->bindParam(4, $this->direccion);
			$consulta->bindParam(5, $this->telefono);
			$consulta->bindParam(6, $this->rutaId);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM clientes");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$clientes = $consulta->fetchAll();
			$this->cerrar();
			return $clientes;
		}
	}
?>