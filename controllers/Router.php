<?php

class Router
{
    private $_ctrl;
    private $_view;

    public function routeReq()
    {
        try {
            // CHARGEMENT AUTOMATIQUE DES CLASSES
            spl_autoload_register(function ($class) {
                require_once('entities/' . $class . '.php');;
            });
            $url = '';

            if (isset($_GET['url'])) {
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = "Controller".$controller;
                $controllerFile = "controllers/".$controllerClass.".php";

                if(file_exists($controllerFile)){
                    require_once($controllerFile);
                    $this ->_ctrl = new $controllerClass($url);
                }
                else {
                    throw new Exception('404 Not found');
                }
            }
            else {
            // GET HOME URL
                require_once('controllers/ControllerClaim.php');
                $this ->_ctrl = new ControllerClaim($url);
            }
        } catch (Exception $e) { // GESTION DES ERREURS
            $errorMessage = $e -> getMessage();
            require_once('views/viewError.php');
        }
    }
}
