<?php
$cookie_name = 'Service7';
$cookie_lastVisited = 'lastVisited';
$service = [];
$val = "";
setcookie($cookie_name, isset($_COOKIE[$cookie_name]) ? ++$_COOKIE[$cookie_name] : 1);
if(isset($_COOKIE[$cookie_lastVisited])) {
    if(strpos($_COOKIE[$cookie_lastVisited], $cookie_name) === false) {
        $services = explode(",", $_COOKIE[$cookie_lastVisited]);
        if(count($services) >= 5) {
            array_shift($services);
        }
        array_push($services,$cookie_name);
        $val = implode(",", $services);
        setcookie($cookie_lastVisited, $val);
    }
} else {
    setcookie($cookie_lastVisited, $cookie_name);
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
                        <li class="mr-lg-4 mr-3"><a href="#contact" class="scroll">Contact</a></li>
                        <li class="mr-lg-4 mr-3"><a href="#UserForm" class="scroll">User</a></li>
		</div>
    </nav>
</header>
	<!--The User section  -->
	<section class="foot-1 py-5" id="UserForm">
				<!--<div class="col-lg-6 foot-1_grid_right">-->
				<!--	<h4 class="mb-4"></h4>-->
					<!--<div class="contact_grid_right mt-5 mx-auto text-left">-->
						<!--<div class="col-md-4 about-info about-info1">-->
								<span class="fa fa-tint"></span>
								<img src="images/g2.jpg" alt="news image" class="img-fluid">
								<h4>Cattle Montoring</h4>
						<!--		<p>Know your lifestock health remotely</p>-->
						<!--</div>-->
			   <!--     </div>-->
			   <!-- </div>-->
	</section>
   <section class="foot-1 py-5" id="UserForm">
               	<div class="col-md-4 newsgrid1">
                	<p><h4 class="mb-4">IoT Expert Supports</h4></p>
                    <p>1 IoT expert advice is available  </p>
                    <p>2 Select type of sensors to monitor </p>
                    <p>3 Select service level </p>
                </div>
 </section>
</html>
