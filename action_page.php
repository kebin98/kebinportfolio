<?php
	if (isset($_POST['submit'])){
		$forename = $_POST['firstname'];
		$surname = $_POST['surname'];
		$email = $_POST['emailaddress'];
		$message = $_POST['usermessage'];

		$mailtarget = "professionalkevinnguyen@gmail.com";
		$headers = "From: ".$email;
		$txt = "You have received an email from ".$forename."." ".$surname."." ".$email.".\n\n".$message;
		
		mail($mailtarget, "message", $txt, $headers);
		header("Location: index.php?mailsend");
	}

?>