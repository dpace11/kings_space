<?php
include 'top.php';
?>
<html>
<head>
	<style type="text/css">
		.wwe{
			    width: 50%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);

		}
		.wwe i{
			border: solid;
			border-radius: 5px;
			background-color: #0A2558; 
		}
	</style>
</head>
<br><br><br><br><br>
<body background-color="black"><center>
<form action="" method="post" style=" color:brown; ">
	<div class="wwe">
	<center><h2><u>Change your password</u></h2></center><br><br>
Old Password  :   <input type="password" name="oldpass" placeholder="Enter old password"><br><br>
New Password: <input type="password" name="newpass" placeholder="Enter new password"><br><br>
<i>
 <input type="submit" name="submit" value="Submit" >
</i>
</div>
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	
	 $conn=mysqli_connect("localhost","root","","kings");
	 $sql="SELECT * FROM admin";
	 $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0)
		  { 
		  	while($row=mysqli_fetch_assoc($result))
			 { 
			 	if($row['password']==$_POST['oldpass'])
			 	{
			 		$sql = "TRUNCATE TABLE `admin`";
			 		mysqli_query($conn,$sql);
			 	}
			 }
			}
			$new=$_POST['newpass'];
		$sql="INSERT INTO admin VALUES('admin','$new')";
		mysqli_query($conn,$sql);
		echo "<script type='text/javascript'>alert('Password Changed');</script>";
}
?>