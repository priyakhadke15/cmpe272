<html>
<head>
<title>Smart Agriculture Cloud</title>
<style>
body {
 background-color: lightgrey;
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
}
h2 {
  color: white;
  text-align: center;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}
p {
  font-family: verdana;
  font-size: 20px;
}
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

</style></head>
<body>

<?php
$uName = $pwd = $nameErr = $pwdErr ="";

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
  
  if (strcmp($uName, "admin") !== 0) { 
    echo 'wrong credentials'; 
    } 
    else { 
     if (strcmp($pwd, "admin") !== 0){
     echo 'wrong credentials'; 
     }
     else
      { echo "Successful login";
      header("Location: contact2.php");
      }
} 
}
?>

<h2><form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Username: <input type="text" name="uname">
<span class="error">*<?php echo $nameErr;?></span>
<br><br>
Password: <input type="password" name="password">
<span class="error">*<?php echo $pwdErr;?></span>
<br><br>
<input type="submit" value="submit" name="submit"><br>
</form></h2>
</body></html>