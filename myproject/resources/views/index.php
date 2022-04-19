<?php
    require '../vendor/autoload.php';

    $client = new GuzzleHttp\Client();

    $resposta = $client->request(
        'GET', //Type
        'https://api.github.com/users/chnds', //URI da API
    );

    //echo $resposta->getStatusCode(); 
    $dados = json_decode($resposta->getBody());

    echo '<strong>Usuário: </strong>' . $dados->login. '<br/>';
    echo '<strong>Nome: </strong>' . $dados->name. '<br/>';
    echo '<strong>Bio: </strong>' . $dados->bio. '<br/>';
?>