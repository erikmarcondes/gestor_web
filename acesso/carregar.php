<?php
ob_start();
session_start();
$entrar = 0;
if (isset($_SESSION["estabelecimento"])){
	$estabelecimento = $_SESSION["estabelecimento"];
	$entrar++;
}
if (isset($_SESSION["utilizador"])){
	$utilizador = $_SESSION["utilizador"];
	$entrar++;
}
if (isset($_SESSION["chave"])){
	$chave = $_SESSION["chave"];
	$entrar++;
}
if ($entrar !== 3){
	//Não carregou os dados. Sai do sistema!
	header("location: ../index.php");
	die();
	exit;
}
ob_end_flush();