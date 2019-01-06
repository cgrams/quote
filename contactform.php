<?php

if( isset($_POST['submit']) ){

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "admin@portwebsolutions.com.au";
	$headers = "From: ".$mailFrom." ".$name;
	$txt = "You have received an email from ".$name.".\n\n".$message;


	mail($mailTo, $headers, $message );

	if (isset($_POST['submit']))
    {   
    ?>
		<script type="text/javascript">
		window.location = "https://portwebsolutions.com.au/";
		</script>      
    <?php
    }

}