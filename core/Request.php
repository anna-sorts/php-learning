<?php 

class Request
{
	public static function uri()
	{
		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
		
		//$servidor = implode(' /// ', $_SERVER);
		//$peticionUri = $_SERVER['REQUEST_URI'];
		//$pathUrl = PHP_URL_PATH;
		//$despuesDeParse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		//$despuesDeTrim = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
		//$chivato = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
		//return 'servidor: ' . $servidor . '.';
		//return 'peticion uri: ' . $peticionUri . ' El path es: ' . $pathUrl . ' Cuando hacemos el parse_url queda: ' . $despuesDeParse . '. Cuando hacemos el trim queda: ' . $despuesDeTrim . '.';
	}

	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}