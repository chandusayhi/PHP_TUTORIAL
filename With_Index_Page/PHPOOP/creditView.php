<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
 require 'empcredit.inc'; // cannot
 $empcredit=new EmployersCredit();
       $empcredit->Name="chandrakant hatti";
        $empcredit->CardID="37463746734";
         $empcredit->exp_Date="2021-08-10";
          $empcredit->code=232;
          
          echo "Credit:". $empcredit->CardID;
        ?>
    </body>
</html>
