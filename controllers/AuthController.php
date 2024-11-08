<?php
    require_once'models/authModel.php';
    class AuthController{
        public function login(){
            $bdd = new AuthModel();
            if(isset($_POST["btn"])){
                $req1 = $bdd -> verifyMail($_POST["email_user"]);
                if($req1->rowCount() == 1){
                    $donnee = $req1->fetch(PDO::FETCH_ASSOC);
                    $mdp_base = $donnee["mdp_user"];
                    if(password_verify($_POST["password_user"], $mdp_base) ){
                        $_SESSION["id"]=$donnee["id_user"];
                        $_SESSION["nom"]=$donnee["nom"];
                        $_SESSION["prenom"]=$donnee["prenom"];
                        $_SESSION["type"]=$donnee["type_user"];
                        if($donnee["first_login"] == 1){
                            header("location:index.php?controller=Dash&action=showDash");
                        }else{
                            header("location:index.php?controller=Auth&action=upMdp");
                        }
                    }else {
                        header("location:index.php?controller=Auth&action=login&erreur_mdp=1");
                    }
                }else{
                    header("location:index.php?controller=Auth&action=login&erreur_mail=1");
                }
            }

            require"views/auth/login.php";
        }
        
        public function upMdp(){
            $bdd = new AuthModel();
            if(isset($_POST["btn"])){
                if($_POST["upMdp"] == $_POST["upMdp1"]){
                    $mdp_hash = password_hash($_POST["upMdp"], PASSWORD_DEFAULT);
                    $pre=1;
                    $req2 = $bdd -> upMdp($mdp_hash, $pre,$_SESSION["id"]);
                    header("location:index.php?controller=Dash&action=showDash");
                }else{
                    header("location:index.php?controller=Auth&action=upMdp&mdp_non_semblable");
                }
            }
            require"views/auth/upMdp.php";
        }

        public function logout(){
            session_destroy();
            header("location:index.php?controller=Auth&action=login");
            exit();
        }
        public function addUser(){
            $bdd = new AuthModel();
            if(isset($_POST["btn"])){
                $req1 = $bdd -> verifyMail($_POST["mail_user"]);
                if($req1->rowCount() == 0){
                    if ($_POST["pw1"] == $_POST["pw2"]){
                        $mdp_hash = password_hash($_POST["pw1"], PASSWORD_DEFAULT);
                        $req2 = $bdd -> addUser($_POST["nom"], $_POST["prenom"], $_POST["mail_user"], $_POST["type"], $mdp_hash);
                        header('location:index.php?controller=Auth&action=login&success=1');
                    }else{
                        header('location:index.php?controller=Auth&action=signUp&erreurMdp=1');
                    }
                }else{
                    header('location:index.php?controller=Auth&action=signUp&erreurDoublon=1');
                }
            }

            require_once("views/auth/addUser.php");
        }
    }
