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

<?php
if(!empty($_POST)) {
   $servername = "localhost";
   $username = "priyakha_phplab";
   $password = "phplab$90";
   $database = "priyakha_UserDB";
   $conn = new mysqli($servername, $username, $password, $database);
   $isCreated = "" ;
   $formValid = "" ;

   // Check connection
   if (mysqli_connect_errno())
    { 
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if(isset($_POST['insert'])){
      
      if (!empty($_POST['FName']))       { 
          if (!preg_match("/^[a-zA-Z ]*$/",$_POST['FName'])) {
             $formValid = "Only letters and white space allowed"; }
          else {
             $FName = mysqli_real_escape_string($conn, $_POST['FName']);  }
       }
      if (!empty($_POST['LName']))       {  
           if (!preg_match("/^[a-zA-Z ]*$/",$_POST['LName'])) {
             $formValid = "Only letters and white space allowed"; }
          else {
               $LName = mysqli_real_escape_string($conn, $_POST['LName']);
            }
        }
      if (!empty($_POST['Email']))       { 
         if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
           $formValid = "Invalid email format"; 
          }
         else {
          $Email =  ($_POST['Email']);
         }
        }
      if (!empty($_POST['HomeAdd']))     {   $HomeAdd = mysqli_real_escape_string($conn, $_POST['HomeAdd']);}
      if (!empty($_POST['HomePhone']))   { 
          if (strlen($_POST['HomePhone']) < 10  || strlen($_POST['HomePhone']) > 10 )
            $formValid = "Enter 10 digits Home Phone Number";
          else
            $HomePhone = ($_POST['HomePhone']); }  
      if (!empty($_POST['HomeCell']))    {  
          if (strlen($_POST['HomeCell']) < 10  || strlen($_POST['HomeCell']) > 10 )
             $formValid = "Enter 10 digits Mobile Number";
          else
           $HomeCell = ($_POST['HomeCell']);   }
    }
    if (!empty($FName) && !empty($LName) && !empty($Email) && !empty($HomeAdd) && !empty($HomePhone) && !empty($HomeCell)) {
    $query = "INSERT INTO currentUsers (FName, LName, email, homeAdd, homePhone, cellPhone)
              VALUES ('{$FName}','{$LName}','{$Email}','{$HomeAdd}','{$HomePhone}','{$HomeCell}')";

  // echo $query;
   if ($conn->query($query) == TRUE) {
       $isCreated = "New User $FName Created";
   }
   else
      $isCreated = "Problem with user creation";
      
   }

   mysqli_close($conn);
}
?>
	<section class="foot-1 py-5" id="UserForm">
				<div class="col-lg-6 foot-1_grid_right">
					<h4 class="mb-4"></h4>
					<div class="contact_grid_right mt-5 mx-auto text-left">
						<p><h4><?php echo "$formValid $isCreated" ?></h4></p>
			         </div>
				</div>
	</section>
</body>
</html>