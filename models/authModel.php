<?php
    require_once "database/database.php";
    class AuthModel{
        private  function connexion(){
            $database = new Database();
            $db = $database -> connect();
            return $db;
        }
        public function addUser($nom,$prenom,$email_user,$type_user,$mdp_user){
            $conn = $this->connexion();
            $req = $conn -> prepare("INSERT INTO user(nom, prenom,email_user ,type_user,mdp_user) VALUES (?,?,?,?,?)");
            $req -> execute(array($nom,$prenom,$email_user,$type_user,$mdp_user));
        }
        public function verifyMail($email_user){
            $conn = $this->connexion();
            $req = $conn -> prepare("SELECT * FROM user WHERE email_user=?");
            $req -> execute(array($email_user));
            return $req;
        }
    }
?>