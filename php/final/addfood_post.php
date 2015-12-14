<?php
    $hostname = $IP;
    $username = "astrosquid";
    $password = "";
    $dbname = "test";
    
    ///connection to the database
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    //echo "Connected to MySQL<br>";
    
    $email = $_POST['newfood'];
    $pass = $_POST['newcals'];
    echo "greetings";
    echo "$email";
    $sql = "INSERT INTO foods (food, calories)" . " VALUES ( \"$email\" , $pass ) ;";
    if (mysqli_query($conn, $sql)) {
        header("Location: foods.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }  
?>

<html>
    <head>
        <title>Entering...</title>
    </head>
    <body>
    
    </body>
</html>