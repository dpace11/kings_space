 <html>    
 <head>
<title>Admin page</title>
	<link href="adminstyle.css" rel="stylesheet" type="text/css">

</head>
<?php
$code=$_GET['id'];
include 'head.php';?>
<body>


 <br>
 <center><form action="add.php" method="post" enctype="multipart/form-data">
   
    <div class="container">
        
		 <div class="row">
      <div class="col-25">
        <label >Discount</label>
        <br>
      </div>
      <input type="hidden" name="code" value="<?php echo $code;?>">
      <div class="col-75">
        <input type="number"  name="discount" placeholder="Enter discount in %..">
      </div>
    </div>
		 
   
      <div class="col-80">
       <input type="submit" value="Add " name="submit" style="width:500px;">
      </div>
	  
	 
  </form>
</center>
</div>
<html>
<style>
h2 {
    position: absolute;
    left: 100px;
    top: 150px;
}
</style>

