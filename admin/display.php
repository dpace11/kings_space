
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 33.33%;
  padding: 5px;
}
</style>
</head>
<body>

<h2>Images Side by Side</h2>
<p>How to create side-by-side images with CSS Flexbox:</p>
<?php
$conn=mysqli_connect("localhost","root","","kings");
$sql="SELECT * FROM clothes";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
		{ 
	        $target_dir="uploads/";
			 $target_file=$target_dir.$row['image'];

			echo '<img src=$target_file >';
		
		}
}
?>
</body>
</html>
