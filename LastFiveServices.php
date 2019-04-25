<?php

//array to store sites visited
$visitedService = [];
$ServiceLink = [];  
$i = 0;
$service = [];

if (isset($_COOKIE['lastVisited']) ) {
    $service = explode(",", $_COOKIE['lastVisited']);
}

foreach($service as $item) {
    if ($item === 'Service1') {
        array_push($visitedService,"Build Smart Farm");  
        array_push($ServiceLink,"BuildSmartFarm.php"); 
    } else if ($item === 'Service2') {
        array_push($visitedService,"Real Time Monitoring");
        array_push($ServiceLink,"RealTimeMonitoring.php");
    } else if ($item === 'Service3') {
        array_push($visitedService,"Choose from Sensors Range"); 
        array_push($ServiceLink,"chooseSensor.php"); 
    } else if ($item === 'Service4') {
        array_push($visitedService,"IoT Expert Support"); 
        array_push($ServiceLink,"IoTExpertSupport.php"); 
    } else if ($item === 'Service5') {
        array_push($visitedService,"Equipment Installation"); 
        array_push($ServiceLink,"EquipmentInstallation.php");     
    } else if ($item === 'Service6') {
        array_push($visitedService,"Smart Devices After sale support"); 
        array_push($ServiceLink,"aftersalesupport.php"); 
    } else if ($item === 'Service7') {
        array_push($visitedService,"Cattle monitoring"); 
        array_push($ServiceLink,"Cattlemonitoringt.php");  
    } else if ($item === 'Service8') {
        array_push($visitedService,"Threshold Alerts"); 
        array_push($ServiceLink,"ThresholdAlerts.php");  
    } else if ($item === 'Service9') {
        array_push($visitedService,"Pay as you use"); 
        array_push($ServiceLink,"Payasyouuse.php");  
    } else if ($item === 'Service10') {
        array_push($visitedService,"Track agri equipment status");
        array_push($ServiceLink,"TrackEquipmentstatus.php");  
    }
}
   
?>  
<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Agriculture Cloud</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Smart Agriculture Cloud" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
    <!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!--web font-->
	  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
	<!--//web font-->
</head>
<body>
<header>	
	<nav class="mnu">
		<div class="container">
            <div class="logo" id="logo">
                <h1><a href="index.html">SmartAgCloud</a></h1>
            </div>
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop">
                    <ul class="menu mt-1">
                        <li class="mr-lg-4 mr-3 active"><a href="index.html">Home</a></li>
						<li class="mr-lg-4 mr-3"><a href="index.html" class="scroll">Services</a></li>
                        <li class="mr-lg-4 mr-3"><a href="#about" class="scroll">About</a></li>
						<li class="mr-lg-4 mr-3"><a href="#news" class="scroll">News</a></li>
                        <li class="mr-lg-4 mr-3"><a href="contact.php" class="scroll">Contacts </a></li>
                        <li class="mr-lg-4 mr-3"><a href="UserForm.php" class="scroll">User</a></li>
                    </ul>
		</div>
    </nav>
</header>
<!-- banner -->
<div class="banner">
	<div class="agile_banner_info">
		<div class="row banner_agile_para">
			<div class="col-lg-9 ban-text">
			<h2>Smart Agriculture Solution </h2>
			</div>	
			<div class="col-lg-3 ban-buton">
				<a href="#services" data-toggle="modal" data-target="#exampleModalCenter" role="button"> Read More </a>
			</div>
		</div>	
	</div>
</div>
<!-- //banner -->
<!-- news-bottom -->
<section class="news-bottom py-5">
	<div class="container py-lg-5">
		<div class="newsgrid1 text-center">
			<div class="w3l_head1">
			 <h2>Last Visited Services</h2>
			  <div class="row about-info-grids text-center py-lg-5 py-3 mt-3">
							<div class="col-md-4 about-info about-info1">
								<span class="fa fa-tint"></span>
								<?php  if (isset($ServiceLink[0]))  { 	echo "<h4><a href=$ServiceLink[0]>  $visitedService[0] </a></h4>" ; }	?>
							</div>
							<div class="col-md-4 about-info about-info2">
								<span class="fa fa-leaf"></span>
								<?php  if (isset($ServiceLink[1]))  { 	echo "<h4><a href=$ServiceLink[1]>  $visitedService[1] </a></h4>" ; }	?>
							</div>
							<div class="col-md-4 about-info about-info3">
								<span class="fa fa-pagelines"></span>
								<?php  if (isset($ServiceLink[2]))  { 	echo "<h4><a href=$ServiceLink[2]>  $visitedService[2] </a></h4>" ; }	?>
							</div>
								<div class="col-md-4 about-info about-info1">
								<span class="fa fa-tint"></span>
								<?php  if (isset($ServiceLink[3]))  { 	echo "<h4><a href=$ServiceLink[3]>  $visitedService[3] </a></h4>" ; }	?>
							</div>
							<div class="col-md-4 about-info about-info2">
								<span class="fa fa-leaf"></span>
								<?php  if (isset($ServiceLink[4]))  { 	echo "<h4><a href=$ServiceLink[4]>  $visitedService[4] </a></h4>" ; }	?>
							</div>
			</div>

			</div>
		</div>
	</div>
</section>
<!-- //news-bottom -->
	        
<body>
</body>
</html>