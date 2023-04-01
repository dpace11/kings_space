
 <html>    
 <head>
<title>Admin page</title>
	<link href="adminstyle.css" rel="stylesheet" type="text/css">

</head>
<body>
   <?php
$code = $_GET['id'];
include 'head.php';
 $conn=mysqli_connect("localhost","root","","kings");
  $sql="SELECT * FROM clothes";
  $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
       { 
          if($row['code']==$code)
          {
           $name=$row['name'];
           $brand=$row['brand'];
           $price=$row['price'];
           $size=$row['size'];
           $fabric= $row['fabric'];
          }
        }
    }
?>
 <br>
 <center><form action="" method="POST" enctype="multipart/form-data">
   
    <div class="container">
        <div class="row">
		 <center><h3>ENTER INFO<h3></center>
		 </div>
	
		 <div class="row">
      <div class="col-25">
        <label >code</label>
      </div>
      <div class="col-75">
      <?php
	  echo $code;?>
      </div>
    </div>
		 
    <div class="row">
      <div class="col-25">
        <label >name</label>
      </div>
      <div class="col-75">
        <input type="text"  name="name" placeholder="Name.." value="<?php echo $name;?>">
      </div>
    </div>
	
    <div class="row">
      <div class="col-25">
        <label>brand</label>
      </div>
      <div class="col-75">
        <input type="text" name="brand" placeholder="brand.."  value="<?php echo $brand;?>">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label >fabric</label>
      </div>
      <div class="col-75">
         <input type="text" name="fabric"  value="<?php echo $fabric;?>">
      </div>
    </div>
	
    <div class="row">
      <div class="col-25">
        <label >Price</label>
      </div>
      <div class="col-75">
         <input type="text" name="price" placeholder="In Rs...." value="<?php echo $price;?>">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label >size</label>
      </div>
      <div class="col-75">
         <input type="text" name="size"  value="<?php echo $size;?>">
      </div>
    </div>



     
       <input type="submit" value="submit" name="submit"  style=" width: 100px;right: 200px">
      	  
	</form>
</center>
</div>
</body>
<?php
if(isset($_POST['submit'])) 
{     
     $conn1=mysqli_connect("localhost","root","","kings");
       //$target_dir="uploads/";
       //$temp = explode(".", $_FILES["fileToUpload"]["name"]);
       //$target_file=round(microtime(true)) . '.' . end($temp);
       //$uploadOK=1;
     //$code=$_POST['code'];
       $name1=$_POST['name'];
       $brand1=$_POST['brand'];
     $price1=$_POST['price'];
       $fabric1=$_POST['fabric'];
       $size1=$_POST['size'];
       //$category=$_POST['category'];
       //$image=$target_file;
     //$fashion="boy";
     $sql1="UPDATE clothes SET name='$name1',brand='$brand1',fabric='$fabric1',size='$size1',price='$price1' WHERE code='$code'";
     if(mysqli_query($conn1,$sql1))
     {
      //header('Location:admindisplay1.php');
      echo "aa";
      header("location:admindisplay1.php");
      exit;
     }
     Else 
     { 
         echo "An Error has occured";
     }
    
}
?>

</html>

			