<?php
/*
 session_start();
 $code=$_GET['id'];
 $qty=$_GET['qty'];

   
   /* $items = $_SESSION['cart'];
    $cartitems = explode(",", +$items);
    if(in_array($_GET['id'], $cartitems)){
    	header('location: userindex.php?status=incart');
    }else{
    	 $_SESSION['no']++;
    	$items .= "," . $_GET['id'];
    	$_SESSION['cart'] = $items;
    	header('location: userindex.php?status=success');
	
     
     for($i=1;$i<=$_SESSION['no'];$i++)
     {
            if( $_SESSION['cart'][$i]['code']==$code)
            {
                $s=1;
            }
    }

     if($s==1){
        header('location: userindex.php?status=incart');
    }
    else
{
 $_SESSION['no']++; 
 $i=$_SESSION['no'];   
 $_SESSION['cart'][$i]['code']=$code;
  $_SESSION['cart'][$i]['qty']=$qty;
 header('location: userindex.php?status=success');
}*/
 session_start();
if(isset($_POST['submit']))

{
         $code=$_POST['code'];
            for($i=1;$i<=$_SESSION['no'];$i++)
            {
               if( $_SESSION['cart']['code'][$i]==$code)
                {
                $s=1;
                 }
             }

        if($s==1)
        {
        header('location: new.php?status=incart');
        }
       else
        {

          $_SESSION['no']++; 
          $i=$_SESSION['no']; 

         $_SESSION['cart']['qty'][$i]=$_POST['qty'];
          $_SESSION['cart']['code'][$i]= $_POST['code'];
           $_SESSION['cart']['size'][$i]=$_POST['size'];
          header('location: new.php?status=success');
      }
}

?>