<?php
session_start();
    $name = 'Chris Bojemski';
    $message = "Welcome $name";
    
    $workout = $_SESSION['workout'];
    $schedule = $_SESSION['schedule'];
    
          
      if(!$workout){
        $_SESSION['workout'] = $workout = array(
          array( 'Exercise' => 'Curls', 'Type' => 'Strength', 'Time/Reps' => '20' ),
          array( 'Exercise' => 'Slow Jog', 'Type' => 'Cardio', 'Time/Reps' => '30' ),
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



    <!------------------------------------------------------->

    <div class="row">
      <div class="col-md-8 col-xs-10">
        <h2>Exercise</h2>
        <a href="newWorkout.php" class="btn btn-success">
          <i class="glyphicon glyphicon-plus"></i> New Record
        </a>
        <a href="#" class="btn btn-primary">
                Total: 
                <span class="badge"><?=count($workout)?></span>
            </a>
        <br />
        <table class="table table-condensed table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Exercise</th>
              <th>Type</th>
              <th>Time/Reps</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($workout as $i=> $exercise): ?>
            <tr>
              
              <td>
                <?=$exercise[ 'Exercise']?>
              </td>
              <td>
                <?=$exercise[ 'Type']?>
              </td>
              <td>
                <?=$exercise[ 'Time/Reps']?>
              </td>
              <th scope="row">
                <div class="btn-group" role="group" aria-label="...">

                  <a href="deleteWorkout.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </div>
              </th>
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
      <div class="col-md-4 col-xs-10">
        <div class="alert alert-warning" role="alert">
          There should be a good mix of cardio- and strength-based exercises in any workout plan. 
        </div>
      </div>
    </div>
    <!----------------------------------------------------->
    <div class="row">
      <div class="col-md-8 col-xs-10">
        <h2>Daily Plan</h2>
        <a href="newSchedule.php" class="btn btn-success">
          <i class="glyphicon glyphicon-plus"></i> New Record
        </a>
        <a href="#" class="btn btn-primary">
                Total: 
                <span class="badge"><?=count($schedule)?></span>
            </a>
        <br />
        <table class="table table-condensed table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Activity</th>
              <th>Time</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($schedule as $i=> $activity): ?>
            <tr>
              <td>
                <?=$activity[ 'Activity']?>
              </td>
              <td>
                <?=$activity[ 'Time']?>
              </td>
              <th scope="row">
                <div class="btn-group" role="group" aria-label="...">


                  <a href="deleteSchedule.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </div>
              </th>
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
      <div class="col-md-4 col-xs-10">
        <div class="alert alert-warning" role="alert">
          Losing weight? Don't skip meals -- it only makes things difficult. 
        </div>
      </div>
    </div>


  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>