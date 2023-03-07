<?php
$servidor = "localhost";
$banco = "gestor";
$usuario = "root";
$senha = "vertrigo";
try {
	$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo 'Erro: ' . $e->getMessage();
	die();
	exit;
}