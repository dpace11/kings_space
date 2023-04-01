<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="Stylee.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="t.css">
   
</head>
<body>
    <div class="topnav">
        <div class="logo">
           <img src="tt.png">
        </div>
		
    </div>



    <section>
 
        <div class="section1">
            <div>               
             <li>   <a class="active" href="#" >  <i class="fa fa-bars"></i> Dashboard</a></li>
            </div>
			
			<div>

             <li>   <a class="submenu" href="#"><i class="fa fa-plus-square"></i>  Add New product</a></li>
            </div>
			
            <div>

			<div>

             <li>   <a class="submenu" href="#"> <i class="fa fa-book"></i> Manage Product</a></li>
            </div>
			
				<div>
				<li>   <a class="submenu" href="#"> <i class="fa fa-calendar"></i> Today's Deal</a></li>
				</div>
				
				<div>
				<li>   <a class="submenu" href="#"> <i class="fa fa-cart-plus"></i>Orders</a></li>
				</div>
			
             <li>   <a class="submenu" href="#"> <i class="fa fa-thumbs-up"></i> Reviews</a></li>
            </div>
           
            <div>  

              <li>  <a class="submenu" href="#"> <i class="fa fa-wrench"></i> Option</a></li>
            </div>
            <div>   

             <li>   <a class="submenu" href="#"> <i class="fa fa-user"></i> Users</a></li>
            </div>
           
            <div>   

               <li> <a class="submenu" href="#"> <i class="fa fa-log-out"></i> Logout</a></li>
                
            </div>




        </div>


<div class="content_header">
<?php
/*
    <div class="content">
        <div class="content1">
            content-one
        </div>

        <div class="content2">
            content-two
        </div>

        <div class="content3">
            content-three
        </div>
        
    </div>
*/
?>
    <div class="content_main">
        <?php $conn=mysqli_connect("localhost","root","","kings");
	  $sql="SELECT * FROM clothes";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0)
	  { 
       ?>
  <h1>PRODUCTS</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
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
		    <th></th> <th></th><th></th> <th></th>
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
		   echo "<td>".$row['fashion']."</td><td>".$row['category']."</td><td>"."<a href='delete.php?id=$pass'><i class='fa fa-trash' style='font-size: 2em;'>Del</i></a>"."</td>";
		   echo "<td><a href='edit.php?id=$pass'><i class='fa fa-edit' style='font-size: 2em;'>Edit</i></a></td>";
		   echo "<td><a href='deal.php?id=$pass'><p style='color:blue;'>Add to today's deal</p></a></td>";
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
	   </tbody>
    </table>
  </div>
    </div>

</div>



</section>

</body>
</html>