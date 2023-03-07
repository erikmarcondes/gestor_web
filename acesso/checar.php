<?php
//Verifica se usuário existe.
$sqlusua = "SELECT * FROM usuarios WHERE estabelecimento = '$estabelecimento' AND utilizador = '$utilizador' AND chave = '$chave' ORDER BY utilizador DESC";
$resusua = mysqli_query($conexao, $sqlusua);
if (!$resusua){
	//Consulta não pôde ser efetuada!
	mysqli_free_result($resusua);
	mysqli_close($conexao);
	if (file_exists("../index.php")){header("location:../index.php");}
	if (file_exists("index.php")){header("location:index.php");}
	die();
	exit;
}
$regusua = mysqli_num_rows($resusua);
if ($regusua == 0){
	//Usuário não localizado!
	mysqli_free_result($resusua);
	mysqli_close($conexao);
	if (file_exists("../usuario.php")){header("location:../usuario.php");}
	if (file_exists("usuario.php")){header("location:usuario.php");}
	die();
	exit;
} else {
	//Usuário existe! Carrega suas permissões de acesso.
	while ($linha = mysqli_fetch_array($resusua)){
		$consultas_cadastro = $linha["consultas_cadastro"];
		$consultas_relatorios = $linha["consultas_relatorios"];
		$usuarios_cadastro = $linha["usuarios_cadastro"];
		$usuarios_relatorios = $linha["usuarios_relatorios"];
	}
	mysqli_free_result($resusua);
}