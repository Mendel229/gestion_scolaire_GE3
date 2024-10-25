<?php
    require_once "database/database.php";
    class YearModel{
        private  function connexion(){
            $database = new Database();
            $db = $database -> connect();
            return $db;
        }
        public function addYear($year){
            $conn = $this->connexion();
            $req = $conn -> prepare("INSERT INTO anne_sco(annee) VALUES (?)");
            $req -> execute(array($year));
        }
        public function verifyYear($year){
            $conn = $this->connexion();
            $req = $conn -> prepare("SELECT * FROM anne_sco WHERE annee=?");
            $req -> execute(array($year));
            return $req;
        }
    }
?>