<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);
$app->response()->header("Content-Type", "application/json");

$app->get('/', function() {
	$db = new Hcode\DB\Sql();
	$result = $db->select("SELECT * FROM tb_users");
	echo json_encode($result);
});

$app->run();
