  <html>
   <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    </style>
	
	<link rel="stylesheet" type="text/css" href="sty.css">
 </head>
   <body>

   <?php
   include 'navbar.php';?>
   </form></li></ul></br>
          <ul>
         
           <?php
           include'nav1.php';
           ?>
  </form><?php
   
      $cat = $_GET['id'];
      $p=$_GET['p_id'];
     
      up:
       $start=8*$p-8;
       $conn=mysqli_connect("localhost","root","","kings");
      // $p=$page*6-6;
	  $sql="SELECT * FROM clothes where category='$cat' limit $start,8 ";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0)
	  {
		$c=0;
		
		echo "<center><table cellspacing='50px' ><tr>";
	    while($row=mysqli_fetch_assoc($result))
		 { 
		 		$code=$row['code'];
		 	

	         if($c==4)
			 {
					echo "</tr><tr>";
					$c=0;
			 }
		   
		      $target_dir="admin/uploads/";
			  $target_file=$target_dir.$row['image'];
			  
			   $send=$row['code'];
			   echo"<td><a href='info.php?id=$send'><img src=$target_file width=230 height=250 style='box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.30);border-radius:8px;'></a>";
			   echo "<br><center><span style='color: black; font-size: 20px; font-family:constantia;'>".$row['name']."</span></center><hr></td>";
			  $c++;
			  down:
			  
		  }
	    echo "</table></center>";
	    ?>
	     <center><INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);"><a href="productdisplay.php?id=<?php echo$cat?>&p_id=<?php echo $p+1?>"><button>next</button></a></center>
	     <?php
	   }
     else
     {
     	echo "Empty List";
        echo '<center>	<INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);"></center>';
     }

	   ?>
	  
	   
	  </body></html>
	  	<?php
	   	   include 'footer.php';?>
	  
     