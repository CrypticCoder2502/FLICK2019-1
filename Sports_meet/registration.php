
<!DOCTYPE html>
<html>
<head>
	<title>Register and Win	</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Pacifico|Kosugi|Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
         <nav class="navbar navbar-inverse">
	<div class="container-fluid">
	<div class="navbar-header">

	<a class="navbar-brand " href="/josh" style="padding:10px! important;">
	<!-- Change url when upload the website -->
	<p style="height:100%;font-family: 'Edo';font-size:45px;padding:8px 0px 0px 0px;">FLICK'19</p></a>


	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
	</div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<ul class="nav navbar-nav navbar-right navLink">
	<li><a href="index.php">HOME</a></li>
		<li><a href="events.php">EVENTS</a> </li>
	<li><a href="registration.php">REGISTRATION</a> </li>
		<li><a href="schedule.php">SCHEDULE</a></li>
	<li><a href="gallery.php">GALLERY</a></li>
		<li><a href="contact.php">CONTACT US</a></li>
</ul>
</div>
	</div>
</nav>
<img src="3.jpg" width="100%" height="550">
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-sm-6">
  			 <form>
  			 	<h5>LOGIN</h5>
  			 	<div class="form-group">
      <label for="usr">Username:</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd">
    </div>
    <button type="submit" class="btn btn-primary btn-block">LOG IN</button>

  			 </form>
  			 <br><br>
  		</div>
  		<div class="col-sm-6">
  			<form method="POST" action="signup.php">
  				<h5>SIGN UP</h5>
  			<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control"  name="name" required="">
</div>
<div class="form-group">
  <label for="pwd">Email ID:</label>
  <input type="email" class="form-control"  name="email" required="">
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" class="form-control" id="pwd" name="pwd" required="">
</div>
<div class="form-group">
  <label for="pwd">College Name:</label>
  <input type="text" class="form-control" name="clg" required="">
</div>
<div class="form-group">
  <label for="pwd">City:</label>
  <input type="text" class="form-control" name="city" required="">
</div>
<div class="form-group">
  <label for="pwd">Phone number:</label>
  <input type="number" class="form-control" name="phone" required="">
</div>
<input type="submit" name="submit">
<br><br>
</form>
  		</div>
  	</div>
  </div>
</body>
</html>