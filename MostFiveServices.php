<?php

//array to store sites visited
$mostvisitedService = [];
$ServiceLink = [];  
$VistCount = [];
$i = 0;
$age = [];

$links = [];
$titles = [];
$var = "";
$arr = [];
$val = "";

for($i=1;$i<11;$i++) {
    $var = 'Service'.$i;
    $val = isset($_COOKIE[$var]) ? $_COOKIE[$var] : -1;
    array_push($arr, [$var, $val]);
}

usort($arr, function($a, $b) {
    return $b[1] - $a[1];
});
for($i=0;$i<5;$i++) {
    switch($arr[$i][0]) {
        case "Service1":
            array_push($titles,"Build Smart Farm");
            array_push($links, "BuildSmartFarm.php");
            break;
        case "Service2":
            array_push($titles,"Real Time Monitoring");
            array_push($links, "RealTimeMonitoring.php");
            break;
        case "Service3":
            array_push($titles,"Choose from Sensors Range");
            array_push($links,"chooseSensor.php");
            break;
        case "Service4":
            array_push($titles,"IoT Expert Support");
            array_push($links,"IoTExpertSupport.php");
            break;
        case "Service5":
            array_push($titles,"Equipment Installation");
            array_push($links,"EquipmentInstallation.php");
            break;
        case "Service6":
            array_push($titles,"Smart Devices After sale support");
            array_push($links,"aftersalesupport.php");
            break;
        case "Service7":
            array_push($titles,"Cattle monitoring");
            array_push($links,"Cattlemonitoringt.php");
            break;
        case "Service8":
            array_push($titles,"ThresholdAlerts.php");
            array_push($links,"ThresholdAlerts.php");
            break;
        case "Service9":
            array_push($titles,"Pay as you use");
            array_push($links,"Payasyouuse.php");
            break;
        case "Service10":
            array_push($titles,"Track agri equipment status");
            array_push($links,"TrackEquipmentstatus.php");
            break;
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
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!--// Meta tag Keywords -->
        <!-- css files -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link rel="stylesheet" href="css/fontawesome-all.css">
        <!-- Font-Awesome-Icons-CSS -->
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
                        <li class="mr-lg-4 mr-3"><a href="#services" class="scroll">Services</a></li>
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
                </div>
            </div>
        </div>
        <!-- //banner -->
        <!-- news-bottom -->
        <section class="news-bottom py-5">
            <div class="container py-lg-5">
                <div class="newsgrid1 text-center">
                    <div class="w3l_head1">
                        <h2>Most Visited Services</h2>
                        <div class="row about-info-grids text-center py-lg-5 py-3 mt-3">
                            <div class="col-md-4 about-info about-info1">
                                <span class="fa fa-tint"></span>
                                <?php  if (isset($links[0]))  { 	echo "<h4><a href=$links[0]>  $titles[0] </a></h4>" ; }	?>
                                
                            </div>
                            <div class="col-md-4 about-info about-info2">
                                <span class="fa fa-leaf"></span>
                                <?php  if (isset($links[1]))  { 	echo "<h4><a href=$links[1]>  $titles[1] </a></h4>" ; }	?>
                            </div>
                            <div class="col-md-4 about-info about-info3">
                                <span class="fa fa-pagelines"></span>
                                <?php  if (isset($links[2]))  { 	echo "<h4><a href=$links[2]>  $titles[2] </a></h4>" ; }	?>
                            
                            </div>
                            <div class="col-md-4 about-info about-info1">
                                <span class="fa fa-tint"></span>
                                <?php  if (isset($links[3]))  { 	echo "<h4><a href=$links[3]>  $titles[3] </a></h4>" ; }	?>
                            </div>
                            <div class="col-md-4 about-info about-info2">
                                <span class="fa fa-leaf"></span>
                                <?php  if (isset($links[4]))  { 	echo "<h4><a href=$links[4]>  $titles[4] </a></h4>" ; }	?>
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