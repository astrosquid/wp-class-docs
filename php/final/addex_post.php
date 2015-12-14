<?php
    $hostname = $IP;
    $username = "astrosquid";
    $password = "";
    $dbname = "test";
    
    ///connection to the database
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    //echo "Connected to MySQL<br>";
    
    $email = $_POST['newex'];
    $pass = $_POST['newreps'];
    echo "greetings";
    echo "$email";
    $sql = "INSERT INTO exercises (exercise, reps)" . " VALUES ( \"$email\" , $pass ) ;";
    if (mysqli_query($conn, $sql)) {
        header("Location: exercises.php");
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