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