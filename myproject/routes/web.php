<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//Guzzle routes

$router->post('/guzle/post','GuzzleController@postRequest');
$router->get('/guzzle/get','GuzzleController@getRequest');

// Armazenamento e leitura de requisições.

$router->post('store','PostController@store');
$router->get('get','PostController@get');


//Routas XML

$router->get("/xml/ler", function(){
    return view("ler-xml");
 });

$router->get("/xml/gerar", function(){
    return view("gerar-xml");
 });
 
$router->group(['prefix' => 'courses'], function ()  use($router){
    $router->get('/', 'CourseController@index');
    $router->get('/{course}', 'CourseController@show');
    $router->post('/', 'CourseController@store');
    $router->put('/{course}', 'CourseController@update');
    $router->delete('/{course}', 'CourseControllere@destroy');
});





 //Routas NF-S

/*  $router->post('/testar','PostController@TestCertificate');
 $router->post('/consultar','PostController@Consultar');
 $router->post('/cancelar','PostController@Cancelar');
 $router->post('/finalizar','PostController@Finalizar');
 $router->post('/criar','PostController@Criar');
 $router->post('/vincular','PostController@VincularProdutos');
 $router->post('/consultar','PostController@ConsultarProdutoAquisicao');
 $router->post('/dados','PostController@Dados');
 $router->post('/receber','PostController@ReceberArquivoNFe'); */



