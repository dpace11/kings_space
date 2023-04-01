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
  <?php
           include 'navbar.php';
      ?>
</head>



  <body>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="product.css">
    <script src="https://kit.fontawesome.com/a076d05399.js">

  function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle('active');
  }

    </script>

<body>


           
       <div class="gallery">
           <a href="order.php">
               <img src="images2/Graphitsandcharcoal/Mechanical1.jpg">
               <div class="word"><figcaption>Mechanical Pencil</figcaption></div>
               <div class="desc"><h4>Order now</h4></div>
           </a> 
       </div>
            




</div>  
</div>
</div>
  <div class="copy" align="center" >
                   <a href="#"><img src="images1/fb1.png">&nbsp;&nbsp;</a>
                   <a href="#"> <img src="images1/ins 1.png">&nbsp;&nbsp;</a>
                   <a href="#"> <img src="images1/yt 1.png"><br>&nbsp;&nbsp;</a>
                   <u> Copyright &#169; 2020-21 Gallery. All Rights Reserved.20200821.1-release</u>
              </div>

</body>
</html>

  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>













<footer class="footer">
        <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>online shop</h4>
          <ul>
            <li><a href="#">watch</a></li>
            <li><a href="#">bag</a></li>
            <li><a href="#">shoes</a></li>
            <li><a href="#">dress</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
        </div>
          <div class="copy" align="center" >
             
                   <u> Copyright &#169; 2020-21 Gallery. All Rights Reserved.20200821.1-release</u>
              </div>
            
    </footer>          
</body>
</html>