﻿
<?php

session_start();
if(!$_SESSION['email']){
	
	header("location: login.php");
	
}
?>


<html>
  <head>
    <title>welcome.php</title>
  </head>
      <style type='text/css'>
      body{
	  
	  background:url('green.jpg');background-repeat:no-repeat;background-size:100% 100%;
	  
	  }	  
	  </style>
	   <body><b>Welcome:</b><br>
	   <font color='red' size='5'>
	   <?php echo $_SESSION['email']; ?>
	   </font>
	    <table width='800' align='center' border='5'>
		      <tr bgcolor='yellow'>
			   <th>name/th>
			   <th>locations</th>
			    <th>cost</th>
			   <th>members</th>
			   <th>duration</th>
			   
			   
			    
	
			
			  </tr>
              <tr>
	   <?php
 mysql_connect("localhost","root","");
	mysql_select_db("travel");
	
	$query = "select * from package";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $name= $row[0];
	  $locations =$row[1];
	    $cost= $row[2];
	  $members=$row[3];
	  $duration=$row[4];
	
		
		

?>
          <td><?php echo $name; ?></td>
		  <td><?php  echo $locations; ?></td>
		  <td><?php echo $cost; ?></td>
		  <td><?php  echo $members; ?></td>
		  <td><?php echo $duration; ?></td>
		  
		  
		  
		   

              </tr>		

	<?php } ?>	  
		   
	     <h1 align='right' style='margin-right:50px;margin-top:50px;'>
             <a href='logout.php'>logout Here</a></h1>		 
		  
		</body>
        </html>		