<?php 
	
	require 'core/bootstrap.php';
		
	//$router = new Router;

	//require 'routes.php';
	//die(var_dump($app));
	
		
	require Router::load('routes.php')
		->direct(Request::uri());
		//->direct(Request::uri(), Request::method());

	
	
	
 ?>