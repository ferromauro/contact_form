<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PHP simple conctact form">
    <meta name="author" content="Mauro Ferro">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<link rel="icon" href="./favicon.ico" type="image/x-icon">
    <title>PHP simple conctact form</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->

</head>
  
<!-- BODY -->
  
<body>
	    <?php include_once "./sendmail.php";?>
		<div class="content"><h2 class="featurette-heading">Conctacs us<br>
				<span class="text-muted">compile the form to send a mail</span>
	</h2>
	<br>
	<div id="container"	class="col-sm-8 col-md-offset-2">
	<form class="form_contact" method="post" action="">
		<div id="submitError" style="clear:both">
		<?php
			if(isset($GLOBALS['submitError'])) 
				{htmlout($GLOBALS['submitError']);}
		?>
		</div> 
		
		<div class="form-group row">
			<label for="name" class="col-sm-2 form-control-label">Name</label>
			<div class="col-sm-10">
			<input type="hidden" class="form-control" id="action" name="action" value="contact">
			<input type="text" class="form-control" id="inputPassword3" placeholder="Nome" name="name">
			</div>
		</div>
		
		<div class="form-group row">
			<label for="phone" class="col-sm-2 form-control-label">Phone</label>
			<div class="col-sm-10">
				<input type="text" maxlength="15" class="form-control" id="inputPassword3" placeholder="Phone Number" name="phone">
			</div>
		</div>
		
		<div class="form-group row">
			<label for="email" class="col-sm-2 form-control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
			</div>
		</div>
		
		<div class="form-group row">
			<label for="confirm_email" class="col-sm-2 form-control-label">Confirm Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" name="confirm_email" placeholder="Confirm Email">
			</div>
		</div>
		
		<div class="form-group row">
			<label for="text_info" class="col-sm-2 form-control-label">Message:</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="inputEmail3" name="message" placeholder="Message"></textarea>
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-2">Privacy</label>
			<div class="col-sm-10">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="privacy"> I Agree Terms and Conditions. 			
					</label>
				</div>
			</div>
		</div>
  
		<div class="form-group row">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-secondary">Sign in</button>
			</div>
		</div>
	</form>
	  	       
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
