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
<?php
$uName = $pwd = $nameErr = $pwdErr ="";
$cookie_name = "user";
$cookie_value = "admin";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $nameErr = "UserName is required";
  } else {
    $uName = $_POST["uname"];
  }
   
 if (empty($_POST["uname"])) {
    $pwdErr = "UserName is required";
  } else {
    $pwd = $_POST["password"];
  }
 if (strcmp($uName, "admin") == 0 && strcmp($pwd, "admin") == 0 ) { 
      echo "Successful login";
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
      header("Location: contact3.php");
  }
  else
  { 
    echo 'wrong credentials'; 
  }
 
}
?>
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
                        <li><a href="#contact" class="scroll">Contact</a></li>
		</div>
    </nav>
</header>
	 <section class="foot-1 py-5" id="contact">
		<div class="container py-lg-5">
			<div class="row foot-1-top">
				<div class="col-lg-3 col-md-6 col-sm-6 foot-1_grid_left">
					<h4 class="mb-3">Core Engineering</h4>
					<div class="foot-top pt-3">
						<ul id="coreengineeringul"></ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 foot-1_grid_middle">
					<h4 class="mb-3">IoT Managers</h4>
					<div class="foot-top pt-3">
						<ul id="iotmanagersul"></ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--The Login Section -->
	<section class="foot-1 py-5" id="Login">
				<div class="col-lg-6 foot-1_grid_right">
					<h4 class="mb-4">Login</h4>
					<div class="contact_grid_right mt-5 mx-auto text-left">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<div class="row contact_top">
								<div class="col-sm-6">
									<input type="text" name="uname" placeholder="Name">
								</div>
							</div>
							<br>
							<div class="col-sm-6">
									<input type="text" name="password" placeholder="Password" required="">
							</div>
							<br><br>					
							<input type="submit" value="submit">
								
						</form>
			         </div>
				</div>
	</section>
	</html>
	<script>
    // populate list
    function populateList(listId, responseText) {
        var array = String(responseText)
            .split("\n")
            .filter(function(elem) {      // ignore empty element
                return !!elem;
            });
        var ul = document.getElementById(listId);
        array.forEach(function(item) {
            var a = document.createElement('a');
            var linkText = document.createTextNode(item.replace(new RegExp("[0-9]", "g"), ""));  // skip any number at end of file (referred syntax from online documentation )
            a.appendChild(linkText);
            a.href = "#";
            var node = document.createElement("li");
            node.appendChild(a);
            ul.appendChild(node);
        });
    }
    // fetch contacts from php file
	function fetchContacts() {
	    var xhttp = new XMLHttpRequest();
	    var xhttp2 = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                populateList("iotmanagersul", this.responseText);
            }
        };
        xhttp2.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                populateList("coreengineeringul", this.responseText);
            }
        };

        xhttp.open("GET", "readIoTManager.php", true);
        xhttp2.open("GET", "readCoreEngineering.php", true);
        xhttp.send();  
        xhttp2.send();
	}
	
	// invoke fetch contacts
	fetchContacts();
</script>