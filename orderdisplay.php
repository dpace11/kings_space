   <html>
   <head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="t2.css">
	<style>
   </style>
  </head>
   <body >
 <font face="Maiandra GD">  	
	   <?php
	        
		  echo "<div>";
		  include 'navbar.php';
		  echo "</div>";
	       $conn=mysqli_connect("localhost","root","","kings");
		  $sql="SELECT * FROM customer_order where user_name="Mina" and email=""";
		  $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0)
		  { 
	       ?>
	<section>
	  
	  <div class="tbl-header">
	    <table cellpadding="0" cellspacing="0" border="0">
	      <thead>
	        <tr>
	         
	          <th>Code</th>
	          <th>Product Name</th>
	     
	          <th>Qty</th>
	         
	          <th>Size</th>
	     
	          <th>Price</th>

			  <th>Phone no.</th>
			
			  <th id="e">User Name</th>


			  <th id='u'>Email</th>
			  <th></th>
			 
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
			   echo "<td>".$row['code']."</td><td>".$row['product_name']."</td><td>".$row['quantity']."</td>";
			   echo "<td>".$row['size']."</td><td>".$row['price']."</td><td>".$row['phone']."</td>";
			   $pass=$row['email'];
			   $ph=$row['phone'];
			   echo "<td>".$row['user_name']."</td><td>".$row['email']."</td><td id='d'>";
			   // ."<a href='phpmailer/gmail2customer.php?id=$pass&ph=$ph'>Deliver</i></a>"."</td>";

			   
			  
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
