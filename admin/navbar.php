
<!-- Sidebar Navigation -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
  body {
    overflow-x: hidden;
  }
  #sidebar {
    min-width: 220px;
    max-width: 220px;
    min-height: 100vh;
    background: #f8f9fa;
    border-right: 1px solid #dee2e6;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1030;
  }
  #sidebar .nav-link {
    color: #333;
    font-weight: 500;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
  }
  #sidebar .nav-link.active, #sidebar .nav-link:hover {
    background: #e9ecef;
    color: #198754;
    border-radius: 5px;
  }
  #sidebar .sidebar-header {
    padding: 1rem;
    text-align: center;
    border-bottom: 1px solid #dee2e6;
  }
  #sidebar .sidebar-footer {
    position: absolute;
    bottom: 1rem;
    width: 100%;
    text-align: center;
  }
  @media (max-width: 991.98px) {
    #sidebar {
      position: static;
      min-width: 100%;
      max-width: 100%;
      min-height: auto;
      border-right: none;
      border-bottom: 1px solid #dee2e6;
    }
    #sidebar .sidebar-footer {
      position: static;
      margin-top: 1rem;
    }
  }
</style>

<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<div id="sidebar">
  <div class="sidebar-header">
    <a href="dashboard.php">
      <img src="img/Logo.png" alt="Fitness+ Logo" width="75">
    </a>
    <h5 class="mt-2 mb-0">Fitness+</h5>
  </div>
  <ul class="nav flex-column p-3">
    <li class="nav-item">
      <a class="nav-link<?php if($currentPage=='dashboard.php') echo ' active'; ?>" href="dashboard.php"><i class="bi bi-house-door me-2"></i>Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link<?php if($currentPage=='walkin.php') echo ' active'; ?>" href="walkin.php"><i class="bi bi-person-walking me-2"></i>Walk-In</a>
    </li>
    <li class="nav-item">
      <a class="nav-link<?php if($currentPage=='members.php') echo ' active'; ?>" href="members.php"><i class="bi bi-people me-2"></i>Members</a>
    </li>
    <li class="nav-item">
      <a class="nav-link<?php if($currentPage=='schedule.php') echo ' active'; ?>" href="schedule.php"><i class="bi bi-calendar-event me-2"></i>Schedule</a>
    </li>
    <li class="nav-item">
      <a class="nav-link<?php if($currentPage=='class.php') echo ' active'; ?>" href="class.php"><i class="bi bi-journal me-2"></i>Class</a>
    </li>
    <li class="nav-item">
      <a class="nav-link<?php if($currentPage=='coach.php') echo ' active'; ?>" href="coach.php"><i class="bi bi-person-badge me-2"></i>Coach</a>
    </li>
  </ul>
  <div class="sidebar-footer">
    <a href="admin_profile.php" class="btn btn-dark mb-2 w-75">Admin Profile</a><br>
    <a href="logout.php" class="btn btn-danger logout-btn w-75">Logout</a>
  </div>
</div>