

<!DOCTYPE html>
<html>
<head>
	<title>Kings Space</title>
	<link rel="stylesheet" type="text/css" href="cart_display.css">
	<link rel="stylesheet" type="text/css" href="ne.css">
</head>
<body>
	<?php
include 'navbar.php';
if($_SESSION['no']==0)
{
	echo "<p style='background-color:white;font-size:30px;'> Your Shopping Cart is Empty</p>";

}

else
{
	?>
	
	<div class="cart_bg" style="background-color: white;">
		<div class="cart_div1">
	
			<div class="c1"> Shopping cart</div>
			<div class="c2">Qty</div>
			<div class="c2">Size</div>
			<div class="c2">Price</div>
			<div class="c2">Total</div>
			<div class="c2">Delete</div>
			
		</div>
		<hr>
		<?php
		 $conn=mysqli_connect("localhost","root","","kings");
		 	$grandtotal=0;
		for($i=1;$i<=$_SESSION['no'];$i++)
		{
			  $qty= $_SESSION['cart']['qty'][$i];
			 $size=$_SESSION['cart']['size'][$i];
			$code=$_SESSION['cart']['code'][$i];

       
			     $sql="SELECT * FROM clothes where code='$code'";
			     $result=mysqli_query($conn,$sql);
                 $row=mysqli_fetch_assoc($result);
                 $target_dir="admin/uploads/";
			     $target_file=$target_dir.$row['image'];

		        echo '<div class="cart_div2">';
			    echo '<div class="c21">';?><img src=<?php echo $target_file;?> width="70px" height="80px;"></div>
			    <?php
			    echo '<div class="c22" >'.$row['name'].'</div>';
			    echo '<div class="c23">'.$qty.'</div>';
			    echo '<div class="c23">'.$size.'</div>';
			    echo '<div class="c23">Rs.'.$row['price'].'</div>';
			    $cost=$qty*$row['price'];
			    echo '<div class="c23">'.$cost.'</div>';
			    echo '<div class="c23">';
			    echo "<a href='cartremove.php?id=$code'>";
			    echo '<i class="fa fa-trash"></i></a></div>';
		    
				$grandtotal=$grandtotal+$cost;
		echo '</div><hr>';
		
		}
		?>

	</div>
<br>
	<div class="bot_text">
		Grand Total:<?php echo $grandtotal;?>
	</div>
	<br><br>
	<div class="bot_text2">
		<a href="checkout.php"><button>Checkout</button></a>
	</div>
	<?php

}

echo "<br><br><br><br>";
include 'footer.php';
?>
</body>
</html>