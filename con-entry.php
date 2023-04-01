<?php
 //include 'connection.php'
 $conn=mysqli_connect("localhost","root","","men-store");

 if (!$conn) 
 {
 	echo "<script>alert('connection error')</script>";
 }

 if ($_POST['submit']) 
 {
   $cname=mysqli_real_escape_string($conn,$_POST['username']);
   $cnum=mysqli_real_escape_string($conn,$_POST['phnumber']);
   $cknow=mysqli_real_escape_string($conn,$_POST['know']);
   $csugg=mysqli_real_escape_string($conn,$_POST['suggestion']);

 $sql="INSERT INTO cus_suggestion (username, ph_number,know_us, c_suggestion) VALUES ('$cname','$cnum','$cknow','$csugg')";

 $data=mysqli_query($conn,$sql);
 if(!$data)
		{
			echo '<script>alert("Not inserted")</script>';
		}
		else
		{
			echo '<script>alert(" inserted")</script>';
			echo "<script>validate();</script>";
		}

		
 }
?>