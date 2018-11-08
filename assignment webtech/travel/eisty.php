<?php
    mysql_connect("localhost","root","");
	mysql_select_db("travel");
    if(isset($_POST['submit'])){
		
		 $user_name=$_POST['name'];
		 $user_pass=$_POST['pass'];
		 $user_email=$_POST['email'];
		 $cp=$_POST['cp'];
		 
		 if($cp!=$user_pass){
		 
		     echo "<script>alert('Password and confirm password dont match')</script>";
			 exit();
		 
		 }
		 if($user_name==''){
			 
			 echo "<script>alert('Please enter your name!')</script>";
			 exit();
		 }
		  if($user_pass==''){
			 
			 echo "<script>alert('Please enter your password!')</script>";
			 exit();
		 }
		  if($user_email==''){
			 
			 echo "<script>alert('Please enter your password!')</script>";
			 exit();
		 }
		 if(filter_var($user_email,FILTER_VALIDATE_EMAIL ) == false){
			
				 echo "<script>alert('Invalid email format!')</script>";
				  exit();
		}		  
		 $check_email="select * from users where user_email='$user_email'";
		 $run=mysql_query($check_email);
		 if(mysql_num_rows($run)>0){
			 
			  echo "<script>alert('Email $user_email already exists in our database!')</script>";
			 exit();
			 }
		 	 $query="insert into users 
			  (user_name,user_email,user_pass) values ('$user_name','$user_email','$user_pass')";
			   if(mysql_query($query)){
			 
			  echo "Inserted sucessfully";
			 
			 }
	}
?>	  