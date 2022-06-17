<?php
Class Wallets extends Controller{
function index(){
    // $mainmodel = $this->loadmodel("mainmodel");
    // show($mainmodel);

  $this->view("wallets"); 
}
public function coinpayments(){
    $this->view("coinpayments"); 
}
public function createtransaction(){
  $walletmodel = $this->model("walletsmodel");
  $walletmodel->createtransaction();
}
}