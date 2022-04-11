<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>
  <style>
	body{
		background-image:url(register.jpg);
		background-size:100%;
	}
</style>


  <body>
  <?php
	$title = "Registration form";
?>
<div>
    <p><b><center>REGISTRATION FORM</center></b></p>
<form class="form-horizontal" method="post" action="login.php">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name <font color=red>*</font></label>
			<div class="col-md-4">
				<input type="text" name="name" required class="form-control">
			</div>
		</div>
        <div class="form-group">
			<label for="name" class="control-label col-md-4">Email <font color=red>*</font></label>
			<div class="col-md-4">
				<input type="email" name="email" required class="form-control">
			</div>
		</div>
        <div class="form-group">
			<label for="name" class="control-label col-md-4">Phone Number <font color=red>*</font></label>
			<div class="col-md-4">
				<input type="text" name="phone" required class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Password <font color=red>*</font></label>
			<div class="col-md-4">
				<input type="password" name="pass" required class="form-control">
			</div>
		</div>
        <div class="form-group">
			<label for="pass" class="control-label col-md-4">confirm Password <font color=red>*</font></label>
			<div class="col-md-4">
				<input type="password" name="pass" required class="form-control">
			</div>
		</div>
		</div><p><center>  Already have an account..! &nbsp&nbsp<a href="login.php">Login here</a></center></p>
		<br/>
        <div>
            <center>
		        <input type="submit" name="submit" value="Register" class="btn btn-primary">
                <button type="reset" class="btn btn-default">Cancel</button>
            </center>
        </div>
	</form>
</div>