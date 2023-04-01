<?php
 $conn=mysqli_connect("localhost","root","","kings");

 if (!$conn) 
 {
 	echo "<script>alert('connection error')</script>";
 }

 if ($_POST['submit']) 
 {
 	$a=mysqli_real_escape_string($conn,$_POST['ent-date']);
 	$b=mysqli_real_escape_string($conn,$_POST['pdt-catg']);
 	$c=mysqli_real_escape_string($conn,$_POST['pd-code']);
 	$d=mysqli_real_escape_string($conn,$_POST['pdt-price']);
 	$e=mysqli_real_escape_string($conn,$_POST['pdt-qty']);

 	$sql="INSERT INTO pdt_entry (pdt_ent_date,pdt_catgo,pdt_code,price,qty) VALUES ('$a','$b','$c','$d','$e')";

  $data=mysqli_query($conn,$sql);
 if(!$data)
		{
			echo ("Not inserted");
		}
		else
		{
			echo (" inserted");
			echo "<script>validate();</script>";
		}
 }


?>