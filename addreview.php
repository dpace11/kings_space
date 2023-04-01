<?php
session_start();
if(isset($_POST['Submit']))
{	
	 $code=$_POST['code'];
	 $pname=$_POST['pname'];
	 $msg=$_POST['message'];
	 $uname=$_SESSION['user'];
	 $conn=mysqli_connect("localhost","root","","kings");
	  $sql="INSERT INTO review VALUES('$uname','$code','$msg','$pname')";
	  $query=mysqli_query($conn,$sql);
	  
	 header('location:info.php?id='.$code);
}
?>