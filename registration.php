<?php 
      
	  $name=$_POST['name'];
	  $address=$_POST['address'];
	  $email=$_POST['email'];
	  $mobile=$_POST['mobile'];
	  $password=$_POST['password'];
	   $conn=mysqli_connect("localhost","root","","kings");
	   $sql="SELECT * FROM user";
	    $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0)
	  {

	  	 while($row=mysqli_fetch_assoc($result))
		 { 
		 		if($row['name']==$name)
		 		{
		 			header('location:fail.php');

		 		}
		 }
	  }


	   $sql="INSERT INTO user VALUES('$name','$address','$email','$mobile','$password')"; 
	   if(mysqli_query($conn,$sql))
	   {
		   
		   
		    include 'navbar.php';
		    $_SESSION['user']=$name;
		    echo "Id created";
	   }
	   else
	   {
	   	include 'navbar.php';
	   	echo "error";
	   }

 ?>