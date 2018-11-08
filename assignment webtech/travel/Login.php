<?php

session_start();

?>



<html>
   <head>
     <title>Registration form</title>
	</head>
	  <style type='text/css'>
	  body{
		  
		  background:url('orginal.jpg');background-repeat:no-repeat;background-size:100% 100%;
	  }
	  </style>
      <body>
	  <form method='post' action='login.php'>
       <table width='400' border='5' align='center'>
	      <tr>
		    <td colspan='5' align='center'><h1>Login Form</h1></td>
		  </tr>
          		 
          
             <tr>
             <td>Email:</td>
             <td><input type='text' name='email' /></td>
           </tr>
		    <tr>
             <td>User Password:</td>
             <td><input type='password' name='pass' /></td>
           </tr>
             <tr>
               <td colspan='5' align='center'> <input type='submit' name='Login' value='Login' /> </td>
              </tr>
			  </table>
             </form>			  
                <center>
				 <font color='red' size='6'>Not registered yet?</font><a href='registration.php'>Signup Here</a></font>
				 </center>

      </body>
</html>
<?php
    mysql_connect("localhost","root","");
	mysql_select_db("travel");
    if(isset($_POST['Login'])){
		
		$email=$_POST['email'];
		$password=$_POST['pass'];
		
		$check_user="select * from users where user_email='$email' AND user_pass='$password'";
		
		$run =mysql_query($check_user);
        if(mysql_num_rows($run)>0){
			
			$_SESSION['email']=$email;
			echo "<script>window.open('welcome.php','_self')</script>";
			
		}		
		else
		{
			echo "<script>alert('Email or password is not match')</script>";
			
		}
		
		
	}
?>	  