<?php
require_once __DIR__ . "/../core/Controller.php";
class book extends Controller{
    public function index(){
        $data = [
            "title" => "Reservation | Rent-Drive"
        ];
        $this->view("header",$data);
        $this->view("book",null);
        $this->view("footer",null);
    }
}