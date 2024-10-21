<?php
    require_once "database/database.php";
    class DashModel{
        private  function connexion(){
            $database = new Database();
            $db = $database -> connect();
            return $db;
        }
        public function nombreInscrit() {
            $conn = $this->connexion();
            $req = $conn->query("SELECT COUNT(*) as total FROM inscription");
            $result = $req->fetch(PDO::FETCH_ASSOC);
            return $result['total'];
        }
        public function nombreClasse() {
            $conn = $this->connexion();
            $req = $conn->query("SELECT COUNT(*) as total FROM classe");
            $result = $req->fetch(PDO::FETCH_ASSOC);
            return $result['total'];
        }
    }
?>