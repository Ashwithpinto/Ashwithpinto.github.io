<?php 
  $db = mysqli_connect('localhost', 'root', '', 'email_taken');
  $fname ="";
  $lname ="";
  $email = "";
  $phone ="";
  if (isset($_POST['regg'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
  	$email = $_POST['email'];
    $phone = $_POST['phone'];
  

  	
  	$sql_e = "SELECT * FROM users WHERE email='$email'";
  
  	$res_e = mysqli_query($db, $sql_e);

  	 	
  	if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
           $query = "INSERT INTO newusers ( first,last,email,phone ) 
      	    	  VALUES ('$fname','$lname','$email','$phone')";
           $results = mysqli_query($db, $query);
        
           
                  echo('<script type="text/javascript">window.alert("stored the data now login"); window.location.href="regg.php"</script>'); 

           
  	}
      
  }
?>
