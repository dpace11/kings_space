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
<br><br><br><br>


		<h1><p align="center">Update Your Store Here.</p></h1>
<div class="xav">
<table style="border:0px solid black;margin-left:auto;margin-right:auto;">
	<form method="POST" name="pdt-entry" action="pdt-entryp.php">
		<tr>
			<td><label>Product entry date:</label></td>
			<td><input type="date" name="ent-date" id="ent-date" required>
			</td>
		</tr>
		
		<tr><td><label>Product category</label>
		</td><td><select name="pdt-catg" id="pdt-catg" required>
			<option>------</option>
			<option>Watch</option>
			<option>Shirt</option>
			<option>Shoes</option>
			<option>Sunglasses</option>
			<option>Cap</option>
			<option>Shirt</option>
			<option>T-shirt</option>
			<option>Jeans</option>
			<option>Pants</option>
			<option>Trousers</option>
			<option>Sandles</option>
		</select></td></tr>

		<tr><td>
		<label>Product code:</label></td><td>
		<input type="text" name="pd-code" id="pd-code" required></td></tr>

		<tr><td><label>Price Per Piece:</label></td><td>
		<input type="number" name="pdt-price" id="pdt-price" required></td></tr>

		<tr><td><label>Quantity</label></td><td>
		<input type="number" id="pdt-qty" name="pdt-qty" required></td></tr>

		<tr><th colspan="2"><a href="pdt-entryp.php"><input type="submit" name="Submit" id="Submit" value="Submit"></a></th></tr>
	</form>
</table>
</div>
</body>
</html>
