<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\Controller;

class CpnjController extends Controller
{
    public function getDados($cnpj){
        
        $cnpj = getDataReady($cnpj);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://www.mettric.com.br/consulta/uriel.php?cnpj={$cnpj}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => ""
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
    
    public function create(Request $request){
        echo '<pre>';
        var_dump($request->all());
        echo '</pre>';
    }
    
    public function showForm(){
        
        return view('forms.cnpj');
    }
    
    public function index(){
        return view('testes');
    }
}
