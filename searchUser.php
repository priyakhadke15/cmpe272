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
   $searchBy = $_POST['radio'];
   $searchValue = $_POST['searchValue'];
   $output = "";

   //connection
   $conn = new mysqli($servername, $username, $password, $database);
   // Check connection
   if (mysqli_connect_errno())
    { 
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
   $query = "SELECT * FROM currentUsers where "."$searchBy = '$searchValue'";
   
   
   
  if ($result = $conn->query($query)) {
        $output = "<table border='1'>".
                "<tr>".
                    "<th>First Name</th>".
                    "<th>Last Name</th>".
                    "<th>Email</th>".
                    "<th>Address</th>".
                    "<th>Residence phone</th>".
                    "<th>Cell Phone</th>".
                "</tr>";
    while ($row = $result->fetch_assoc()) {
         $output .= "<tr>".
            "<td>" .$row["FName"]."</td>".
             "<td>".$row["LName"]. "</td>".
             "<td>".$row["email"]."</td>".
             "<td>".$row["homeAdd"]. "</td>".
             "<td>".$row["homePhone"]. "</td>".
             "<td>".$row['cellPhone']. "</td>".
         "</tr>";
    }
    /* free result set */
    $result->free();
}
  mysqli_close($conn);
}
?>
<section class="foot-1 py-5" id="UserForm">
	<div class="col-lg-6 foot-1_grid_right">
		<h4 class="mb-4"><?php echo "showing search results for $searchValue" ?></h4>
		<div class="contact_grid_right mt-5 mx-auto text-left">
        <h4><?php echo "$output" ?></h4>
     </div>
	</div>
</section>
</body>
</html>