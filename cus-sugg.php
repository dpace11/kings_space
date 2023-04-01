<!DOCTYPE html>
<html>
<head>  
  <title>Kings Space</title>
  <link rel="stylesheet" type="text/css" href="new.css">  
  <script>
  function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle('active');
  }
</script>
<header>
  <style type="text/css">
  @import 'https://fonts.googleapis.com/css?family=Raleway';
div.container
{
    font-family: Raleway;
    margin: 0 auto;
    padding: 1em 1em;
    text-align: center;
}
div.container a
{
    color: black;
    text-decoration: none;
    font: px Raleway;
    margin: 0px 10px;
    padding: 10px 10px;
    position: relative;
    z-index: 0;
    cursor: pointer;
}
.red
{
    background: transparent;
}
.orange
{
    background: #ff9800;
}
.deepOrange
{
    background: #ff5722;
}
div.topBotomBordersOut a:before, div.topBotomBordersOut a:after
{
    position: absolute;
    left: 0px;
    width: 100%;
    height: 2px;
    background: black;
    content: "";
    opacity: 0;
    transition: all 0.3s;
}

div.topBotomBordersOut a:before
{
    top: 0px;
    transform: translateY(10px);
}

div.topBotomBordersOut a:after
{
    bottom: 0px;
    transform: translateY(-10px);
}

div.topBotomBordersOut a:hover:before, div.topBotomBordersOut a:hover:after
{
    opacity: 1;
    transform: translateY(0px);
}
.gri p {
  font-family: Vivaldi;
  font-size: 28px;
}
</style>
</header>
</head>



  <body>
<div class="gri">
<u><b><p align="center">Kings Space</p></b></u>
</div>
<div class="container red topBotomBordersOut">
  <a href="new.php">HOME</a>
  <a href="about.php">ABOUT US</a>
  <a href="contact.php">CONTACT</a>
  <a href="login.php">LOGIN</a>
</div>

      


    <br>
    <h2 align="center">SUGESSIONS BY THE REGISTERED CUSTOMERS.</h2><br><br>
    <div class="aakash">
    <table style="border:1px solid grey border-radius=50px;margin-left:auto;margin-right:auto;">
        <tr>
            <th>S.N.&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Customer Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Phone Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>How did they know us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suggestion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            
        </tr>
    </table>
</div>
</body>
</html>
<?php      
    $host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "men-store";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) 
    {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 

         
     	$select="SELECT * FROM cus_suggestion";
     	$query=mysqli_query($con,$select);
     	$nums=mysqli_num_rows($query);
     	while ($res=mysqli_fetch_array($query)) 
        {

?>
     	
        <tr>
            <td><?php echo $res['sn']?></td>
     		<td><?php echo $res['username'] ?></td>
     		<td><?php echo $res['ph_number'] ?></td>
     		<td><?php echo $res['know_us'] ?></td>
     		<td><?php echo $res['c_suggestion'] ?></td>

     	</tr>

    <?php } 
    echo"</table>";
    ?>