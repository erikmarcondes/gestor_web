<?php
require_once("../funcoes/funcoes.php");
if (sizeof($_POST) !== 0){
	//Pega os dados enviados pelo usuário.
	$estabelecimento = addSlashes($_POST["txtEstabelecimento"]);
	$usuario = addSlashes($_POST["txtUsuario"]);
	$senha = addSlashes($_POST["txtSenha"]);
	//Trata os dados recebidos.
	$estabelecimento = permiteTextoENumeros($estabelecimento);
	$usuario = permiteTextoENumeros($usuario);
	$senha = permiteTextoENumeros($senha);
	//Abre a sessão e grava dados de login nela.
	session_start();
	$_SESSION["estabelecimento"] = $estabelecimento;
	$_SESSION["utilizador"] = $usuario;
	$_SESSION["chave"] = $senha;
	header("location:../menu.php");
	die();
	exit;
}else{
	header("location:../index.php");
	die();
	exit;
}
?>