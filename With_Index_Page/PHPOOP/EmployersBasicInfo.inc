<?php


require 'EmployersBasic.inc'; 
class EmployersBasicInfo extends EmployersBasic {
    
    public $DateLeave;
    
    function GetAge(){
        return $this->Age;
    }
     function SetAge($age){
     $this->Age=$age;
    }
}
