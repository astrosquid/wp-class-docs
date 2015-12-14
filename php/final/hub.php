<?php

$hostname = $IP;
$username = "astrosquid";
$password = "";
$dbname = "test";

///connection to the database
$conn = mysqli_connect($hostname, $username, $password, $dbname);
echo "Connected to MySQL<br>";

$sql = "INSERT INTO users (email, password) VALUES (\"user001\", \"password\")";
//if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hub</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <style type="text/css">
	    body {
	    	padding-bottom: 800px;
	    }

	    a.btn-primary {
	    	margin-right: 10px;
	    }

	    #joinus {
	    	text-align: center;
	    	color: black;
	    	display: inline;
	    }

	    .joinuslink {
			text-align: center;
	    }

	    div h1 a {
	    	color: #424242;
	    	
	    	padding-left: 10px;
	    	padding-right: 10px;
	    }
	    div h1 a:hover {
	    	color: white;
	    	background: black;
	    	text-decoration: none;
	    }
	    
	    #cntrbtn {
	        
	    }
	    
     </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
		<div class="container" id="navbizzar">
			<ul class="nav navbar-nav">
	            <li>
	            	<div class="navbar-header">
						<a class="navbar-brand" href="#">Flitter</a>
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
	    
	    <h1 class="text-left">Where to?</h1>
	    <h3 class="text-left">Here, you'll find a hub of your weekly schedule.</h3>
	    <h3 class="text-left">First, select the category you'd like to view.</h3>
	    <h3 class="text-left"> </h3>
    	
	    <div class="row">
		    
			<div class="col-md-4 col-sm-4">
				<a href="exercises.php" class="btn btn-lg btn-warning center-block">Go Exercises</a>
			</div>
			<div class="col-md-4 col-sm-4">
				<a href="activities.php" class="btn btn-lg btn-danger center-block">Go Activities</a>
		    </div>
			<div class="col-md-4 col-sm-4">
				<a href="foods.php" class="btn btn-lg btn-primary center-block">Go Foods</a>
			</div>

		</div>
	    
	        
    </div>
</body>