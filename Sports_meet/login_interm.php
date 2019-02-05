<?php 
session_start();
$_SESSION["username1"] = $_POST['username'];
$_SESSION["password1"] = $_POST['password'];
  $GLOBALS['username'] = $_POST['username'];
  $GLOBALS['password'] = $_POST['password'];
   $conn = new mysqli("localhost","root","","flick");
   $sql = "SELECT * FROM  users WHERE username = '$username' AND  password = '$password'";
    $result = $conn->query($sql);
   $rowcount=mysqli_num_rows($result);
  
  
       if($rowcount=='1')
       {
       	 echo $rowcount;
        header('Location: events.php');
       }
       else
       {
      session_unset(); 
session_destroy(); 
       	?>
       	<script>
       		alert("Either username or password is incorrect");
       		
       	</script>
      <?php
      
       }
?>