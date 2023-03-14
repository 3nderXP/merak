<?php

namespace App\Classes\Databases;

class MySQL{

    private static $pdo;

    public static function Connect(){

        try{

            // host: localhost
            // host db: u936408583_infinity
            // host user: u936408583_root
            // host password: 2021Multimarket

            self::$pdo = new \PDO("mysql:host=localhost;dbname={null};charset=utf8mb4", "root", "");
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$pdo->exec("SET lc_time_names = 'pt_BR'");

            return self::$pdo;

        } catch (\PDOException $error) {

            die("Ocorreu um erro inésperado! Erro: ".$error->getMessage());

        }


    }

}