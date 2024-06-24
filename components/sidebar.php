<div class="container-fluid bg-dark d-none d-lg-block" style="height: 100%;">
  <div class="container text-white py-5">
    <?php
    // Get the current hour
    $current_hour = date('H');

    // Define greetings based on the time of the day
    if ($current_hour < 12) {
      $greeting = "Good morning <i class='ms-3 fa-solid fa-mug-saucer'></i>";
    } elseif ($current_hour > 18) {
      $greeting = "Good afternoon <i class='ms-3 fa-regular fa-sun'></i>";
    } else {
      $greeting = "Good evening <i class='ms-3 fa-solid fa-cloud-moon'></i>";
    }

    // Output the greeting
    echo '<h3>' . $greeting . '</h3>';

    $getDate = date('M d Y');

    echo $getDate
    ?>
    <hr>

    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <div class="navbar-nav flex-column fs-4">
          <a class="nav-link active text-white" aria-current="page" href="../pages/dashboard.php">Dashboard</a>
          <a class="nav-link text-white" href="../pintig-palay/index.php"><i class="fa-solid fa-bowl-rice"></i> Pintig Palay</a>
          <a class="nav-link text-white" href="../lending/index.php"><i class="fa-solid fa-money-bill"></i> Lending</a>
        </div>
      </div>
    </nav>
  </div>
</div>


<!-- Navbar toggler for mobile -->
<div class="offcanvas offcanvas-start text-white bg-dark" tabindex="-1" id="sidebarSupportedContent" aria-labelledby="sidebarSupportedContentLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title text-white" id="sidebarSupportedContentLabel">HD Company</h5>
    <hr>
  </div>
  <div class="offcanvas-body">
    <?php
    // Get the current hour
    $current_hour = date('H');

    // Define greetings based on the time of the day
    if ($current_hour < 12) {
      $greeting = "Good morning <i class='ms-3 fa-solid fa-mug-saucer'></i>";
    } elseif ($current_hour > 18) {
      $greeting = "Good afternoon <i class='ms-3 fa-regular fa-sun'></i>";
    } else {
      $greeting = "Good evening <i class='ms-3 fa-solid fa-cloud-moon'></i>";
    }

    // Output the greeting
    echo '<h3>' . $greeting . '</h3>';

    $getDate = date('M d Y');

    echo $getDate
    ?>
    <hr>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <div id="sidebarSupportedContent">
          <div class="navbar-nav flex-column fs-4">
            <a class="nav-link active text-white" aria-current="page" href="#">Dashboard</a>
            <a class="nav-link text-white" href="../pages/pintig-palay.php"><i class="fa-solid fa-bowl-rice"></i> Pintig Palay</a>
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-money-bill"></i> Lending</a>
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-money-bill"></i> Home</a>
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-money-bill"></i> Reports</a>
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-money-bill"></i> Clients</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar content -->
  </div>
</div>
