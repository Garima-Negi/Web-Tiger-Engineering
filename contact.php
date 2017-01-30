<html>
<?php
	$conn=mysql_connect("localhost","root","");
	$db=mysql_select_db("tiger",$conn);
	
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$mobno=$_POST['Mobile No.'];
	$cname=$_POST['Company Name'];
    $req=$_POST['Requirement'];
	$que="INSERT INTO `tiger`.`enquiry` (`name`, `email`, `mobno`, `cname`,`req`) VALUES('$name','$email','$mobno','$cname','$req')";
	if(mysql_query($que,$conn))
	
	{
		echo "your inquiry was succesfully submitted. we will contact you shortly!";
		header("Location: index.html");
		die();
		
	}
	else
	{
		echo "Sorry enquiry could not be submitted.";
	}
	mysql_close($conn);

    ?></html>