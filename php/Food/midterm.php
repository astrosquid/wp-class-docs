<?php
session_start();
    $name = 'Chris Bojemski';
    $message = "Welcome $name";
    
    $person = array( 'Name' => $name, 'Age' => 22, WorkoutGoal => 'Complete' );
    
    $food = $_SESSION['food'];
    $workout = $_SESSION['workout'];
    $schedule = $_SESSION['schedule'];
    if(!$food){
      $_SESSION['food'] = $food = array(
          array( 'Name' => 'Breakfast', 'Time' => strtotime("-1 hour"), Callories => 400 ),
          array( 'Name' => 'Lunch', 'Time' => strtotime("now"), Callories => 800 ),
          array( 'Name' => 'Snack', 'Time' => strtotime("now + 1 hour"), Callories => 400 ),
          array( 'Name' => 'Dinner', 'Time' => strtotime("6pm"), Callories => 400 ),
          );}
          
      if(!$workout){
        $_SESSION['workout'] = $workout = array(
          array( 'Exercise' => 'Curls', 'Type' => 'Strength', 'Time/Reps' => '20' ),
          array( 'Exercise' => 'Slow Jog', 'Type' => 'Cardio', 'Time/Reps' => '30 min' ),
          array( 'Exercise' => 'Squats', 'Type' => 'Strength', 'Time/Reps' => '10' ),
          );
        }
    
    if(!$schedule) {
      $_SESSION['schedule'] = $schedule = array(
        array( 'Activity' => 'Breakfast', 'Time' => '7:30 AM', ),
        array( 'Activity' => 'Classes', 'Time' => '9:00 AM', ),
        array( 'Activity' => 'Exercises', 'Time' => '2:30 PM', ),
        array( 'Activity' => 'Dinner', 'Time' => '6:00 PM', ),
        array( 'Activity' => 'Sleep', 'Time' => '10:00 PM', ),
        );
    }
        
        
    
    
        
    $total = 0;
    foreach ($food as $meal) {
        $total += $meal['Callories'];
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Your Info</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
            <h1>Your Info</h1>
            <h2><?=$message?></h2>
            <div class="panel panel-success">
                <div class="panel-heading">Your Data</div>
                <div class="panel-body">
                    <dl class="dl-horizontal">
                        <dt>Name</dt>
                        <dd><?=$person['Name']?></dd>
                        <dt>Age</dt>
                        <dd><?=$person['Age']?></dd>
                        <dt>Goal</dt>
                        <dd><?=$person['CallorieGoal']?></dd>
                        <dt>Today's Intake</dt>
                        <dd><?=$total?></dd>
                    </dl>
                </div>
            </div>
            
      <div class="row">
        <div class="col-md-8 col-xs-10">
            <h2>Food Intake</h2>
            <a href="edit.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                New Record
            </a>
            <a href="#" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Delete All
                <span class="badge"><?=count($food)?></span>
            </a>
            <br />
            <table class="table table-condensed table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Time</th>
                  <th>Callories</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($food as $i => $meal): ?>
                <tr>
                  <th scope="row">
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="" title="View" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="edit.php?id=<?=$i?>" title="Edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="delete.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </th>
                  <td><?=$meal['Name']?></td>
                  <td><?=date("M d Y  h:i:sa", $meal['Time'])?></td>
                  <td><?=$meal['Callories']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>  
          
        </div>
        <div class="col-md-4 col-xs-10">
            <div class="alert alert-success" role="alert">
                You did well
            </div>
            <div class="alert alert-danger" role="alert">
                Oh no! You messed up.
            </div>

        </div>
        </div>
        <!------------------------------------------------------->
        
        <div class="row">
        <div class="col-md-8 col-xs-10" >
            <h2>Exercise</h2>
            <a href="newWorkout.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                New Record
            </a>
            <a href="#" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Delete All
                <span class="badge"><?=count($workout)?></span>
            </a>
            <br />
            <table class="table table-condensed table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Exercise</th>
                  <th>Type</th>
                  <th>Time/Reps</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($workout as $i => $exercise): ?>
                <tr>
                  <th scope="row">
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="" title="View" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="edit.php?id=<?=$i?>" title="Edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="delete.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </th>
                  <td><?=$exercise['Exercise']?></td>
                  <td><?=$exercise['Type']?></td>
                  <td><?=$exercise['Time/Reps']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>  
          
        </div>
      <div class="col-md-4 col-xs-10">
            <div class="alert alert-warning" role="alert">
                Make sure not to do the same strength exercises two days in a row!
            </div>

        </div>
        </div>
      <!----------------------------------------------------->
      <div class="row">
        <div class="col-md-8 col-xs-10" >
            <h2>Daily Plan</h2>
            <a href="edit.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                New Record
            </a>
            <a href="#" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Delete All
                <span class="badge"><?=count($schedule)?></span>
            </a>
            <br />
            <table class="table table-condensed table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Activity</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($schedule as $i => $activity): ?>
                <tr>
                  <th scope="row">
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="" title="View" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="edit.php?id=<?=$i?>" title="Edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="delete.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </th>
                  <td><?=$activity['Activity']?></td>
                  <td><?=$activity['Time']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>    
          
        </div>
        <div class="col-md-4 col-xs-10">
        <div class="alert alert-warning" role="alert">
          You should get at least 8 hours of sleep every night.
        </div>
        </div>
      </div>
      
            
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>