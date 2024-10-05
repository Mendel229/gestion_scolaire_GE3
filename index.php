<?php
    require_once'config/config.php';
    require_once 'database/database.php';
    
    $session_duration = 100000;
    session_set_cookie_params($session_duration); // déconnexion après un temps d'innactiviter
    session_start();
    if (!isset($_SESSION["id"])){
        if ($_GET["controller"]!="Auth" && $_GET["action"]!="connexion") {
            header('location:index.php?controller=Auth&action=login');
        }
    }
    require_once 'routes.php';

?>