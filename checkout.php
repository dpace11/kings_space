<?php
session_start();

if(empty($_SESSION['user']))
 {
 	 header('location:login.php');
 }

 else
 {
    $conn=mysqli_connect("localhost","root","","kings");
    

    for($i=1;$i<=$_SESSION['no'];$i++)
     {

     	 $code=$_SESSION['cart']['code'][$i];
        $qty= $_SESSION['cart']['qty'][$i];
        $size= $_SESSION['cart']['size'][$i];

         $sqlll="SELECT * FROM clothes where code='$code'";

            $ress=mysqli_query($conn,$sqlll);
             if(mysqli_num_rows($ress)>0)
             {

                 $row=mysqli_fetch_assoc($ress);
                 $cost=$qty*($row['price']-(($row['discount']/100)*$row['price']));
                 
                  $username=$_SESSION['user'];
                  $product_name=$row['name'];
                  $sqll="SELECT *FROM user where name='$username'";
                   $res=mysqli_query($conn,$sqll);
                  $r=mysqli_fetch_assoc($res);
                  $email=$r['email'];
                   $phone=$r['mobile'];

             }

          else
          {
       	 	$sql="SELECT * FROM clothes where code='$code'";
       	 	$result=mysqli_query($conn,$sql);
        	 $row=mysqli_fetch_assoc($result);
       		 $cost=$row['price']*$qty;
         	
         	$username=$_SESSION['user'];
         	$product_name=$row['name'];
         	$sqll="SELECT *FROM user where name='$username'";
          	$res=mysqli_query($conn,$sqll);
         	$r=mysqli_fetch_assoc($res);
         	$email=$r['email'];
          $phone=$r['mobile'];
          }
        $sql="INSERT INTO customer_order VALUES('$code','$product_name','$qty','$size','$cost','$phone','$email','$username')";
       	$query=mysqli_query($conn,$sql);
     }
     unset($_SESSION['cart']);
     header('location:new.php');
 }

?>
