<!DOCTYPE html>
<?php
session_start();
?>
  <head>
    <meta charset="utf-8">
    <title>Kings Space</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>  
    <img src="img/logo.png" style="padding-left: 70px;">
    
   
<div class="login-box">
  <form action="" method="POST">
    <h1 align="center">User Login</h1>
    <div class="textbox">
      <i class="fa fa-user"></i>
      <input type="text" placeholder="Username" required="" name="username">
    </div>

    <div class="textbox">
     <i class="fa fa-lock"></i>
      <input type="password" placeholder="Password" required="" name="password">
    </div>
     <div class="textbox">
     <i class="fa fa-user"></i>
      <input type=" text" placeholder="UserType" required="" name="UserType">
    </div>
    <div>
      <input type="submit" class="btn" value="Sign in" name="submit">
      <a href="register.php">Register</a><br><br>
      <div class="bck"><a href="new.php">Go Back</a></div>
    </div>  
</div>
<?php 
if(isset($_POST['submit']))
{
  
  $user=$_POST['username'];
  $pass=$_POST['password'];
  $ustype=$_POST['UserType'];
   $conn=mysqli_connect("localhost","root","","kings");
    $sql="SELECT * FROM user WHERE name='$user' AND password='$pass' AND UserType='$ustype'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
     {       
   if($row['name']==$user&&$row['password']==$pass&&$row['UserType']==$ustype)
        {
            $_SESSION['user']=$user;
            //  var_dump($ustype) ;die();
            if ($ustype=='admin') {
              header("location:admin/adminindex.php");
            } else {
              header('location:new.php');
            }      
        }
     }
    }
  alrt();    
}
  function alrt()
  {
    echo '<script>';
    echo "alert('Login Fail')";
    echo '</script>';
  }
  ?>
  
  </body>
</html>