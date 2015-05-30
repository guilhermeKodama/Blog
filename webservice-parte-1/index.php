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

  echo '{"products":["produto1","produto2"]}';
}

function insertProduct(){

  echo '{"result":"Inserido com sucesso"}';
}

function updateProduct(){

  echo '{"result":"Atualizado com sucesso"}';
}

function removeProduct(){

  echo '{"result":"Removido com sucesso"}';
}


