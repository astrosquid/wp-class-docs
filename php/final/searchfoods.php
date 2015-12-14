<?php 
    
    $hostname = $IP;
    $username = "astrosquid";
    $password = "";
    $dbname = "test";
    
    ///connection to the database
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    
    
    $value = $_GET['value'];
    //$value = "h";       //HARD CODED TO TEST PAGE RESPONSE
    $query = mysqli_query($conn, "select * from foods where food LIKE \"%$value%\";");
    
    
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['food'];
    }
    
    $jsonstring = json_encode($array);
    echo $jsonstring;
    
?>