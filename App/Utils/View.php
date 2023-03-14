<?php

namespace App\Utils;

class View{

    private static function getViewContent($view){

        $file = null;

        if(is_dir(__DIR__."/../View/".$view)){

            $file = __DIR__."/../View/".$view."/index.html";

        } else {

            $file = __DIR__."/../View/".$view.".html";

        }


        return file_exists($file) ? file_get_contents($file) : null;

    }

    public static function render($view, Array $vars = []){

        $viewContent = self::getViewContent($view);

        $varsKeys = array_keys($vars);
        
        $varsKeys = array_map(function($key){

            return "{{".$key."}}";

        }, $varsKeys);

        return str_replace($varsKeys, $vars, $viewContent);

    }

}