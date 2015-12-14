<html>
    <head>
        <title>Making...</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    
    <body>
        
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
        $sql = "INSERT INTO users (email, password)" . " VALUES ( \"$email\" , \"$pass\" ) ;";
        if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }  
            
        ?>
        
        
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
            <h1>Congrats, you've been registered with Flitter!</h1>
            <h2>Click the button below to go back to the home page and log in.</h2>
            <a href="homePage.php" class="btn btn-success" >Go Home & Log In</a>
            
            
        </div>
        
        
    </body>
</html>