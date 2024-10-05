<?php
    $controller = isset($_GET["controller"])? $_GET["controller"]:"Auth";
    $action = $_GET["action"];
    $filecontroller = "controllers/{$controller}Controller.php";
    if(file_exists($filecontroller)) {
        require_once $filecontroller;
        $controllerClass = ucfirst($controller)."Controller";
        $controllerObjet = new $controllerClass();

        if ($controller=="Auth") {
            if ($action== "login") {
                $controllerObjet->login();
            }
        }
    }else {
        echo"Le controller n'existe pas";
    }
?>