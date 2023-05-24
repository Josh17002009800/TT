<?php require 'ads/cons.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="topnav">
    <img src="logoito.svg" alt="LOGO" id="disappear">
    <div id="last">
      <img src="gallon2.svg" alt="dp">
      <span>Super Admin</span>
      <i class="bi bi-arrow-down-short" id="rotate"></i>
      <a href="#" id="space"> <i class="bi bi-box-arrow-right" id=""></i> logout</a> <!-- destroy sess-->
    </div>
  </div>

  <!-- side nav -->
  <div class="sidenav">
    <ul id="sidenav">
      <li><a href="index.php" id="extra"><i class="bi bi-grid-1x2"></i>Dashboard</a></li>
      <li><a href="#" id="extra"><i class="bi bi-box-seam"></i> Inventory</a></li>
      <li><a href="sales.php" id="extra"><i class="bi bi-receipt-cutoff"></i> Sales</a></li>
      <li><a href="orders.php" id="extra"><i class="bi bi-droplet-half"></i> Orders</a></li>
      <li><a href="#" id="extra"><i class="bi bi-people"></i>Accounts </a></li>
    </ul>
  </div>

</body>
</html>
