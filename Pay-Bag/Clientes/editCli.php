<?php 
	require_once "../Model/Cliente.php";
	//require_once "../model/Municipios.php";
	$id = $_GET["id"];
	$cliente = new Cliente();
	$clienteId = $cliente->find($id); 
	//$municipio = new Municipios();
	//$listaClientes = $cliente->all();  
    require_once "../Views/partials/vHeaderAll.php";
    require_once "../Views/Clientes/vEditCli.php";
    require_once "../Views/partials/vFooter.php";
?>