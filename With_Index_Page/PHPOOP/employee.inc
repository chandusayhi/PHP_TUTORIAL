<?php


class Employers{
    public $Name;
    public $Age;
    public $DateBirth;
    private $CreditCard;
   
    function SetCreditCard($credit){
        //check vaild bank
        $this->CreditCard =$credit;       
    }
    function GetCreditCard(){
        //check vaild bank
       return( $this->CreditCard);       
    }
    
     
}
