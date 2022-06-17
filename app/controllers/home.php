<?php
Class Home extends Controller{
function index(){
    // $mainmodel = $this->loadmodel("mainmodel");
    // show($mainmodel);

  $this->view("home"); 
}
}