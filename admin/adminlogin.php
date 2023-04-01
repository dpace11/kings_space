<?php
session_start();
?>
<html>
<head>
	<title>login</title>
	 <meta charset="utf-8">
      <link href="style.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		

		
    </style>
</head>
<body>
	 <img src="img/logo.png" style="padding-left: 70px;">
    
<div class="login-box">
	
	<form method="POST" action="" align="center" >
		 <h1>Admin Login</h1>
    <div class="textbox">
      <i class="fa fa-user"></i>
      <input type="text" placeholder="Username" required="" name="user">
    </div>

    <div class="textbox">
     <i class="fa fa-lock"></i>
      <input type="password" placeholder="Password" required="" name="password">
    </div>
    <div>
      <input type="submit" class="btn" name="login">
    
    </div>  
  </form >
</div>


 <?php
  if(isset($_POST['login']))
   { 
   	  $conn=mysqli_connect("localhost","root","","kings");
         $user=$_POST['user'];
	   $password=$_POST['password'];
	    $sql="SELECT * FROM admin";
	   $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0)
	  { 
	    while($row=mysqli_fetch_assoc($result))
		 { 
		  if($row['user']==$user&&$row['password']==$password)
		  {
			   $_SESSION['admin']=$user;
			  	header("location:adminindex.php");
			  
		  }
		 else
		   {
			echo '<script language="javascript">';
			echo 'alert("Wrong Username or password")';
			echo '</script>';
			
			}
		 }
		}
	  }
	
?>	
	
</body>
</html>