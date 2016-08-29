<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\Controller;

class EnderecoController extends Controller
{
        
    
    
    public function showForm(){
        
        return view('forms.endereco');
    }
    
    public function index(){
        return view('testes');
    }
}
