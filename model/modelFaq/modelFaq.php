<?php

    class Database{
        private static $Host = "localhost";
        private static $Name ="APPinfo";
        private static $User = "root";
        private static $UserPassword ="";
        private static $connection = null;

        public static function connect(){
            try{
                self::$connection = new PDO("mysql:host" . self::$Host . "dbname=" . self::$Name,self::$User,self::$UserPassword);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
            return self::$connection;
        }

        public static function disconnect(){
            self::$connection = null;
        }

        public static function listeCategorie($BDD){
            $statement=$BDD->prepare('SELECT categorie FROM test.faq');
            $statement->execute();
            $resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
            $liste = array_unique($resultat);
        }

    }

?>