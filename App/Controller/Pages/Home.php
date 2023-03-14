<?php

namespace App\Controller\Pages;

use App\Controller\Components\Head;
use App\Utils\View;

class Home {

    public static function render($params = []) {

        $pageView = "pages/home";
        $pageVars = [
            "head" => Head::render([
                "links" => implode("\r\n", [
                    View::render("components/head/link", [
                        "rel" => "stylesheet",
                        "href" => URL_BASE."/assets/css/global.css"
                    ]),
                ])
            ]),
            "urlBase" => URL_BASE,
        ];

        return View::render($pageView, $pageVars);

    }

}