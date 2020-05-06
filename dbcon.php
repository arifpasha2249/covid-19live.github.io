
<?php 


$username = "root";
$password = "";
$server = 'localhost';
$db = 'coronadb';

$con=mysqli_connect($server,$username,$password,$db);

if($con){	
      //echo "sucesses";
	   ?>
	   <script>
	   	  alert("connection sucessesful");
	   </script>


	   <?php
}else{
	//echo "uncessesful";
	    ?>
	   <script>
	   	  alert("connection Unsucessesful");
	   </script>


	   <?php

}


?>