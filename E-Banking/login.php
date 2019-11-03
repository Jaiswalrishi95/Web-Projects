<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="stylelogin.css" rel="stylesheet" type="text/css">
</head>
<body>


<div class="container">
	<div class="row"> 
	<div class="col-lg-6">
	<h2>Login</h2>
	<form action="validation.php" method="post">
	<div class="form-group">
		<label><font color="Blue"> Username </font></label>
		<input type="text" name="user" class="form-control">
	</div>
	<div class="form-group">
		<label><font color="Blue"> Password </font></label>
		<input type="Password" name="password" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Login</button>
	</form>
	</div>

	<div class="col-lg-6">
	<h2>Signup</h2>
	<form action="registration.php" method="post">
	<div class="form-group">
		<label><font color="Blue"> Username </font></label>
		<input type="text" name="user" class="form-control">
	</div>
	<div class="form-group">
		<label><font color="Blue"> Password </font></label>
		<input type="Password" name="password" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Signup</button>
	</form>
</div>
</div>
</div>

</body>
</html>
