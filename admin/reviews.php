<?php
include "top.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>review display</title>
	<style type="text/css">
		.rev_main1{
			display: inline-flex;
			
			position: absolute;
			top: 23%;
			left: 20%;
			width: 75%;
			height: 10%;
			font-weight: bold;
			
		}
		.rev_main1 .rev_sub1{
			display: inline-flex;
		
			width:20%;

		}
		
		.rev_main1 .rev_sub3{
			display: inline-flex;
			
			width:40%;
		}

		.rev_mid
		{
		  position: absolute;
		  top:40%;
		 height: 100%;
		 left:2%;
		}
		.rev_main2{
			display: inline-flex;
			
			top: -18%;
			margin-left: 20%;
			width: 75%;
			height: 20%;
			
		}


		.rev_main2 .rev_sub1{
			display: inline-flex;
			
			width:20%;
			height: 100%;
		}
		.rev_main2 .rev_sub3{
			display: inline-flex;
			
			width:40%;
			height: 100%;
		}
		}

		}
	</style>
</head>
<body>
	<br><br>
	<table cellpadding="0" cellspacing="4" border="4" width="80%">
	<tr bgcolor="grey">
		<th>Username</th>
		<th>Produc Code</th>
		<th>Message</th>
		<th>Product name</th>
	</tr>
		<?php
			$conn=mysqli_connect("localhost","root","","kings");
			echo $sql="SELECT * FROM review";
			echo '<div class="rev_mid">';
		  	$result=mysqli_query($conn,$sql);
		   	if(mysqli_num_rows($result)>0)
	        {
	           while($row=mysqli_fetch_assoc($result))
				{
					echo "<tr>";
			   		echo "<td>".$row['user_name']."</td><td>".$row['p_id']."</td><td>".$row['message']."</td><td>".$row['p_name']."</td>";
			   		//echo"<a href='delete.php?id=$pass'><i class='fa fa-trash' style='font-size: 2em;'>Del</i></a>";	   		   
			   		echo "</tr>";	
				}
			}
		 
		?>
	</table>

</body>
</html>	