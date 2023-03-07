<?php
//Desconecta do Banco de Dados.
$conexao = null;
//Limpa as Variaveis da Sessão.
$_SESSION = array();
//Apaga os Cookies da Sessão.
if (ini_get("session.use_cookies"))
{
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000,
	$params["path"], $params["domain"],
	$params["secure"], $params["httponly"]);
}
//Destrói a Sessão.
session_destroy();
//Volta ao Login.
header("location: ../index.php");
die();
exit;
?>