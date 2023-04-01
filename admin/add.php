<?php
if(isset($_POST['submit']))
 {
 // include 'head.php';
  $discount=$_POST['discount'];
    $code= $_POST['code'];
      $conn=mysqli_connect("localhost","root","","kings");
     // $target_dir="uploads/";
     // $temp = explode(".", $_FILES["fileToUpload"]["name"]);
     // $target_file=round(microtime(true)) . '.' . end($temp);
     // $uploadOK=1;
       $sql="SELECT * FROM clothes where code='$code'";
       $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $name=$row['name'];
       $brand=$row['brand'];
         $price=$row['price'];
       $fabric=$row['fabric'];
        $size=$row['size'];
         $category=$row['category'];
       $image=$row['image'];
        $fashion=$row['fashion'];
       $sqll="INSERT INTO todaydeal VALUES('$code','$name','$brand','$fabric','$size','$price','$image','$fashion','$category','$discount')"; 
        mysqli_query($conn,$sqll);

      header('location:dealdisplay.php');
       
        }
        ?>