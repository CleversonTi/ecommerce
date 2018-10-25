<?php 

require_once("vendor/autoload.php");
use \Slim\Slim;
use \hcode\Page;
use \hcode\PageAdmim;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();
	$page->setTpl("index");

});

$app->get('/admim/', function() {
    
	$page = new PageAdmim();
	$page->setTpl("index");

});

$app->run();

 ?>