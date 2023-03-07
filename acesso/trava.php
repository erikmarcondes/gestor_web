<?php
if (strcmp(basename($_SERVER["SCRIPT_NAME"]), basename(__FILE__)) === 0){
	header("location: ../conexao/desconectar.php");
	die();
	exit;
}