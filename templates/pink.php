<?php 
  //require "functions.php";
  include "functions.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Templates
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </head>
  <body style="background-color: pink">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        	<div class="row">
        		<div class="col-md-12">
        			<h1><?= $title; ?></h1>
        		</div>
        	</div>
        	<div class="row">
         		<div class="col-sm-8">
        			<?= $content; ?>
        		</div>  
            <div class="col-sm-4">
              <?php 
              include "inc/template_selector.php";  
              include "inc/username.php";
              include "inc/variables.php";
              ?> 
            </div>           		
        	</div>
        	<div class="row">
        		<div class="col-md-12">
        			<?php include "inc/footer.php" ?>
        		</div>        		
        	</div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">



        </div>
      </div>
    </div>
  </body>
</html>