<?php
session_start();
  $schedule = $_SESSION['schedule'];
  if($_POST){
    if(isset($_GET['id'])){
      $schedule[$_GET['id']] = $_POST;
    }else{
      $schedule[] = $_POST;
    }
    
    $_SESSION['schedule'] = $schedule;
    header('Location: ./midterm.php');
  }
    
  if(isset($_GET['id'])){
    $activity = $schedule[$_GET['id']];
  }else{
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>New Activity</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>
  <body>
    <div class="container">

        <div class="page-header">
          <h1>New Activity <small>Your daily plan</small></h1>
        </div>
        <form class="form-horizontal" action="" method="post" >
          <div class='alert' style="display: none" id="myAlert">
            <button type="button" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</s>
            </button>
            <h3></h3>
          </div> 
          <div class="form-group">
            <label for="actName" class="col-sm-2 control-label">Activity Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="actName" name="Activity" placeholder="e.g. Sleep, Dinner, Walk the Dog" value="<?=$activity['Activity']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="typeName" class="col-sm-2 control-label">Time</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="typeName" name="Time" placeholder="Format: Beginning HH:MM AM/PM" value="<?=$activity['Time']?>">
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