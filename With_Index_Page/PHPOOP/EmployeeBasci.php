<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require 'EmployersBasicInfo.inc';
        $basemps=new EmployersBasicInfo();
        $basemps->DateLeave="2015-10-10";
        $basemps->Name="chandrakant";
        $basemps->SetAge(33);
        echo   $basemps->GetAge();
         echo  "<br/>";
         echo $basemps->Name;
        ?>
    </body>
</html>
