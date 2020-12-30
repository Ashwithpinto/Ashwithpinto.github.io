<?php
  $db = mysqli_connect('localhost', 'root', '', 'email_taken');
 
  $email = "";
  if (isset($_POST['register'])) {
  	$email = $_POST['email'];
    $sql_u = "SELECT * FROM newusers WHERE email='$email'";
  	$sql_e = "SELECT * FROM users WHERE email='$email'";
  	$res_e = mysqli_query($db, $sql_e);
    $res_u = mysqli_query($db, $sql_u);
  	if(mysqli_num_rows($res_e) > 0 OR mysqli_num_rows($res_u) > 0){
  	  
        header("location:regg.php");
  	}else{
        echo '<script>alert("SORRY......! Please check the email properly or spot register ")</script>';  
          
  	}
  }
?>