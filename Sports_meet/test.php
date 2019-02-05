        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Pacifico|Kosugi|Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>


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
  color: white;
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
  border: 1px solid #f1f1f1;
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
h3:hover { 
  background-color: black;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
    <!--<div id="snackbar">Registrations are closed.</div>-->
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">

  <a class="navbar-brand " href="/josh" style="padding:10px! important;">
  <!-- Change url when upload the website -->
  <p style="height:100%;font-family: 'Edo';font-size:45px;padding:8px 0px 0px 0px;">Josh'19</p></a>


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
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">EVENTS
      <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
         <li><a href="sports.php" > SPORTS</a>
          </li>
      <li><a href="leagues.php">LEAGUES</a></li>
      <li><a href="semlong.php">Semester Long</a></li>
        </ul>
    </li>
  <li><a href="registration.php">REGISTRATION</a> </li>
    <li><a target="_blank" href="https://docs.google.com/spreadsheets/d/1-F2RNlXOhZip7nXLiZ1cHb6u3T7H-LvkU5YFY1lfTRc/edit?usp=sharing">SCHEDULE</a></li>
  <li><a target="_blank" href="https://drive.google.com/open?id=1NnK_NIwR3d8YbA3S6ceOQcuGcGcUJmez">RULEBOOK</a></li>
  <li><a href="gallery.php">GALLERY</a></li>
    <li><a href="contact.php">CONTACT US</a></li>
</ul>
</div>
  </div>
</div>
</nav>