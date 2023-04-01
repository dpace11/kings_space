  <!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 
    <link rel="stylesheet" href="qwerty.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i style='font-size:24px' class='fas'>&#xf447;</i>
      <span class="logo_name">KINGS</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="adminindex.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="datainsert.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add New Product</span>
          </a>
        </li>
        <li>
          <a href="admindisplay1.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Manage Product</span>
          </a>
        </li>
        <li>
          <a href="orderdisplay.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Order</span>
          </a>
        </li>
        <li>
          <a href="reviews.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Rewiew</span>
          </a>
        </li>
        <li>
          <a href="changepsw.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Change Password</span>
          </a>
        </li>
        <li>
          <a href="user.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
       
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
    <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard"></span>
      </div>
      <div class="search-box">
       <a href="../new.php" style="padding-left: 471px; ">Visit Store</a>
      </div>
     
    </nav>


  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
