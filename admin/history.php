<?php
include'top.php';
 $conn=mysqli_connect("localhost","root","","kings");
		  $sql="SELECT * FROM history";
		  $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0)
		  { 
?>
<html>
<body>
	<br><br><br>
	<center><b><h3>ALL ORDER LIST </h3></b></center>
<table border="4" cellspacing="2px" cellpadding="2px" width="80%" align="center">
	<tr bgcolor="grey">
		<th>Code</th>
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Size</th>
		<th>Price</th>
		<th>Phone</th>
		<th>User Name</th>
		<th><a href="adminindex.php">Go Back</a></th>
	</tr>
	<?php
		    while($row=mysqli_fetch_assoc($result))
			 { 
			   	echo "<tr>";
			   echo "<td>".$row['code']."</td><td>".$row['product_name']."</td><td>".$row['quantity']."</td>";
			   echo "<td>".$row['size']."</td><td>".$row['price']."</td><td>".$row['phone']."</td>";
			   echo "<td colspan='2'>".$row['user_name']."</td>";
			   echo "</tr>";		
			  }
			
		   }
	?>

	
</table>
</body>
</html>