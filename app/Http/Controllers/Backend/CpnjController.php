<?php

namespace App\Http\Controllers\Backend;

use App\Models\Cliente;
use App\Models\Contato;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\Controller;

class CpnjController extends Controller
{
    public function getDados($cnpj)
    {

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

    public function create(Request $request)
    {

//        return $request->all();

        $cliente = new Cliente();
        $cliente->nome = strtoupper($request->nome_cliente);
        $cliente->save();

        if (isset($request->cnpj)) {

            foreach ($request->cnpj as $cnpj) {
                $cliente->cnpjs()->create([
                    'inscricao' => getDataReady($cnpj['cnpj']),
                    'dt_abertura' => getDateFormat($cnpj['dt_abertura'], 'nascimento'),
                    'rz_social' => strtoupper($cnpj['rz_social']),
                    'fantasia' => strtoupper($cnpj['fantasia']),
                    'cod_atv_principal' => $cnpj['cod_atv_principal'],
                    'cod_atv_secundarias' => $cnpj['cod_atv_secundarias'],
                    'natu_juridica' => $cnpj['natu_juridica'],
                    'logradouro' => $cnpj['logradouro'],
                    'numero' => $cnpj['numero'],
                    'complemento' => $cnpj['complemento'],
                    'cep' => getDataReady($cnpj['cep']),
                    'bairro' => $cnpj['bairro'],
                    'municipio' => $cnpj['municipio'],
                    'uf' => $cnpj['uf'],
                    'email' => $cnpj['email'],
                    'tel' => $cnpj['tel'],
                    'sit_cadastral' => $cnpj['sit_cadastral'],
                    'dt_sit_cadastral' => $cnpj['dt_sit_cadastral'],
                    'mt_sit_cadastral' => $cnpj['mt_sit_cadastral'],
                    'st_especial' => $cnpj['st_especial'],
                    'dt_st_especial' => $cnpj['dt_st_especial'],
                ]);

            }
        }
        if (isset($request->endereco)) {

            foreach ($request->endereco as $endereco) {
                $cliente->enderecos()->create([
                    'cep' => getDataReady($endereco["cep"]),
                    'logradouro' => $endereco["logradouro"],
                    'numero' => $endereco["numero"],
                    'complemento' => $endereco["complemento"],
                    'bairro' => $endereco["bairro"],
                    'cidade' => $endereco["municipio"],
                    'estado' => $endereco["uf"],

                ]);
            }
        }

        if ($request->contato) {
            foreach ($request->contato as $contatos) {
                $contato = new Contato();
                $contato->nome_contato = $contatos['nome_contato'];
                $contato->departamento = $contatos['departamento'];
                $contato->save();

                foreach ($contatos['telefone'] as $telefone) {
                    $contato->telefones()->create(
                        [
                            'ddd' => $telefone['ddd'],
                            'numero' => getDataReady($telefone['numero']),
                            'tipo' => $telefone['tipo'],
                        ]
                    );
                }

                foreach ($contatos['email'] as $email) {
                    $contato->emails()->create(
                        ['email' => $email['email'],
                            'tipo' => $email['tipo']]
                    );
                }

                $cliente->contatos()->save($contato);
            }
        }

        return redirect()->route('home')->with('sucesso','Cliente cadastrado com sucesso');
//        echo '<pre>';
//        var_dump($request->all());
//        echo '</pre>';
    }

    public function showForm()
    {

        return view('forms.cnpj');
    }

    public function index()
    {
        return view('testes');
    }
}
