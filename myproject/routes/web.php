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

$router->get('/', function () use ($router) {
    return 'Primeira API REST com Lumen...';
});

//API
$router->group(['prefix' => 'courses'], function ()  use($router){
    $router->get('/', 'CourseController@index');
    $router->get('/{course}', 'CourseController@show');
    $router->post('/', 'CourseController@store');
    $router->put('/{course}', 'CourseController@update');
    $router->delete('/{course}', 'CourseControllere@destroy');
});

//XML ROUTES

$router->get("/xml/gerar", function(){
    return view("gerar-xml");
 });

 $router->get("/xml/ler", function(){
    return view("ler-xml");
 });

 //NF-E Routes

/*  $router->post('/testar','PostController@TestCertificate');
 $router->post('/consultar','PostController@Consultar');
 $router->post('/cancelar','PostController@Cancelar');
 $router->post('/finalizar','PostController@Finalizar');
 $router->post('/criar','PostController@Criar');
 $router->post('/vincular','PostController@VincularProdutos');
 $router->post('/consultar','PostController@ConsultarProdutoAquisicao');
 $router->post('/dados','PostController@Dados');
 $router->post('/receber','PostController@ReceberArquivoNFe'); */

//Guzzle routes

$router->get('/guzle/post','GuzzleController@postRequest');
$router->get('/guzzle/get','GuzzleController@getRequest');

$router->post('store','PostController@store');
$router->get('get','PostController@get');


