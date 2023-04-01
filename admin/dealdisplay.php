   <html>
   <head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="t1.css">
	<style>
   </style>
  </head>
   <body >
 <font face="Maiandra GD">  	
	   <?php
	        
		  echo "<div>";
		  include 'head.php';
		  echo "</div>";
	       $conn=mysqli_connect("localhost","root","","kings");
		  $sql="SELECT * FROM todaydeal";
		  $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0)
		  { 
	       ?>
	<section>
	  
	  <div class="tbl-header">
	    <table cellpadding="0" cellspacing="0" border="0" border-spacing="10px">
	      <thead>
	        <tr>
	          <th>Code</th>
	          <th>Name</th>
	          <th>Brand</th>
	          <th>Fabric</th>
	          <th>Size</th>
			  <th>Price</th>
			  <th>Fashion</th>
			  <th>Category</th>
			   <th>Discount</center></th>
	        </tr>
	      </thead>
	    </table>
	  </div>
	  <div class="tbl-content">
	    <table cellpadding="0" cellspacing="0" border="0">
	    <?php
		    while($row=mysqli_fetch_assoc($result))
			 { 
			   	echo "<tr>";
			   echo "<td>".$row['code']."</td><td>".$row['name']."</td><td>".$row['brand']."</td>";
			   echo "<td>".$row['fabric']."</td><td>".$row['size']."</td><td>".$row['price']."</td>";
			   $pass=$row['code'];
			   echo "<td>".$row['fashion']."</td><td>".$row['category']."</td><td>".$row['discount']."</td><td><a href='deletedeal.php?id=$pass'><i class='fa fa-trash' style='font-size: 2em;'>Del</i></a>"."</td>";
			   echo "</tr>";	
		
			  }
			 /* while($row = mysqli_fetch_row($result))
	           {
	               echo "<tr>";


	             foreach($row as $cell)
	             echo "<td>$cell</td>";
		        
				echo "</tr>\n";
			   }*/
		   }?>
		   
	    </table>
	  </div>
	  </section>
	 </font>
	  </body>
	  </html>
     