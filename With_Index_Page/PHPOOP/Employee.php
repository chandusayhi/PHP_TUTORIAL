<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'employee.inc';
        $emp1=new Employers();
        $emp1->Name="chandrakant";
        $emp1->Age=33;
        $emp1->DateBirth="1986-03-22";
        $emp1->SetCreditCard("12334343434");
        echo "Name:".  $emp1->Name ."<br/>";
         echo "Age:".  $emp1->Age ."<br/>";
          echo "DateBirth:". $emp1->DateBirth."<br/>";
         echo "Crdit:".  $emp1->GetCreditCard() ."<br/>";
        // put your code here
         
         
         /// error not set
          $emp2=new Employers();
           echo "Name:".  $emp2->Name ."<br/>";
         echo "Age:".  $emp2->Age ."<br/>";
          echo "DateBirth:". $emp2->DateBirth."<br/>";
         echo "Crdit:".  $emp2->GetCreditCard() ."<br/>";
        ?>
    </body>
</html>
