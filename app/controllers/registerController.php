<?php
require_once __DIR__ . "/../core/Controller.php";
class register extends Controller
{
public function index(){
    $data =[
        "title"=>"Rent-Drive | Register-Page"
    ];

    $this->view("register",$data);
}
}