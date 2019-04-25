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
						<li class="mr-lg-4 mr-3"><a href="#services" class="scroll">Services</a></li>
                        <li class="mr-lg-4 mr-3"><a href="#about" class="scroll">About</a></li>
						<li class="mr-lg-4 mr-3"><a href="#news" class="scroll">News</a></li>
                        <li class="mr-lg-4 mr-3"><a href="#contact" class="scroll">Contact</a></li>
                        <li class="mr-lg-4 mr-3"><a href="#UserForm" class="scroll">User</a></li>
		</div>
    </nav>
</header>
	<!--The User section  -->
	<section class="foot-1 py-5" id="UserForm">
				<div class="col-lg-6 foot-1_grid_right">
					<h4 class="mb-4"></h4>
					<div class="contact_grid_right mt-5 mx-auto text-left">
						<form action="" method="post">	
						    <input type="button" onclick="document.getElementById('createUser').style.display = 'block'" value="Create User">
							<input type="button" onclick="document.getElementById('searchUser').style.display = 'block'" value="Search User"> 
						</form>
			         </div>
				</div>
	</section>
   <section class="foot-1 py-5" id="UserForm">
               	<div class="col-md-4 newsgrid1">
				    <fieldset>
              
					<div class="contact_grid_right mt-5 mx-auto text-left">
                	<form id="createUser" action="createUser.php" method="POST" style="display:none">
                	<p><h4 class="mb-4">Create User</h4></p>
                    <p>First Name <input type="text" name="FName"/></p>
                    <p>Last Name <input type="text" name="LName"/></p>
                    <p>Email <input type="text" name="Email"/></p>
                    <p>HomePhone <input type="text" name="HomePhone"/></p>
                    <p>HomeAdd  <input type="text" name="HomeAdd"/></p>
                    <p>HomeCell <input type="text" name="HomeCell"/></p>
                    <p>CreateUser <input type="submit" onclick="createUser.php" name="insert" value="Create User"/></p>
                    </fieldset>
                    </form>
                    </div>
            	</div>
            	<div class="col-md-4 newsgrid2">
				    <fieldset>
                   
					<div class="contact_grid_right mt-5 mx-auto text-left">
                 	<form id="searchUser" action="searchUser.php" method="POST" style="display:none">
                 	<p><h4 class="mb-4">Search User</h4></p>
                     <p>Last Name <input type="radio" name="radio" value="LName">
                        Email <input type="radio" name="radio" value="Email">
                       HomeCell <input type="radio" name="radio" value="HomeCell">
                    <br><br></p>
                    <p><input type="text" name="searchValue"/><input type="submit" onclick="searchUser.php" value="Search User"/></p>
                    </fieldset>
                  </form>
            	  </div>
            	</div>
 </section>
</html>
