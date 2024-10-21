<?php
    require_once'models/dashModel.php';
    class DashController{
        public function nombreInscrit(){
            $dashModel = new DashModel();
            $totalInscription = $dashModel->nombreInscrit();
            return $totalInscription;
        }
        public function nombreClasse(){
            $dashModel = new DashModel();
            $totalClasse = $dashModel->nombreClasse();
            return $totalClasse;
        }
        public function showDash(){
            $totalInscription = $this->nombreInscrit();
            $totalClasse = $this->nombreClasse();
            require_once("views/dash/dash.php");
        }
    }
