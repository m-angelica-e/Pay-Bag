<?php
	require_once "../Model/Cliente.php";

	$cliente = new Cliente();
	$cliente->cedula = $_POST["cedula"];
	$cliente->nombre = $_POST["nombre"];
	$cliente->apellido = $_POST["apellido"];
	$cliente->direccion = $_POST["direccion"];
	$cliente->telefono = $_POST["telefono"];
	//$cliente->rutaId = $_POST["ruta"];

	if($cliente->save() > 0)
	{
		echo ("El Cliente se creó correctamente");
		header("location:indexCli.php?accion=1");
	}
	else
	{
		echo ("El Cliente NO se Creó");
		header("location:indexCli.php?accion=2");
	}
?>