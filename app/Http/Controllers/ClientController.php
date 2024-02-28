<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function index (){

        $tittle = 'Lista de clientes';
        $controllerName = 'clients';
        return view('clients.index', compact('tittle','controllerName'));
    }

    public function create (){

    }

    public function store (){

    }

    public function destroy (){

    }
}
