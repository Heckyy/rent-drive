<?php
require_once __DIR__ . "/../core/Controller.php";
class home extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Home | Rent-Drive"
        ];
        $this->view("header", $data);
        $this->view("home", $data);
        $this->view("footer", null);
    }
}
