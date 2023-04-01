<?php
include 'top.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="Stylee.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="t.css">
   <link href="adminstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="topnav">
        <div class="logo">
           <img src="tt.png">
        </div>
		
    </div>



    <section>
 
        <div class="section1">
            <div>               
             <li>   <a class="active" href="#" >  <i class="fa fa-bars"></i> Dashboard</a></li>
            </div>
			
			<div>

             <li>   <a class="submenu" href="#"><i class="fa fa-plus-square"></i>  Add New product</a></li>
            </div>
			
            <div>

			<div>

             <li>   <a class="submenu" href="#"> <i class="fa fa-book"></i> Manage Product</a></li>
            </div>
			
				<div>
				<li>   <a class="submenu" href="#"> <i class="fa fa-calendar"></i> Today's Deal</a></li>
				</div>
				
				<div>
				<li>   <a class="submenu" href="#"> <i class="fa fa-cart-plus"></i>Orders</a></li>
				</div>
			
             <li>   <a class="submenu" href="#"> <i class="fa fa-thumbs-up"></i> Reviews</a></li>
            </div>
           
            <div>  

              <li>  <a class="submenu" href="#"> <i class="fa fa-wrench"></i> Option</a></li>
            </div>
            <div>   

             <li>   <a class="submenu" href="#"> <i class="fa fa-user"></i> Users</a></li>
            </div>
           
            <div>   

               <li> <a class="submenu" href="#"> <i class="fa fa-log-out"></i> Logout</a></li>
                
            </div>




        </div>

<?php

?>
    <div class="content_main">
       <center><form action="adminget.php" method="post" enctype="multipart/form-data">
   
    <div class="container">
        <div class="row">
		 <center><h3>ENTER INFO<h3></center>
		 </div>
	
		 <div class="row">
      <div class="col-25">
        <label >Code</label>
      </div>
      <div class="col-75">
        <input type="text"  name="code" placeholder="code..">
      </div>
    </div>
		 
    <div class="row">
      <div class="col-25">
        <label >Name</label>
      </div>
      <div class="col-75">
        <input type="text"  name="name" placeholder="Name..">
      </div>
    </div>
	
    <div class="row">
      <div class="col-25">
        <label>Brand</label>
      </div>
      <div class="col-75">
        <input type="text" name="brand" placeholder="brand..">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label >Fabric</label>
      </div>
      <div class="col-75">
         <input type="text" name="fabric">
      </div>
    </div>
	
    <div class="row">
      <div class="col-25">
        <label >Price</label>
      </div>
      <div class="col-75">
         <input type="text" name="price" placeholder="In Rs....">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label >Size</label>
      </div>
      <div class="col-75">
         <input type="text" name="size" >
      </div>
    </div>


    
<div class="row">
      <div class="col-25">
        <label>Fashion</label>
      </div>
      <div class="col-75">
       <select name ="fashion">
        <option value="men">men</option>
      </select>
      </div>  
    </div>

    <div class="row">
      <div class="col-25">
        <label>Category</label>
      </div>
      <div class="col-75">
	     <select name ="category">
        <option value="shirt">shirt</option>
        <option value="pant">pant</option>
        <option value="jacket">jacket</option>
       <option value="tshirt">tshirt</option>
	   <option value="shoes">shoes</option>
      </select>
      </div>	
    </div>




	<div class="row">
      <div class="col-25">
        <label>Photo</label>
      </div>
      <div class="col-75">
    <input type="file" name="fileToUpload" id="fileToUpload">
	</div>
    </div
	

      <div class="col-80">
       <input type="submit" value="Add Data" name="submit" style="width:500px;">
      </div>
	  
	 
  </form>
</center>
</div>

</div>



</section>

</body>
</html>