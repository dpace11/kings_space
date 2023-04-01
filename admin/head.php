<?php
session_start();
if(empty($_SESSION['admin']))
 {
 	 header('location:adminlogin.php');

 }
 ?>
<html>
<head>
<link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="Stylee.css" rel="stylesheet" />
<link href="adminstyle.css" rel="stylesheet" type="text/css">

<style>
/*ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #87CEFA;
}

li {
  float: left;
  display: flex;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}


*/
.wrapper {
	width: 100%;
	height: 130px;
	position: relative;
}
 
.wrapper img {
	
	width: 100%;
	height: 100%;
}
 .wrapper h2
   {
     position: absolute;
	 top: 70px;
	 left: 0.5%;
	 color: grey;
	 size:200px;
	 font-size:40px;
	 font-family: Maiandra GD;

	
	 
	 
   }
.wrapper a {
	display: block;
	position: absolute;
	top: 110;
	left:94%;
	color:red;
}
.wrapper i
    {
	  position: absolute;
	  font-size:50px;
	  top:10;
	  left:5%;
	}

	
	.side-nav
{
	list-style: none;
	margin-top: 50px;
	position:fixed;
	top:10;
	background-color: black;
	height: 100%;
	width:15%;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}


li .menu{
	display:inline-block;
	text-decoration:none;
	padding:15px 20px;
	font-size: 15px;
	left: 100px;
	}

li .menu:hover:not(.active){
	background: #48A7AE;
}
li .category{
	position:absolute;
	display:none;
	background: #1f1f1f;
}
#addproduct:hover .category{

	display:block;
	width:150px;
}

.back_frame{
	display: flex;
}
</style>
</head>
<body>
<div class="wrapper">
	<img src="img/logo.png" style="padding-left: 0px;">
	<h2>ADMIN PANEL</h2>
	<a href="../user/new.php">Visit Site</a>
</div>

<div class="back_frame">
		<!-- left block with dashboard-->
		<div class="section1">
		            <div>               
		             <li>   <a class="active" href="adminindex.php" >  <i class="fa fa-bars"></i> Dashboard</a></li>
		            </div>
					
					<div>

		             <li>   <a class="submenu" href="datainsert.php"><i class="fa fa-plus-square"></i>  Add New product</a></li>
		            </div>
					
		            <div>

					<div>

		             <li>   <a class="submenu" href="admindisplay1.php"> <i class="fa fa-book"></i> Manage Product</a></li>
		            </div>
					
						
						<div>
						<li>   <a class="submenu" href="orderdisplay.php"> <i class="fa fa-cart-plus"></i>Orders</a></li>
						</div>
					
		             <li>   <a class="submenu" href="reviews.php"> <i class="fa fa-thumbs-up"></i> Reviews</a></li>
		            </div>
		           
		            <div>  

		              <li>  <a class="submenu" href="changepsw.php"> <i class="fa fa-wrench"></i>Change password</a></li>
		            </div>
		            <div>   

		             <li>   <a class="submenu" href="user.php"> <i class="fa fa-user"></i> Users</a></li>
		            </div>
		           
		            <div>   

		               <li> <a class="submenu" href="logout.php"> <i class="fa fa-log-out"></i> Logout</a></li>
		                
		            </div>




		        </div>

		
</div>

 
</body>
</html>
