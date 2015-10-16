<?php
session_start();
  $workout = $_SESSION['workout'];
  if($_POST){
    if(isset($_GET['id'])){
      $workout[$_GET['id']] = $_POST;
    }else{
      $workout[] = $_POST;
    }
    
    $_SESSION['workout'] = $workout;
    header('Location: ./midterm.php');
  }
    
  if(isset($_GET['id'])){
    $exercise = $workout[$_GET['id']];
  }else{
    $exercise = array();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>New Exercise Goal</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>
  <body>
    <div class="container">

        <div class="page-header">
          <h1>New Exercise Goal <small>Your daily workouts</small></h1>
        </div>
        <form class="form-horizontal" action="" method="post" >
          <div class='alert' style="display: none" id="myAlert">
            <button type="button" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3></h3>
          </div> 
          <div class="form-group">
            <label for="exName" class="col-sm-2 control-label">Exercise Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="exName" name="Exercise" placeholder="Exercise" value="<?=$exercise['Exercise']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="typeName" class="col-sm-2 control-label">Type</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="typeName" name="Type" placeholder="Usually Cardio or Strength" value="<?=$exercise['Type']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="txtReps">Reps or Time</label>
            <div class="col-sm-10">
                  <input type="number" class="form-control" id="txtReps" name="Time/Reps" placeholder="If time, enter minutes"  value="<?=$exercise['Time/Reps']?>">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </div>
          </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript">
      (function($){
        $(function(){
          
      
        });
      })(jQuery);
    </script>
  </body>
</html>