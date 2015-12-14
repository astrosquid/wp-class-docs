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
	<title>Add Exercise</title>

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
	    	border: 2px #424242 solid;
	    	padding-left: 10px;
	    	padding-right: 10px;
	    }
	    div h1 a:hover {
	    	color: white;
	    	background: black;
	    	text-decoration: none;
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
	                    <a href="signup.php" class="btn btn-primary">Sign Up</a>
	                    
	                </p>
	            </li>
	            <li>
	                <p class="navbar-btn">
	                    <a href="login.php" class="btn btn-warning">Log In</a>
	                </p>
	            </li>
	        </ul>
		</div>
	</nav>
	<div class="container">
	    <form role="form" action="addfood_post.php" method="post">
	        <div class="form-group">
	            <label for="Food">Food:</label>
	            <input type="text" name="newfood" class="form-control" id="exercise" value="<?php echo $newex;?>">
	        </div>
	        <div class="form-group">
	            <label for="Cals">Calories</label>
	            <input type="number" name="newcals" class="form-control" id="reps" value="<?php echo $newreps;?>">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	    </form>
	    
    </div>
	    
	
</body>
    