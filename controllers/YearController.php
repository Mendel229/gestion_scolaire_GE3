<?php
    require_once'models/yearModel.php';

    class YearController{
        public function addYear(){
            $bdd = new YearModel();
            if(isset($_POST["btn"])){
                $req1 = $bdd -> verifyYear($_POST["year"]);
                if ($req1->rowCount() == 0){
                    if (preg_match('/^\d{4}-\d{4}$/', $_POST["year"])){
                        $req2 = $bdd -> addYear($_POST["year"]);
                    }else{
                        header('location:index.php?controller=Year&action=addYear&erreur_format=1');
                    }
                }else{
                    header('location:index.php?controller=Year&action=addYear&erreur_doublon=1');
                }
            }
            require"views/year/addYear.php";
        }
    }