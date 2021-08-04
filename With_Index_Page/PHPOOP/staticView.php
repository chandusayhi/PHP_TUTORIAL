<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       require 'staticf.inc';
       EmployeeSalary::$rate=7.4;
       //1
       $emp1=new EmployeeSalary();
       $emp1->name="chandrakant";
       $emp1->salary=20000;
        echo "name:". $emp1->name . "<br/>". $emp1->salary*EmployeeSalary::$rate. "<br/>" ;
      
       //1
       $emp2=new EmployeeSalary();
       $emp2->name="lohit";
       $emp2->salary=12000;
         echo "name:". $emp2->name . "<br/>". $emp2->salary*EmployeeSalary::$rate . "<br/>";
      
        //1
       $emp3=new EmployeeSalary();
       $emp3->name="ramesh";
       $emp3->salary=12233;
          echo "name:". $emp3->name . "<br/>". $emp3->salary*EmployeeSalary::$rate ;
      
      
        ?>
    </body>
</html> 	 		
