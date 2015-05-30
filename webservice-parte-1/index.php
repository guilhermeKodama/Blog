<?php
require '../Slim/Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim(array(
    'debug' => true
));
$app->response()->header('Content-Type', 'application/json;charset=utf-8');

$app->get('/', function () {
  echo "SlimProdutos ";
});

$app->get('/products','selectProducts');
$app->post('/product','insertProduct');
$app->put('/product','updateProduct');
$app->delete('/product','removeProduct');

$app->run();

function getConn()
{
 return new PDO('mysql:host=localhost;dbname=webservice_demo',
  'root',
  'multi@media2',
  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
  
  );
}

function selectProducts(){

  echo "Selecionar produtos";
}

function insertProduct(){

  echo "Inserir produto";
}

function updateProduct(){

  echo "Atualizar produto";
}

function removeProduct(){

  echo "Remover produto";
}


