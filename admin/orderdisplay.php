<?php
   include 'top.php';
?>  
   <html>
   <head>
	<title>Kings Space</title>
	<style>
   </style>
  </head>
   <body >
 <font face="Maiandra GD"> 
 <section><br><br><br><br>
	  
	  <div class="tbl-header">
	    <table cellpadding="0" cellspacing="0" border="2" width="80%">
	      <thead>
	        <tr bgcolor="grey">
	         <b>
	          <th>Code</th>
	          <th>Product Name</th>	     
	          <th>Qty</th>	         
	          <th>Size</th>	     
	          <th>Price</th>
			 	 <th>Phone no.</th>			
			  	 <th id="e">User Name</th>
			 	 <th id='u'>Email</th>
			 	 <th>Status</th>	</b> 
	        </tr>
	      </thead> 	
	   <?php
	        
		 
	       $conn=mysqli_connect("localhost","root","","kings");
		  $sql="SELECT * FROM customer_order";
		  $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0)
		  { 
	       ?>
	
	    
	  </div>
	  <div class="tbl-content">
	    
	    <?php
		    while($row=mysqli_fetch_assoc($result))
			 { 
			   	echo "<tr>";
			   echo "<td>".$row['code']."</td><td>".$row['product_name']."</td><td>".$row['quantity']."</td>";
			   echo "<td>".$row['size']."</td><td>".$row['price']."</td><td>".$row['phone']."</td>";
			   $pass=$row['code'];
			   $ph=$row['phone'];
			   echo "<td>".$row['user_name']."</td><td>".$row['email'];
			   echo "<td><a href='orderdel.php?id=$pass'>delivered</a></td>";
			   //."</td><td id='d'>"."<a href='phpmailer/gmail2customer.php?id=$pass&ph=$ph'>Deliver</i></a>"."</td>";
			   
			  
			   echo "</tr>";	
		
			  }
			
		   }?>
		   
	    </table>
	  </div>
	  </section>
	 </font>
	  </body>
	  </html>
