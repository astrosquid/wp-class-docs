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
	<title>Flitter - Sign Up</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <style type="text/css">
	    div.row {
	    	border: 2px solid;
	    }

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
		<h1 class="text-center">Slim & Fitter</h1>
		<div class="joinuslink">
			<h1 class="text-center" id="joinus">
				<a href="signup.php" class="btn-large btn-primary">Join Us</a>
			</h1>
		</div>
		<h2 class="text-center">Please do not use real emails and passwords on this site.</h2>

		<div class="row">
		    
			<div class="col-md-4 col-sm-6">
				<h3>This is a fitness app.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec pellentesque libero, ac lacinia eros. Pellentesque nec sagittis neque. Aenean egestas odio eros. In quis est ligula. In a ullamcorper risus. Morbi massa neque, pharetra sit amet lacinia eget, mollis non libero. Fusce maximus semper rutrum. Sed sagittis quam varius, sollicitudin neque ac, egestas est. Nullam imperdiet tortor non dolor consectetur, eget pellentesque quam pretium. Nullam consequat metus nisi. Pellentesque volutpat mi nulla. Morbi vehicula dolor odio, eget venenatis libero pharetra vitae. Aenean scelerisque magna vel nisi pellentesque, vel accumsan nunc cursus.</p>			
			</div>
			<div class="col-md-4 col-sm-6">
				<h3>Sed in pharetra odio,</h3>
				<p>Sed in pharetra odio, et condimentum nulla. Pellentesque gravida scelerisque tincidunt. Nunc ultrices ligula in diam dictum, eget iaculis eros maximus. Integer quis mi nec ipsum malesuada pulvinar. Donec suscipit rhoncus tellus, eu porttitor mi fringilla ac. Praesent id scelerisque lacus. Phasellus eget ligula ut lectus bibendum hendrerit. Quisque rutrum vitae mi at aliquam. Aenean sagittis mauris ex, vel faucibus tortor interdum id. Integer varius augue ipsum, eu placerat diam sagittis non. Nam mattis elementum varius. In eu sapien maximus, suscipit diam vel, hendrerit ipsum.</p>
			</div>

			<div class="col-md-4 col-sm-6">
				<h3>Please sign up with my site.</h3>
				<p>Morbi sed sodales erat. Nam ut egestas leo. Integer finibus tortor quis magna sodales, at commodo lacus lobortis. Sed quis ante vel sem dignissim blandit id in neque. Donec nec odio ac odio eleifend ullamcorper. Cras quam sapien, pellentesque mollis risus et, sagittis ornare mauris. Fusce enim lorem, accumsan ac ante in, consequat rhoncus ex. Nullam id odio fermentum, efficitur erat consectetur, porta ipsum. Donec velit metus, condimentum sed fringilla sit amet, gravida a diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Aliquam eleifend luctus diam, id ultricies libero volutpat non. Aenean mauris erat, rutrum at odio at, sagittis ultricies velit.</p>
			</div>
			
			<div class="col-md-12 col-sm-9" id="demo">
				<h3>A test for Ajax stuff.</h3>
				<buttn class="btn btn-info" onclick="changetextdemo()">Change Content</buttn>
			</div>
			

		</div>
		
	</div>
	
	<script> 
		function changetextdemo() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (xhttp.readyState == 4 && xhttp.status == 200) {
					document.getElementById("demo").innerHTML = xhttp.responseText;
				}
			};
			xhttp.open("GET", "ajaxtest.txt", true);
			xhttp.send();
		}
		
	</script>

</body>