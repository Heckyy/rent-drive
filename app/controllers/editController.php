<?php
require_once __DIR__ . "/../core/Controller.php";
class edit extends Controller{
    public function index(){
        $data = [
            "title" => "Edit Reservation | Rent-Drive"
        ];
        $this->view("header",$data);
        $this->view("edit",null);


    }
}