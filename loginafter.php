<!DOCTYPE html>
<html>
<head>  
  <title>Kings Space</title>
  <link rel="stylesheet" type="text/css" href="login.css">  
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

* {
  box-sizing: border-box;
}

.img-container {
  float: left;
  width: 33.33%;
  padding: 5px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
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
    <div class="wwe" style=" font-family: Impacts">
	<h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;Welcome Admin</h1><br>
	

<div class="clearfix">
  <div class="img-container">
  &nbsp;&nbsp;&nbsp;<img src="img/pdent.jpg" alt="Italy" style="width:100%">
  </div>
  <div class="img-container">
  <img src="orderqqq.png" alt="Forest" style="width:100%">
  </div>
  <div class="img-container">
  <img src="img_mountains.jpg" alt="Mountains" style="width:100%">
  </div>
</div>






	<form method="POST">
	<p align="center">
  
    	<br><a href="pdt-entry.php"><input type="button" name="pdt-entry" id="pd-entry" value="Product Entry"></a><br><br>
	<a href="table.php"><input type="button" name="table" id="pd-entry" value="Customer Orders"></a><br><br>
	<a href="cus-sugg.php"><input type="button" name="c_sugg1" value="Customer Suggestion"  style="align=center;"></a></p>
	</form>
	
  </div>
	
 </body>
</html>