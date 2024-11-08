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
            } else if ($action== "signUp") {
                $controllerObjet->AddUser();
            }else if ($action== "logout") {
                $controllerObjet->logout();
            }else if ($action== "upMdp") {
                $controllerObjet->upMdp();
            }
        } else if ($controller== "Dash") {
            if ($action== "showDash") {
                $controllerObjet->showDash();
            }
        } else if ($controller== "Year") {
            if ($action== "addYear") {
                $controllerObjet->addYear();
            }
    }else {
        echo"Le controller n'existe pas";
    }
}
?>