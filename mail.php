<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$to='abi0200@hotmail.co.uk'; // Receiver Email ID
		$subject='New Enquiry from your Web Developer Portfolio!';
		$message="Name: ".$name."\n"."Email: ".$email."\n"."Wrote the following: "."\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			header("Location: thank-you.html#contact");
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
