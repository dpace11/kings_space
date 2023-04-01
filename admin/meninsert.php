 <html>    
 <head>
<title>Admin page</title>
	<link href="adminstyle.css" rel="stylesheet" type="text/css">

</head>
<?php
include 'head.php';?>
<body>


 <br>
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
</body>


</html>