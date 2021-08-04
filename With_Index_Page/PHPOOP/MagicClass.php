<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'magicmethos.inc';
        $magic=new MagicClass();
    $magic->Name="chandrakant";
    $magic->Age=33;
    
    echo   $magic->Name;
    echo '<br/>';	
     echo   $magic->Age;
        ?>
    </body>
</html>
