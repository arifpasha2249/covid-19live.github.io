<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css">
    <title>COVID-19</title>
  </head>
<body>
   <!-----------------------TOP-NAV---------------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ml-auto" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active ">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Coded By Arif</a>
    </div>
  </div>
</nav>
      
    </ul>
  </div>
</nav>
<!---------------------------END-NAV--------------------------------->

<br>
<center><h1>COVID-19 INDIA LIVE CASES</h1></center>
<br>


<section class="corona_update container-fluid">
	<div class="table-responsive">
		
         <table class="table table-bordered table-striped text-center" id="tbval">
         	
         	<tr>
         		<th class="text-capitalize">lastupdatedtime</th>
         		<th class="text-capitalize">state</th>
         		<th class="text-capitalize">confirmed</th>
         		<th class="text-capitalize">active</th>
         		<th class="text-capitalize">recovered</th>
         		<th class="text-capitalize">deaths</th>



         	</tr>
          

 <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data , true);


//echo "<pre>";
//print_r($coronalive);

//echo "</prv>";


$statescount = count($coronalive['statewise']);


$i=1;

while ( $i < $statescount) {

     ?>

        <tr>
         		<th><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></th>
         		<th><?php echo $coronalive['statewise'][$i]['state']?></th>
         		<th><?php echo $coronalive['statewise'][$i]['confirmed'] ?></th>
         		<th><?php echo $coronalive['statewise'][$i]['active']?></th>
         		<th><?php echo $coronalive['statewise'][$i]['recovered']?></th>
         		<th><?php echo $coronalive['statewise'][$i]['deaths']?></th>
         	
         	</tr>
     


	<!------------------ echo $coronalive['statewise'][$i]['lastupdatedtime'] ."<br>"
	;
	echo $coronalive['statewise'][$i]['state'] ."<br>"
	;
	echo $coronalive['statewise'][$i]['confirmed'] ."<br>"
	;
	echo $coronalive['statewise'][$i]['active'];
	echo $coronalive['statewise'][$i]['recovered'] ."<br>"
	;
	echo $coronalive['statewise'][$i]['deaths'] ."<br>"  
	;
	------------>
<?php
	$i++;
}


//echo $coronalive['statewise'] [1]['state'];

 ?>

         </table>

	</div>

</section>

<br>
<nav class="navbar navbar-bottom navbar-light bg-light">
  <a class="navbar-brand" href="#">Design By Arif </a>
  <p>copyrights by Covid-19</p>
</nav>

</body>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





</html>