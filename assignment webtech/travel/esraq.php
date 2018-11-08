<?php
    mysql_connect("localhost","root","");
	mysql_select_db("travel");
    if(isset($_POST['submit'])){
		
		$u_n=$_post['e'];
		$u_m=$_post['p'];
		
		
		
		 	 $query="insert into cdemo 
			  (package_name,phone) values ('$u_n','$u_m')";
			   if(mysql_query($query)){
			 
			  echo "Booked sucessfully";
			 
			 }
			 else{
				 
				 echo "some mistakes happened";
			 }
	}
?>	  