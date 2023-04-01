<?php 
session_start();
$code=$_GET['id'];

for($i=1;$i<=$_SESSION['no'];$i++)
     {
     	 if( $_SESSION['cart']['code'][$i]==$code)
                {
                	 unset($_SESSION['cart']['qty'][$i]);
                	  unset($_SESSION['cart']['size'][$i]);
                	unset($_SESSION['cart']['code'][$i]);
                	for($j=$i;$j<$_SESSION['no'];$j++)
                	{
                		$k=$j+1;
                		$_SESSION['cart']['code'][$j]=$_SESSION['cart']['code'][$k];
                		$_SESSION['cart']['size'][$j]=$_SESSION['cart']['size'][$k];
                		$_SESSION['cart']['qty'][$j]=$_SESSION['cart']['qty'][$k];
	                	}
                	 $_SESSION['no']--; 
                	 header('location:cart_display.php');

                }

      } 
      //$_SESSION['cart']['code']=array_map('array_values', $_SESSION['cart']['code']);
    // $_SESSION['cart']['code'] = array_values($_SESSION['cart']['code']);
     
?>