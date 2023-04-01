 <?php
	include "top.php";
?> 
   <html>
   <head>
	<title>Kings Space</title>
	<style>
   </style>
  </head>
   <body >
 <font face="Maiandra GD">  	
	   <?php
	        
		 
	       $conn=mysqli_connect("localhost","root","","kings");
		  $sql="SELECT * FROM user";
		  $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0)
		  { 
	       ?>
	       <br><br><br><br><br><br>
	<section>
	  
	  <div class="tbl-header">
	    <table cellpadding="0" cellspacing="4" border="4" width="80%">
	      <thead>
	        <tr bgcolor="grey">
	         
	          <th>Name</th>
	        
	          <th>Address</th>
	          <th>Mobile no.</th>
	          
			  <th>Email</th>
			 
	        </tr>
	      </thead>
	    
	  </div>
	  <div class="">
	   
	    <?php
		    while($row=mysqli_fetch_assoc($result))
			 { 
			   	echo "<tr>";
			   echo "<td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['mobile']."</td>";
			   echo "<td>".$row['email']."</td>";
			   
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
     