<?php 
    
    $hostname = $IP;
    $username = "astrosquid";
    $password = "";
    $dbname = "test";
    
    ///connection to the database
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    $id = $_GET['id'];
    
    $sql = "delete from foods where id = $id;";
    print($sql);
    mysqli_query($conn, $sql);
    
    header("Location: foods.php");
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
    </body>
</html>