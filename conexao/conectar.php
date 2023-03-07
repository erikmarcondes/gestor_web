<?php
$servidor = "localhost";
$bancodados = "gestor_web";
$usuario = "root";
$senha = "vertrigo";
$conexao = mysqli_connect($servidor,$usuario,$senha, $bancodados);
if (!$conexao){
	if (exists("../caiu.php")){header("location:../caiu.php");}
	if (exists("caiu.php")){header("location:caiu.php");}
	die();
	exit;
}