
<?php
// 1- connect to db
$host="localhost";
$user="root";
$password="12345";
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
         <form action='' method='POST'>

User Name:<input type='text' name='username'>
<input type='submit' name='submit' value='Search'>
</form> 
        <?php
        //2- read from database
        if (isset($_POST['submit'])) { 
 $usename=$_POST['username'];
        $query="select * from logins where username like '%" . $usename . "%'";
        $result=  mysqli_query($connect, $query);
        if(! $result){
            die("Error in query");
        }
        }
        ?>
        <ul>
        <?php
        // 3- write or display data
         if (isset($_POST['submit'])) { 
        while($row=  mysqli_fetch_assoc($result)){
           
            echo '<li>id:'.$row['id']  .', username:' .$row['username'].', password:' .$row['password'] ."</li>";
        }
         }
        ?>
        </ul>
        <?php
        // 4 clear
         if (isset($_POST['submit'])) { 
        mysqli_free_result($result);
         }
        ?>
        
    </body>
</html>
<?php
//5 close connection
mysqli_close($connect);
?>
