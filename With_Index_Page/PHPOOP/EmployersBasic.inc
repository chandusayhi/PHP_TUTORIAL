<?php



class EmployersBasic{
    public $Name; //inh
    protected $Age; //inh
     private $CreditCard; //not in
   
     public function SetCreditCard($credit){  ////inh
        //check vaild bank
        $this->CreditCard =$credit;       
    }
  
}
