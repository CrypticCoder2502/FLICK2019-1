<?php
   session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>List of all events</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Pacifico|Kosugi|Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster|Righteous|Indie+Flower|Courgette" rel="stylesheet">
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
  <style>
body {font-family: Arial, Helvetica, sans-serif;}




.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
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
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
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

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
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
</nav><br><br><br><br>
<div align="right" hidden id="out"><button class="btn btn-danger" style="border-width: 4px;border-color: red;color: white;border-radius: 50%;"><a href="logout.php" >Log out</a></button></div>
<br>
  	</div>
<h1 class="text-center w3-animate-zoom" class="display-1" style=" background-image: url(http://bdfjade.com/data/out/56/5631356-background-image.png);padding-top: 1vw;padding-bottom: 1vw;margin-top: 0.1vw;color: red;font-family: Righteous;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;"><b>Event Registration</b></h1><br>
  <center> <button class="btn btn-danger" style="border-radius: 50%;padding: 1vw;" hidden="" id="pay1"><h2>PAYMENT</h2></button> </center>
 <div id = "mar" hidden="" style="font-size: 2vw;color:red;"> <marquee>Congrats you have made the payment . Please let us verify the payment .It will take less than 24 hrs after that you can register for events For more detail contact 8960220722 </marquee></div>
  <div id = "mar1" hidden="" style="font-size: 2vw;color:green;"> <marquee>Congrats We have verified your payment now you can register for  events . For more detail contact 8960220722 </marquee></div>
<div class="container">
  
  		<div class="row">
      <div class = "col-sm-4">
      	
     <h2 name = "table" style="font-family: Lobster;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">Table Tennis</h2>
  <div class="card" >
    <img class="card-img-top" src="5.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <br>
<center><button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary">View Detail</button></center><hr>


<center><button class="btn btn-danger" id = "Table_Tennis">Register</button></center>
<script>
$("#Table_Tennis").click(function(){
  $.post("register.php",
  {
    name: "Table_Tennis",
    
  },
  function(data, status){
    alert( data );
  });
});
</script>


<div id="id01" class="modal">
  
  <form class="modal-content animate">

   <pre style="font-size: 1.5vw;font-family: 'Roboto Slab'"><b>TABLE TENNIS RULE</b>

-The rules of the tournament of the International Table Tennis Federation asp adopted from 
time to time by the Table Tennis Federation of India shall apply unless otherwise modified.

-Each team will have maximum 3boys and minimum 2 boys . Maximum 3 girls and minimum 2 girls .
-The team can decide  who all from thier team will be playing :
*Singles(boys)
*Singles(girls)
*Doubles(boys)
*Doubles(girls)
*Mixed Doubles 
-each match will be played following a best of five games format, based with each game of 11 
points.
-In case of tie during league stage:-
In case of tie (in number of matches won) between two teams, the winner of their match 
will proceed to the next round.
-In case of tie between more than two teams, the difference of team score between each 
team will be considered (team with bigger margin would proceed to the next round).
If tie still continues the difference in score line of each match would be considered for 
the decision.
-The team competition will follow a Group and Knockout (single elimination) format. The 
teams will be divided into four groups. In each group, every team will play against each of 
their opponents (in the same group) once. The top two teams will qualify for the knockout 
phase. In the knockout phase, the winners of the group will play with one of the runners-up
from other groups.
-The score standings, when the match is decided, shall be considered for the calculations 
indicated above. The tally for all matches played among the tied teams in the league fixture 
will be considered.
-The decision of the referees and the umpires will be final and binding. No protests would be 
entertained. Therefore, any team leaving the field of play as a mark of protest and conceding 
a walk -over shall be deemed to have lost the fixture and will be eliminated from rest of the 
event.
-The match will be played with the new STAG 3-star PLASTIC BALLS as recommended under 
ITTF rules and regulations.
-Teams are allowed to cheer their player but there should not be any hooting or jeering 
against other teams’ players. Shouting in between the rallies is strictly not allowed.

-Each single shall be played on best of five games basis with each game of 11 points.
 ----------------------------------------------------------------------------------------------------------------------------
</form>
</pre>
</div>

    </div>
  </div>

</div>
 
 <div class = "col-sm-4">
     <h2 style="font-family: Lobster;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">Athletics</h2>
  <div class="card" >
    <img class="card-img-top" src="4.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <br>
<center><button onclick="document.getElementById('id02').style.display='block'" class="btn btn-primary">View Detail</button></center><hr>
<center><button class="btn btn-danger" id="Athletics">Register</button></center>
<script>
$("#Athletics").click(function(){
  $.post("register.php",
  {
    name: "Athletics",
    
  },
  function(data, status){
    alert(data);
  });
});
</script>


<div id="id02" class="modal">
  
  <form class="modal-content animate">
   <pre style="font-size: 1.5vw;font-family: 'Roboto Slab'"><b>Athletics Rules:</b>
Athletics is the collective name for a collection of sporting events that involve competitors running, 
throwing, walking and jumping. The roots of athletic events are prehistoric, with ancient communities
competing with each other in various running, jumping and throwing events.

Athletic events were prevalent in the ancient Olympics in Greece, starting originally with just a running
race and gratefully expanding over time to include various running, jumping and throwing events. To this 
day, success at the Olympic Games is still seen as the pinnacle of achievement in the sport of Athletics
 – although there  are also World Championships and various national and continental championships both
indoors and outdoors.

<b>Men's Athletics:</b>
Modern day men's athletics includes the following activities:
100 metres
200 metres
400 metres
800 metres
1500metres
4 × 100 metres relay
4 × 400 metres relay
High jump
Long jump
Shot put
Discus throw
Javelin throw

<b>Women's Athletics: </b>
Modern day women's’ athletics include:
100 metres
200 metres
400 metres
800 metres
4 × 100 metres relay
4 × 400 metres relay
Long jump
Shot put
Discus throw
Javelin throw

<b>Object of the Game:</b>
The objective in all athletics disciplines is to win the event. Depending upon the event, this involves
 running or walking faster, throwing further, jumping higher or jumping further than your competitors.

<b>Players & Equipment:</b>
The basic equipment for athletics consists of a vest, shorts and training shoes. Some events require
 specific pieces of equipment as follows:

Shot Put: Shot
Discus Throw: Discus
Javelin Throw: Javelin

<b>Winning:</b>
Fo involves completing the race in the quickest time possible. For throwing events, it involves
 throwing the furthest and, in jumping events, it involves jumping further or higher than your 
 competitors (depending upon the particular event). In athletics, winners are given a gold medal, 
 those who are second are given a silver medal and bronze medals are given to those who come third.
  Those athletes finishing outside of the top three are not awarded.

<b>Rules of Athletics:</b>
Each individual discipline has its own specific set of rules and competitors are expected to abide 
by these to ensure that the competition is fair.
------------------------------------------------------------------------------------------------------------------------------
</pre>
</form>
</div>
    </div>
  </div>

</div>


    <div class="col-sm-4">
	 <h2 style="font-family: Lobster;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">Chess</h2>
  <div class="card" >
    <img class="card-img-top" src="6.jpg" alt="Card image" style="width:90%">
    <div class="card-body">
       <br>
<center><button onclick="document.getElementById('id03').style.display='block'" class="btn btn-primary">View Detail</button></center><hr>
<center><button class="btn btn-danger" id="Chess">Register</button></center>
<script>
$("#Chess").click(function(){
  $.post("register.php",
  {
    name: "Chess",
    
  },
  function(data, status){
    alert(data);
  });
});
</script>


<div id="id03" class="modal">
  
  <form class="modal-content animate">
      <pre style="font-size: 1.5vw;font-family: 'Roboto Slab'">
      	  <b>Chess Rules:</b><br>
         - Tournament will be conducted as per FIDE LAWs of chess .

         - Each player will be provided with 30 minutes plus 20 second increment
           from move 1

         - Walk over will be given after 15 minutes

         - Team should be of 4 players with atleast one girl  

   --------------------------------------------------------------------------------------------------------------------------------
</pre>
</form>
</div>
    </div>
  </div>

  
    </div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
var modal2 = document.getElementById('id03');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
      if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

</script>
<?php
 if(isset($_SESSION["username1"]))
 {
 	$user =  $_SESSION['username1'];
 	           $xyz;
             $conn = new mysqli("localhost","root","","flick");
            $sql = "SELECT * FROM  users WHERE username = '$user' ";
            $result = $conn->query($sql);
         
            if ($result->num_rows > 0) {
   
            while($row = $result->fetch_assoc()) {
           $xyz =  $row["status"];
          }
          if($xyz==0)
          {
          	?>
          	<script>
          		$('#pay1').attr('hidden',false);
          	</script>
          	<?php
          }
          else if($xyz==1)
          {
               ?>
               <script>$('#mar').attr('hidden',false);</script>
               <?php
          }
          else if($xyz==2)
          {
              ?>
              <script>
              	$('#mar1').attr('hidden',false);
              </script>
              <?php
          }
}            
 	?>
 	<script>
      
 	   $('#out').attr('hidden',false);
 	  </script>
 	<?php
  
 }
 else
 {

 }
?>

</body>
</html>