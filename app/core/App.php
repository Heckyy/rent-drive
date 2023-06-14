<?php

class App
{

    public $method = "index";
    public $controller = "home";
    public $params = [];
    public function __construct()
    {

        $url = $_GET['url'];

        // Explode url in to array
        $explode_url = explode("/", $url);

        // Get controller
        $controller = $explode_url[0];

        if ($controller == "api") {
            // get method 

            $path_version = $explode_url[1];
            $this->controller = $explode_url[2];
            if (!empty($explode_url['3'])) {

                $this->method = $explode_url[3];
            }

            require_once "app/controllers/api/carController.php";
            $this->controller = new $this->controller();
            call_user_func_array([$this->controller, $this->method], $this->params);
        } else {
            if (!empty($explode_url[0])) {
                $this->controller = $explode_url[0];
            }
            if (!empty($explode_url[1])) {
                $this->method = $explode_url[1];
            }
            require_once("app/controllers/" . $this->controller . "Controller.php");
            $this->controller = new $this->controller();

            if(!empty($explode_url)){
                $this->params = array_values($explode_url);
            }
            call_user_func_array([$this->controller, $this->method], $this->params);
        }
    }
}
