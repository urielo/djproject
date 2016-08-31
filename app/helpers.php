<?php

if(! function_exists('theme')){
    function theme($path){
        $config = app('config')->get('cnpj.theme');

        return url($config['folder'].'/'.$config['active'].'/assests/'.$path);
    }

}if (!function_exists('getDataReady')):

    function getDataReady($data)
    {
        $search = [
            '/',
            '.',
            '-',
            ',',
            '\\',
            '(',
            ')',
            ' ',
        ];

        return str_replace($search, '', $data);


    }

endif;

if (!function_exists('getDateFormat')):

    function getDateFormat($date, $type = null)
    {
        switch ($type) {

            case 'valcartao':
                $validade = '01-' . str_replace('/', "-", $date);
                return date('Ym', strtotime($validade));
                break;
            case 'nascimento':
                $validade = str_replace('/', "-", $date);
                return date('Ymd', strtotime($validade));
            default:
                return $validade = str_replace('/', "-", $date);

        }


    }

endif;