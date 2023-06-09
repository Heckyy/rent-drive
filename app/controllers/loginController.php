<?php
require_once __DIR__ . "/../core/Controller.php";
class login extends Controller
{
public function index(){
    $data =[
        "title"=>"Rent-Drive | Login-Page"
    ];

    $this->view("login",$data);

}
}