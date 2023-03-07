<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SISTEMA</title>
	<link rel="icon" href="imagens/icone/Icone.ico">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body>
<?php
	ob_start();
	//Mostra erros na página.
	ini_set('display_errors', true);
	error_reporting(E_ALL|E_STRICT);
	//Carrega informações de acesso.
	require_once("acesso/carregar.php");
	//Conecta com o banco de dados.
	require_once("conexao/conectar.php");
	//Verifica permissões de acesso.
	require_once("acesso/checar.php");
	//Carrega o menu geral do sistema.
	require_once("cardapio/cardapio1.php");
	//Fecha conexão.
	require_once("conexao/desconectar.php");
	ob_end_flush();
?>
</body>
</html>