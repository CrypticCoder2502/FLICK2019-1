<?php 
  session_start();
 require 'PHPMailerAutoload.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to HBTU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Pacifico|Kosugi|Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <?php
         $GLOBALS['name'] = $_POST['name'];
     $GLOBALS['email']  = $_POST['email']; 
     $GLOBALS['pwd'] = $_POST['pwd'];
     $GLOBALS['clg'] = $_POST['clg'];
     
     $GLOBALS['city']  = $_POST['city']; 
     $GLOBALS['phone'] = $_POST['phone'];
     $conn = new mysqli("localhost","root","","flick");
       $sql = "INSERT INTO users (name,email_id,password,college_name,city,phone_number)
VALUES ('$name', '$email', '$pwd','$clg','$city','$phone')";
if ($conn->query($sql) === TRUE) {
	$sq = "SELECT COUNT(*) FROM users ";
	$result = $conn->query($sq);
	  while($row = $result->fetch_assoc())
       {
          $GLOBALS['code']   = $row["COUNT(*)"];
       }
           $array=explode(" ",$clg);
           $GLOBALS['unique'] = "";
            $count = sizeof($array);
           
            for($i=0;$i<$count;$i++)
            {
            	
               $unique = $unique.($array[$i][0]);
            }
            $unique = $unique.$city;
            $unique = $unique.$code;
            echo $email;
           $s =  "UPDATE users SET username = '$unique' WHERE email_id = '$email'";
             $conn->query($s);
            
//require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'flick9102@gmail.com';                 // SMTP username
$mail->Password = 'Hbtu@123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('flick9102@gmail.com', 'HBTU Flick 2019');
$mail->addAddress($email, 'Joe User');     // Add a recipient

    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'HBTU Flick 2019';
$mail->Body    = 'Welcome to HBTU FLICK 2019 .Kindly login with given Username and password<br><br><br>'.'Username :   '.$unique . '<br>Password :   '.$pwd;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   
} else {
  $_SESSION["username1"] = $unique;
    header('Location: events.php');

}


             ?>
             
             <?php

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

         ?>

</body>
</html>