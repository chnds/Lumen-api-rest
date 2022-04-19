<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use Laravel\Lumen\Routing\Controller as BaseController;

class GuzzleController extends BaseController
{

    public function postRequest()
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('POST', 'https://piloto-iss.curitiba.pr.gov.br/ISSObrasWS//api/Nfe/Teste', [
            'form_params' => [
                'title' => 'Post 1',
            ]
        ]);
        $response = $response->getBody()->getContents();
        echo '<pre>';
        print_r($response);
    }

    public function getRequest()
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('https://api.github.com/users/chnds');
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
    }
}
