<?php
	
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {

	//

	$datos = ["Francisco Javier Hernandez Carreno" => "089294930"];

    return $app->json($datos);
});

$app->run();