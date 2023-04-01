   <html>
   <head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	$('.deleteRow').click(function(){
   var parent = $(this).parent('tr');
  var rowId  = parent.attr('rel');
  $.ajax({
    type: 'post',
    url: "delete.php",
    data: {id:rowId},
    success: function(){
      parent.remove();
    }
  });
});
  </head>
   <body>
   <?php
       $conn=mysqli_connect("localhost","root","","kings");
	  $sql="SELECT * FROM clothes";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0)
	  { echo "<table border=2><tr rowspan=6>";
        
	    while($row=mysqli_fetch_assoc($result))
		 { 
		    
		   echo "<tr rel=34>";
		   echo "<td>".$row['code']."</td><td>".$row['name']."</td><td>".$row['brand']."</td>";
		   echo "<td>".$row['fabric']."</td><td>".$row['size']."</td><td>".$row['price']."</td>";
		   echo "<td>".$row['fashion']."</td><td>".$row['category']."</td><td>"?><a class="deleteRow"><i class="fa fa-trash"></i></a> <?php "</td>";
	       echo "</tr>";
		  }
	    echo "</table>";
	   }
	   ?>
	  </body>
	  </html>
     