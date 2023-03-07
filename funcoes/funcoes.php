<?php
function ValidaData($data){
	// data é menor que 10
	if ( strlen($data) < 10){
		return false;
	}else{
		// verifica se a data possui
		// a barra (/) de separação
		if(strpos($data, "/") !== FALSE){
			$partes = explode("/", $data);
			// pega o dia da data
			$dia = $partes[0];
			// pega o mês da data
			$mes = $partes[1];
			// prevenindo Notice: Undefined offset: 2
			// caso informe data com uma única barra (/)
			$ano = isset($partes[2]) ? $partes[2] : 0;
			if (strlen($ano) < 4)
			{
				return false;
			} else {
				// verifica se a data é válida
				if (checkdate($mes, $dia, $ano))
				{
					return true;
				} else {
					return false;
				}
			}
		}else{
			return false;
		}
	}
}
function permiteTextoENumeros($string){
	$string = str_replace(".", "", $string);
	$string = str_replace(",", "", $string);
	$string = str_replace("=", "", $string);
	$string = str_replace("-", "", $string);
	$string = str_replace(":", "", $string);
	$string = str_replace("+", "", $string);
	$string = str_replace("*", "", $string);
	$string = str_replace("?", "", $string);
	$string = str_replace("'", "", $string);
	$string = str_replace("&", "", $string);
	$string = str_replace("#", "", $string);
	$string = str_replace("@", "", $string);
	$string = str_replace(";", "", $string);
	$string = str_replace("<", "", $string);
	$string = str_replace(">", "", $string);
	$string = str_replace("\"", "", $string);
	$string = str_replace("\\", "", $string);
	$string = str_replace("\/", "", $string);
	$string = str_replace("(", "", $string);
	$string = str_replace(")", "", $string);
	$string = str_replace("{", "", $string);
	$string = str_replace("}", "", $string);
	$string = trim($string);
	$string = strip_tags($string);
	return $string;
}
function permiteEMail($string){
	$string = str_replace(",", "", $string);
	$string = str_replace("=", "", $string);
	$string = str_replace(":", "", $string);
	$string = str_replace("+", "", $string);
	$string = str_replace("*", "", $string);
	$string = str_replace("?", "", $string);
	$string = str_replace("'", "", $string);
	$string = str_replace("&", "", $string);
	$string = str_replace("#", "", $string);
	$string = str_replace(";", "", $string);
	$string = str_replace("<", "", $string);
	$string = str_replace(">", "", $string);
	$string = str_replace("\"", "", $string);
	$string = str_replace("\\", "", $string);
	$string = str_replace("\/", "", $string);
	$string = str_replace("(", "", $string);
	$string = str_replace(")", "", $string);
	$string = str_replace("{", "", $string);
	$string = str_replace("}", "", $string);
	$string = trim($string);
	$string = strip_tags($string);
	return $string;
}
function permiteNumeros($string){
	$string = preg_replace("/[^0-9]/", "", $string);
	return $string;
}
function elimina_acentos($string){
	$string = str_replace("á", "a", $string);
	$string = str_replace("à", "a", $string);
	$string = str_replace("ã", "a", $string);
	$string = str_replace("â", "a", $string);
	$string = str_replace("é", "e", $string);
	$string = str_replace("ê", "e", $string);
	$string = str_replace("í", "i", $string);
	$string = str_replace("ó", "o", $string);
	$string = str_replace("ô", "o", $string);
	$string = str_replace("õ", "o", $string);
	$string = str_replace("ú", "u", $string);
	$string = str_replace("ü", "u", $string);
	$string = str_replace("ç", "c", $string);
	$string = str_replace("Á", "A", $string);
	$string = str_replace("À", "A", $string);
	$string = str_replace("Ã", "A", $string);
	$string = str_replace("Â", "A", $string);
	$string = str_replace("É", "E", $string);
	$string = str_replace("Ê", "E", $string);
	$string = str_replace("Í", "I", $string);
	$string = str_replace("Ó", "O", $string);
	$string = str_replace("Ô", "O", $string);
	$string = str_replace("Õ", "O", $string);
	$string = str_replace("Ú", "U", $string);
	$string = str_replace("Ü", "U", $string);
	$string = str_replace("Ç", "C", $string);
	return $string;
}
function renomeia_arquivo($string){
	$string = str_replace(" ", "_", $string);
	$string = preg_replace("/[^a-zA-Z0-9_]/", "", $string);
	return $string;
}