 <html>
 <head>
  <title>Kings Space</title>
  
    <link rel="stylesheet" href="qwerty.css">
 <style>
 body
  { 
    background-color:#ECF0F1;
  }
  </style>
  </head>
  <body>
  <?php
   include 'top.php';
   $conn = mysqli_connect("localhost","root","","kings");
   if (!$conn)
   {
    die("Connection failed: " . mysqli_connect_error());
    }    
    //$sql = SELECT COUNT(code) FROM history;
    //echo"<a href>";
             
   ?>

  
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">00000</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Report from begining</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">Rs
              
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Report from begining</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">Rs00000</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Report from begining</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
       
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Sales</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
          
            </ul>
            <ul class="details">
            <li class="topic">Customer</li>
           
          </ul>
          <ul class="details">
            <li class="topic">Sales</li>
        
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
           
          </ul>
          </div>
          <ul><div class="button" >
            <?php
            echo"<a href='history.php'>See All</a>";
            ?>
          </div></ul>
        </div>
      
    </div>
      
    </div>
  </body>
  </html>