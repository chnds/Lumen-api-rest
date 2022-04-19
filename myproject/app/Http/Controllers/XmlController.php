<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class XmlController extends BaseController
{
    public function index()
    {
        return view('gerar-xml');
    }
}
