<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'inhertinace.inc';
        $emp1=new EmployersIn();
        $emp1->Name="chandrakant";
        $emp1->Age=33;
        $emp1->Models="BMW";
        $emp1->Year=2015;
        echo print_r($emp1->Getowners());
        ?>
    </body>
</html>
