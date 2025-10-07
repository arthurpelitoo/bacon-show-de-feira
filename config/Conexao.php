<?php

    class Conexao {
        private static $host = "localhost";
        private static $usuario = "user";
        private static $senha = "@senha123";
        private static $banco = "bacon";

        public static function conectar(){
            try{
                $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$banco . ";charset=utf8mb4";

                return new PDO($dsn, self::$usuario, self::$senha);
                echo 'Conexão bem-sucedida!';
            } catch(PDOException $e) {
                die("Erro ao conectar: {$e->getMessage()}");
            }
        }
    }