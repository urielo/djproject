<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Models\Cliente;

use App\Http\Requests;
use App\Http\Controllers\Backend\Controller;

class ClienteController extends Controller
{

    /**
     * @param array $middleware
     */
    public function cadastro()
    {
        return view('cliente.cadastro');
    }
    public function showForm()
    {

        return view('forms.contato');
    }

    public function index()
    {

        $clientes = Cliente::all();
        return view('home',compact('clientes'));
    }
}
