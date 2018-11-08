<html>
   <head>
     
	   <title>Bandarban transport</title>
	   
   </head>	   
      
      <body>
	      <fieldset>
		     <legend>For booking selecrt</legend>
			 Enter bus name:
			 <input type="text" name="a">
			  Enter your phone:
			 <input type="text" name="b"><br>
			     Enter booking date<br>
               <input type="date" name="bday"><br><br>
             
			 <input type="submit">
			 
			 
			
			 
		  </fieldset>
          		  
		 
		 
		 
		 
		 
	  	 










<?php
require("mysql-to-json.php");


$jsonData= getJSONFromDB("select * from  tkhulna");

$jsn=json_decode($jsonData);


        echo " <table width='800' align='center' border='5'>";
        echo "<tr bgcolor='yellow'>";
		echo "<th>Name</th>";
	    echo "<th>Price</th>";
		echo "<th>location</th>";
	    
		echo "<tr>";
		
for($i=0;$i<sizeof($jsn);$i++){
	    echo "<tr>";
		echo "<td>".$jsn[$i]->name."</td><td> ".$jsn[$i]->root."</td>";
		echo "<td>".$jsn[$i]->cost."</td>";
		echo "</tr>";
}
?>


</body>
</html>