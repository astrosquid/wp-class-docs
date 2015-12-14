<?php
    $hostname = $IP;
    $username = "astrosquid";
    $password = "";
    $dbname = "test";
    
    ///connection to the database
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    //echo "Connected to MySQL<br>";
    
    $email = $_POST['newact'];
    $pass = $_POST['newdesc'];
    echo "greetings";
    echo "$email";
    $sql = "INSERT INTO activities (activity, description)" . " VALUES ( \"$email\" , \"$pass\" ) ;";
    if (mysqli_query($conn, $sql)) {
        header("Location: activities.php");
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