<?php include('store.php') ?>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
       <script src="https://form.jotform.com/cardforms/feedbackEmbedButton.min.js"></script>
    <script>
      new JF_FeedbackEmbedButton({
        
        buttonText: "exchange info ",
        buttonFontColor: "#FFFFFF",
        buttonBackgroundColor: "#007FEF",
        buttonSide: "Bottom",
        buttonAlign: "Right",
        buttonIcon: "rate",
        base: "https://form.jotform.com/",
        formId: 203501850057447
      });
    </script>
    <script language="javascript">
function check()
{

 
 
  if(document.form.fname.value=="")
  {
    alert("Plese Enter first Name");
	document.form.fname.focus();
	return false;
  }
     if(document.form.lname.value=="")
  {
    alert("Plese Enter Your Name");
	document.form.lname.focus();
	return false;
  }
    if(document.form.phone.value=="")
  {
    alert("Plese Enter email");
	document.form.phone.focus();
	return false;
  }
    if(document.form.email.value=="")
  {
    alert("Plese Enter phone");
	document.form.email.focus();
	return false;
      e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
}
    </script>
    
</head>
<body>
  <form name="form" method="post" action="regg.php" id="register_form" onSubmit="return check();">
  	<h1>Register</h1>
  	
  	 <input type="text" name="fname" placeholder="NAME" value="<?php echo $fname; ?>">
     <input type="text" name="lname" placeholder="COMPANY NAME" value="<?php echo $lname; ?>">
  	<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <input type="email" name="email" placeholder="EMAIL" value="<?php echo $email; ?>">
      <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
    <input type="text" name="phone" placeholder="DESIGNATION" value="<?php echo $phone; ?>">
  	</div>
  	
  	<div>
  		<button type="submit" name="regg" id="reg_btn">UPDATE INFO</button>
  	</div>
  </form>
  </body>
</html>





   <!--<script src="https://form.jotform.com/cardforms/feedbackEmbedButton.min.js"></script>
    <script>
      new JF_FeedbackEmbedButton({
        
        buttonText: "exchange info ",
        buttonFontColor: "#FFFFFF",
        buttonBackgroundColor: "#007FEF",
        buttonSide: "Bottom",
        buttonAlign: "Right",
        buttonIcon: "rate",
        base: "https://form.jotform.com/",
        formId: 203501850057447
      });
    </script>>
    