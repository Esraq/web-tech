<html>
   <head>
     
	   <title>Rangpur</title>
	   
   </head>	   
      
      <body>
	      <fieldset>
		     <legend>For booking selecrt</legend>
			 Enter hotel name:
			 <input type="text" name="a">
			  Enter your phone:
			 <input type="text" name="b"><br>
			     Enter booking date<br>
               <input type="date" name="bday"><br><br>
             
			 <input type="submit">
			 
			 
			
			 
		  </fieldset>
          		  
		 
		 
		 
		 
		 
	  	 










<?php
require("mysql-to-json.php");


$jsonData= getJSONFromDB("select * from  rangpur");

$jsn=json_decode($jsonData);


        echo " <table width='800' align='center' border='5'>";
        echo "<tr bgcolor='yellow'>";
		echo "<th>Name</th>";
	    echo "<th>Price</th>";
		echo "<th>location</th>";
	    echo "<th>phone</th>";
		echo "<tr>";
		
for($i=0;$i<sizeof($jsn);$i++){
	    echo "<tr>";
		echo "<td>".$jsn[$i]->name."</td><td> ".$jsn[$i]->price."</td>";
		echo "<td>".$jsn[$i]->location."</td><td> ".$jsn[$i]->phone."</td>";
		echo "</tr>";
}
?>


</body>
</html>