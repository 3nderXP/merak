<?php

namespace App\Controller\Components;

use App\Utils\View;

class Head {

    public static function render($params = []) {

        $componentView = "components/head";
        $componentVars = [
            "lang" => isset($params["lang"]) ? $params["lang"] : SITE_LANG,
            "charset" => isset($params["charset"]) ? $params["charset"] : SITE_CHARSET,
            "urlBase" => URL_BASE,
            "siteName" => isset($params["siteName"]) ? $params["siteName"] : SITE_NAME,
            "title" => isset($params["title"]) ? $params["title"] : SITE_NAME,
            "links" => isset($params["links"]) ? $params["links"] : null,
            "scripts" => isset($params["scripts"]) ? $params["scripts"] : null,
        ];

        return View::render($componentView, $componentVars);

    }

}