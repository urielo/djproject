<?php

if(! function_exists('theme')){
    function theme($path){
        $config = app('config')->get('cnpj.theme');

        return url($config['folder'].'/'.$config['active'].'/assests/'.$path);
    }

}