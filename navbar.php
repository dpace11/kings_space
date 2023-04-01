 
 <style>@import 'https://fonts.googleapis.com/css?family=Raleway';
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
.cart{
    padding-left: 590px;
    padding-top: -230px;
}
</style>

<?php
 session_start();
 $_SESSION['page']=1;
 if(empty($_SESSION['cart']))
 {
     $_SESSION['no']=0;

 }

?>
<html>
<head>
    <title>King's Space</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="userdrop.css">

    <style>
.mySlides {display:none;}
</style>
<link rel="shortcut icon" href="tt.png" />
</head>

<body>
   
        <div class="gri">
               <u><b><p align="center">Kings Space</p></b></u>     
                </div>
                <div class="container red topBotomBordersOut">
                    <!--<ul class="topic2">-->
                        <a href="new.php" class="menu">Home</a>
                
                    <a class="menu"href="about.php">About us</a>
                    <a class="menu"href="contact.php">Contact</a>
                    
                        <?php
                         if(empty($_SESSION['user']))
                        {
                            
                            echo '<a href="login.php"><i aria-hidden="true"></i> Login </a>';
                            
                            echo '<a href="register.php">Register</a>';
                           
                        }
                        else
                        {
                            
                            echo '<i aria-hidden="true"></i>';
                            ?>
                                <div class="dropdown1">
                                <button onclick="myFunction()" class="dropbtn1"> <?php echo $_SESSION['user'];?></button>
                                <div id="myDropdown1" class="dropdown1-content">
                                &nbsp;
                                 <a href="logout.php">logout</a>
                                 </div>

                                </div>

                                &nbsp;&nbsp;&nbsp;
                            <?php
                            
                            
                        }
                    
                      echo '<a href="cart_display.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>';
                            echo '(';
                             echo $_SESSION['no'];
                             echo ')</a>';
                             ?>


           </div>
        </font>
    </body>
    <script>

             function myFunction() {
         document.getElementById("myDropdown1").classList.toggle("show1");
        }


        window.onclick = function(event) {
         if (!event.target.matches('.dropbtn1')) {
         var dropdowns = document.getElementsByClassName("dropdown1-content");
         var i;
            for (i = 0; i < dropdowns.length; i++) {
             var openDropdown = dropdowns[i];
             if (openDropdown.classList.contains('show1')) {
                openDropdown.classList.remove('show1');
            }
            }
        }
        }
        </script>

</html>


