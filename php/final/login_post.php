<?php 
    
    $hostname = $IP;
    $username = "astrosquid";
    $password = "";
    $dbname = "test";
    
    ///connection to the database
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    //echo "Connected to MySQL<br>";
    
    $email = $_POST['email'];
    $pass = $_POST['userpass'];
    $sql = "select * from users where email = \"$email\";";
    $result = mysqli_query($conn, $sql);
    $rescount = mysqli_num_rows($result);
    
    if ($rescount != 0) {
        //NOW CHECK FOR CORRECT PASSWORD
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        echo "$pass";
        echo " ";
        printf ("$row[1]");
        if($pass === $row[1]) {
            header("Location: hub.php");
        }
        else {
            header("Location: login.php");
        }
    } else {
        header("Location: login.php");
    }
    
?>

<html>
    <head>
        <title>Logging In</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    
    <body>
        
        <nav class="navbar navbar-inverse">
		<div class="container" id="navbizzar">
			<ul class="nav navbar-nav">
	            <li>
	            	<div class="navbar-header">
						<a class="navbar-brand" href="homePage.php">Flitter</a>
					</div>
	            </li>
	        </ul>
	        <ul class="nav navbar-nav navbar-right">
	        	<li>
	                <p class="navbar-btn">
	                    <a href="#" class="btn btn-primary">Sign Up</a>
	                    
	                </p>
	            </li>
	            <li>
	                <p class="navbar-btn">
	                    <a href="#" class="btn btn-warning">Log In</a>
	                </p>
	            </li>
	        </ul>
		</div>
	    </nav>
        <div class="container">
            <h1>You are now logged in.</h1>
            <h2>Click the button view your account details.</h2>
            <a href="homePage.php" class="btn btn-success" >Go</a>
            
        </div>
        
        
    </body>
</html>