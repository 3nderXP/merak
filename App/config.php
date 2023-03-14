<?php

session_start();

// URL CONFIG

define("URL_PROTOCOL", isset($_SERVER["HTTPS"]) ? "https://" : "http://");
define("URL_DOMAIN", $_SERVER["SERVER_NAME"]);
define("URL_ROOT", "/merak");
define("URL_BASE", URL_PROTOCOL.URL_DOMAIN.URL_ROOT);

// SITE CONFIG

define("SITE_LANG", "pt-BR");
define("SITE_CHARSET", "UTF-8");
define("SITE_NAME", "Merak");
define("SITE_DESCRIPTION", "lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et ");
define("SITE_THEME", "#ffffff");

function lastElement(Array $array){

    return end($array);

}