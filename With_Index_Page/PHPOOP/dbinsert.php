
<?php

$host="localhost";
$user="root";
$password="";
$database="admins";
$connect=  mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno()){
    die("cannot connect to database field:". mysqli_connect_error());
    
}
 else {
    echo 'Database is connected';  
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //2- insert from database
        
          // button click  
if (isset($_POST['submit'])) { 
 $usename=$_POST['username'];
  $password=$_POST['password'];
   $query="insert into logins (username,password)values('". $usename . "','". $password . "')";
        $result=  mysqli_query($connect, $query);
        if( $result){
            echo '</br>Data is inerted';
        } 
 else {
die("Database query failed. " . mysqli_error($connection));
 }
}
       
        ?>
         
        
       <form action='' method='POST'>

User Name:<input type='text' name='username'>
</br>
Password:<input type='password' name='password'>
</br>
<input type='submit' name='submit' value='insert'>
</form>  
        <a href="dbread.php">View Data</a>
    </body>
</html>
<?php
//5 close connection
mysqli_close($connect);
?>
