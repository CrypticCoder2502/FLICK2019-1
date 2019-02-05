<?php
session_start();

   
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to HBTU sports meet</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Pacifico|Kosugi|Lato" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Pacifico|Kosugi|Lato|Black+Ops+One|Bubblegum+Sans|Fredericka+the+Great|Limelight|Monoton|Shojumaru" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster|Righteous|Indie+Flower|Courgette" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
	body{
	overflow: hidden;
}

.hello{
	font-family: 'Bowlby One SC', cursive;
	font-size: 10vw;
	width: 100vw;
	margin-top: calc(50vh - 10vw);
	text-align: center;
	background: linear-gradient(
		60deg,
		hsl(0, 75%, 50%) 10%,
		hsl(20, 75%, 50%) 10%,
		hsl(20, 75%, 50%) 25%,
		hsl(50, 75%, 50%) 25%,
		hsl(50, 75%, 50%) 40%,
		hsl(130, 75%, 50%) 40%,
		hsl(130, 75%, 50%) 55%,
		hsl(200, 75%, 50%) 55%,
		hsl(200, 75%, 50%) 70%,
		hsl(260, 75%, 50%) 70%,
		hsl(260, 75%, 50%) 85%,
		hsl(0, 75%, 50%) 85%
	);

	text-shadow: 0.5px -0.6vw #fff4;
	color: #fff;
	-webkit-background-clip: text;
   	-webkit-text-fill-color: transparent;
   	animation: 10s BeProud linear infinite,
   	3s Always ease alternate infinite;
}

@keyframes BeProud {
	100% { background-position: 100vw 0px; }
}

@keyframes Always {
	100% { transform: scale(1.1);}
}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email] , input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
 
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 100%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 3px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
    * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.buttons {
    margin: 10%;
    text-align: center;
}

.btn-hover {
    width: 200px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 50px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}

.btn-hover.color-1 {
    background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
    box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
}
.btn-hover.color-2 {
    background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
    box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
}
.btn-hover.color-3 {
    background-image: linear-gradient(to right, #667eea, #764ba2, #6B8DD6, #8E37D7);
    box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
}
.btn-hover.color-4 {
    background-image: linear-gradient(to right, #fc6076, #ff9a44, #ef9d43, #e75516);
    box-shadow: 0 4px 15px 0 rgba(252, 104, 110, 0.75);
}
.btn-hover.color-5 {
    background-image: linear-gradient(to right, #0ba360, #3cba92, #30dd8a, #2bb673);
    box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
}
.btn-hover.color-6 {
    background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
    box-shadow: 0 4px 15px 0 rgba(83, 176, 57, 0.75);
}
.btn-hover.color-7 {
    background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
    box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
}
.btn-hover.color-8 {
    background-image: linear-gradient(to right, #29323c, #485563, #2b5876, #4e4376);
    box-shadow: 0 4px 15px 0 rgba(45, 54, 65, 0.75);
}
.btn-hover.color-9 {
    background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
    box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
}
.btn-hover.color-10 {
        background-image: linear-gradient(to right, #ed6ea0, #ec8c69, #f7186a , #FBB03B);
    box-shadow: 0 4px 15px 0 rgba(236, 116, 149, 0.75);
}
.btn-hover.color-11 {
       background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);  box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
}
</style>	


<body >
          <div style="background-image: url(https://media.giphy.com/media/l0MYwdebx8o0XI56E/giphy.gif);background-repeat: no-repeat;background-size: cover;">  
  		<!--<div id="snackbar">Registrations are closed.</div>-->
    <nav class="navbar navbar-inverse navbar-fixed-top" >
	<div class="container-fluid">
	<div class="navbar-header">

	<a class="navbar-brand " href="index.php" style="padding:10px! important;">
	<!-- Change url when upload the website -->
	<p style="height:100%;font-family: 'Black Ops One', cursive;font-size:45px;padding:8px 0px 0px 0px;color: red;">AAGAZ '19'</p></a>


	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
	</div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<ul class="nav navbar-nav navbar-right navLink">
	<li><a href="index.php"><b style="color: white;">HOME</b></a><li>
		<li><a href="events.php"><b style="color: white;">EVENTS</b></a> </li>
	
		<li><a href="schedule.php"><b style="color: white;">SCHEDULE</b></a></li>
	<li><a href="gallery.php"><b style="color: white;">GALLERY</b></a></li>
		<li><a href="contactus.php"><b style="color: white;">CONTACT US</b></a></li>
		<li><a href="aboutus.php"><b style="color: white;">ABOUT US</b></a></li>
</ul>
</div>
	</div>
</nav>

	
<br><br><br>
  <div class="row">
  	<div class="col-sm-6">
</div>
 
  	<div class="col-sm-6">
  	<div align="right">  <a onclick="document.getElementById('id02').style.display='block'" id="log" ><button class="btn btn-link  " style="border-width: 4px;border-color: black;color: black;border-radius: 50%"><b>LOGIN</b></button></a></div>
  		<div align="right" hidden="" id="out"><button class="btn btn-danger" style="border-width: 4px;border-color: red;color: white;border-radius: 50%;"><a style="color: white;" href="logout.php" >Log out</a></div>
  	</div>
  </div> 
	
	

  <center>< <h1 class="w3-container w3-center w3-animate-top" style="font-size: 6vw;color: white;font-family: 'Fredericka the Great', cursive;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" onselectstart = "return false">HBTU KANPUR</h1>
  	 <h2 class="w3-center w3-animate-left" style="color: white;font-family: 'Bubblegum Sans';-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" onselectstart="return false">PRESENTS</h2>
  		<h2  class="w3-center w3-animate-left hello" style="font-family: 'Black Ops One';-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;margin-top: 0vw;" onselectstart ="return false ">AAGAZ 2019</h2>
  		<h2 class="w3-center w3-animate-left" style="color: white;font-family: 'Bubblegum Sans';-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" onselectstart = "return false">1 MAR - 3 MAR</h2>
  	</center>
  	<br><br>
  <a  onclick="document.getElementById('id01').style.display='block'" id="sign">	<center><button class="btn btn-link w3-animate-zoom" style="border-width: 4px;border-color: black;color: black;font-family: 'Righteous'"><h3>REGISTER</h3></button></center></a><br><br><br>
  </div>
  <div style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz8GpYQLZ2rlwwOymaqDq-fIzD4tt8gK-cx1H6c68l4qd9sr5kpQ);vertical-align: top;outline: none;display: inline-block;">
   <hr>
   <center><h1 style="font-family: 'Black Ops One';font-size: 4vw;color: red;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;"> AAGAZ HBTU 2019</h1></center>
   <hr>
   <center>
   	<h3 style="color: white;font-family: Bubblegum Sans;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;"><span style="color: red;">FLICK</span> is the annual sport meet of HBTU Kanpur . It is one of the most</h3>
   	<h3 style="color: white;font-family: Bubblegum Sans;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">popular event in HBTU . Students from various college come and participate</h3>
   	<h3 style="color: white;font-family: Bubblegum Sans;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">FLICK helps the sports person of various college to compete with each other.</h3>
   </center>
   <div class="buttons" style="margin-top: 1.8vw;">
    <button class="btn-hover color-1">TABLE TENNIS</button>
    <button class="btn-hover color-2">CHESS</button>
    <button class="btn-hover color-3">ATHLETICS</button>
    <button class="btn-hover color-4">BUTTON</button>
    <button class="btn-hover color-5">BUTTON</button>
    <button class="btn-hover color-6">BUTTON</button>
    <button class="btn-hover color-7">BUTTON</button>
    <button class="btn-hover color-8">BUTTON</button>
    <button class="btn-hover color-9">BUTTON</button>
    <button class="btn-hover color-10">BUTTON</button>
    <button class="btn-hover color-11">BUTTON</button>
</div>
</div>
	<div class="clearfix" style="background-image: url(7.jpg);">
	    <div class="text-center center">
	    <div class="page-footer info-color center-on-small-only"  data-aos="zoom-in" data-aos-duration="1000">
	<div class="container-fluid">
		<div class="row text-center">
			<p class="footerLinks">
			    <a href="index.php" style="color: white;">Home</a> |
			    <a href="events.php" style="color: white;">Events</a> |
					<a href="leagues.php" style="color: white;">Schedule</a> |
			    <a target="_blank" href="" style="color: white;">Gallery</a> |
			    <a href="contact.php" style="color: white;">Contact Us</a>
			     <a href="aboutus.php" style="color: white;">About Us</a>
			 </p>
		</div>

		<div class="row text-center">
			<h4 class="footerLinks" style="color: white;">For any query and more detail, please contact here <a href="contactus.php" style="color: red;">Contact Us</a></h4>
		</div>
	</div>
	<div class="footer-copyright text-center">
			<div class="container-fluid" style="color: white;">&copy; 2019 Copyright <a href="index.php">FICK 2019, HBTU KANPUR</a>
			</div>
	</div>
</div>


  	<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="signup.php" method="POST">
    <div class="container">
  <h1 style="color: red;font-family: 'Baloo Thambi';">SIGNUP</h1><br>
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
<br><br>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><b>Cancel</b></button>
        <button type="submit" class="signupbtn"><b>Sign Up</b></button>
      </div>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="login_interm.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     
    </div>

    <div class="container">
   	<h1 style="color: red;font-family: 'Baloo Thambi';">LOGIN</h1><br>
  			 	<div class="form-group">
      <label for="usr">Username:</label>
      <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password">
    </div>
        
      <button type="submit" style="width: 100%"><h5><b>Login</b></h5></button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" style="width: 100%" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn"><h5><b>Cancel</b></h5></button>
      
    </div>
  </form>
</div>

  	<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
   if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>
</body>
</html>
<?php
 if(isset($_SESSION["username1"]))
 {

 	?>
 	<script>
         
 	  $("#log").attr('hidden',true);
 	   $("#sign").attr('hidden',true);
 	   $('#out').attr('hidden',false);
 	  </script>
 	<?php
  
 }
 else
 {

 }
?>