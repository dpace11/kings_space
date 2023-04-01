<html>
<style>
h2 {
    position: absolute;
    left: 100px;
    top: 150px;
}
</style>
<body>
<?php
	include 'head.php';
      $conn=mysqli_connect("localhost","root","","kings");
      $target_dir="uploads/";
      $temp = explode(".", $_FILES["fileToUpload"]["name"]);
      $target_file=round(microtime(true)) . '.' . end($temp);
      $uploadOK=1;
	  $code=$_POST['code'];
       $name=$_POST['name'];
       $brand=$_POST['brand'];
	$price=$_POST['price'];
       $fabric=$_POST['fabric'];
        $size=$_POST['size'];
         $category=$_POST['category'];
        $image=$target_file;
		$fashion=$_POST['fashion'];
			
       $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
         if($imageFileType !="jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif")
           { 
             ?> <br><br><center><h3 style="color:black ;font-size:200%;">Sorry, Invalid Image Format</h3></center>
            <?php $uploadOK=0;
           }
         else  
           { 
	         ?>  <br><br><center><h3 style="color:black;font-size:200%;">The data is Valid.</h3></center>
            <?php
           }
 
         if($uploadOK==0)
           { 
	            ?>  <center><h3 style="color:black;font-size:200%;">Failed to add data</h3></center>
           <?php
           }
         else
           {
             if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$target_file))
                 { 
			         ?><center><h3 style="color:Black ;font-size:200%;">And the data has been uploaded.</h3></center>
                  <?php
	               $sql="INSERT INTO clothes VALUES('$code','$name','$brand','$fabric','$size','$price','$image','$fashion','$category')"; 
	               $query=mysqli_query($conn,$sql);
		}

               else
                 {
                   echo "<h2>Sorry,there was an error while uploading your data.</h2>";
                 }
           }
			  	mysqli_close($conn);
?>
</body>
</html>
