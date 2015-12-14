<?php 
    
    $hostname = $IP;
    $username = "astrosquid";
    $password = "";
    $dbname = "test";
    
    ///connection to the database
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
   
    
    //$rescount = mysqli_num_rows($result);
    
    $query = "SELECT * FROM activities;";
    $result = mysqli_query($conn, $query);
    
?>
<HTML>
    <head>
	<title>Activities</title>

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
        <table class="table table-striped"> 
            <thead> 
                <tr> 
                    <th class="header">Activity</th>
                    <th class="header">Description</th>
                    <th class="header">Erase</th>
                </tr> 
            </thead> 

            <tbody>
                
            <?php 
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row["activity"] ?></td>
                    <td><?php echo $row["description"] ?></td>
                    <td>
                        <a href="eraseact.php?id=<?=$row['id']?>" class="btn btn-danger">
                            Erase
                        </a>
                    </td>
                </tr>
            <?php } ?>
            
            </tbody> 
            </table>
            <a href="addactivity.php" class="btn btn-lg btn-success">Create!</a>
            <a href="hub.php" class="btn btn-lg btn-default">Back to Hub</a>
        </div>
    </body>
</HTML>