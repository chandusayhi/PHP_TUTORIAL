<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'employeecons.inc';
        // put your code here
        $emp1=new Employers("chandrakant",33,"2021-08-10");
        
        echo $emp1->Name;
        ?>
    </body>
</html>
