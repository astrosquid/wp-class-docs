<?php 
    
    $hostname = $IP;
    $username = "astrosquid";
    $password = "";
    $dbname = "test";
    
    ///connection to the database
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    $id = $_GET['id'];
    
    $sql = "delete from exercises where id = $id;";
    print($sql);
    mysqli_query($conn, $sql);
    
    header("Location: exercises.php");
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
    </body>
</html>