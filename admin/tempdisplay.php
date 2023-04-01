   <html>
   <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
			.show{ 
				
			}
	.row{
		left: 2px;
		
	}
	</style>
 </head>
   <body>
   <?php
       $conn=mysqli_connect("localhost","root","","kings");
	  $sql="SELECT * FROM clothes";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0)
	  { //echo "<table border=2><tr rowspan=6>";
       // echo '<div class="row"><div class="column"';
		$c=0;
		echo "<div class='show'>";
		//echo "<table><tr>";
	    while($row=mysqli_fetch_assoc($result))
		 { 
	         if($c==3)
			 {
					//echo "</tr><tr>";
					$c=0;
			 }
		    $target_dir="uploads/";
			 $target_file=$target_dir.$row['image'];
			echo "<div class='row'>";
			  echo " <td><img src=$target_file width=200 height=300></td>";
			  $c++;
			  echo "</div>";
		  // echo $row['name']. " ".  $row['author']. " ". $row['price']. " ".  $row['publisher']. " " . $row['language']. " " . $row['description']. " <br>";
         // echo "<td>";
	      // echo "</div>";
		  }
	//echo "</table>";
	   }
	   echo "</div>";
	   ?>
	  </body>
	  </html>
     