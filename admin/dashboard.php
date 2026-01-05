<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sego Dashboard</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Custom CSS -->
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">

  <div class="sidebar-header">
    <div class="logo-icon">Sg</div>
    <span class="logo-text">Sego</span>
  </div>

  <ul class="sidebar-menu">
    <li class="active">
      <i class="bi bi-house-door"></i>
      <span>Dashboard</span>
    </li>

    <li>
      <i class="bi bi-box-seam"></i>
      <span>Orders</span>
    </li>

    <li>
      <i class="bi bi-basket"></i>
      <span>Menus</span>
    </li>

    <li>
      <i class="bi bi-people"></i>
      <span>Customers</span>
    </li>

    <li>
      <i class="bi bi-graph-up"></i>
      <span>Analytics</span>
    </li>

    <li>
      <i class="bi bi-box-arrow-right"></i>
      <a href="../auth/logout.php">Logout</a>
    </li>
  </ul>
</div>

<!-- MAIN -->
<div class="main" id="main">

  <!-- TOP BAR -->
  <div class="topbar">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <h5 class="m-0">Dashboard</h5>
  </div>

  <!-- DASHBOARD CARDS -->
  <div class="row g-4 mt-4">
    <div class="col-md-3">
      <div class="card-pink">
        <h3>459</h3>
        <p>Total Menus</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-pink">
        <h3>$87,561</h3>
        <p>Total Revenue</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-pink">
        <h3>247</h3>
        <p>Total Orders</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-pink">
        <h3>872</h3>
        <p>Total Customers</p>
      </div>
    </div>
  </div>

  <!-- CHART -->
  <div class="chart-box mt-5">
    <h5>Revenue</h5>
    <canvas id="revenueChart"></canvas>
  </div>

</div>

<!-- TOGGLE SIDEBAR -->
<script>
function toggleSidebar() {
  document.getElementById("sidebar").classList.toggle("collapsed");
  document.getElementById("main").classList.toggle("collapsed");
}
</script>

<!-- CHART SCRIPT -->
<script>
new Chart(document.getElementById('revenueChart'), {
  type: 'line',
  data: {
    labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul'],
    datasets: [{
      data: [600,400,800,300,700,500,900],
      borderColor: '#f06292',
      backgroundColor: 'rgba(240,98,146,0.25)',
      fill: true,
      tension: 0.4
    }]
  },
  options: {
    plugins: { legend: { display: false } }
  }
});
</script>

</body>
</html>
