<?php
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['message'];
	$to='koustavkanakapd@gmail.com';
	$subject='Form submission';
	$message="Name: ".$name."\n"."Wrote the following :"."\n".$msg;
    $headers="From :".$email;
    if(mail($to, $subject, $message, $headers))
    {
    	echo "<h1>Succesfully submitted<h1> by".$name ;
    }
    else
    {
    	echo "Something went wrong";
    }
}
?>