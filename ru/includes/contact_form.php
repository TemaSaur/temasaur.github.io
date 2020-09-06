<?php

if (isset($_POST['send'])) {
	$name = $_POST["name"];
	$subject = $_POST["subject"];
	$mailFrom = $_POST["e-mail"];
	$message = $_POST["txt"];

	$mailTo = "tema@temasaur.dev";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an e-mail from ".$name.", ".$mailFrom."\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: ../?mailsent");
	
}