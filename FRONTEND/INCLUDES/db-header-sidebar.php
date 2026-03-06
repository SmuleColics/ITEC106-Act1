<?php
session_start();
require "../../BACKEND/INCLUDES/db-con.php";

$fullname = $_SESSION['user'];

if (!isset($fullname)) {
  header("Location: ../LANDING-PAGE/Login-Page.php");
}

?>

<!-- I modified this bootstrap template of sidebar -->
<!-- Sidebar Header  -->
<header class="position-fixed w-100 bg-main-dark top-0 left-0 right-0">
  <div class="d-flex align-items-center gap-2 px-0 ms-3 py-3  border-bottom">
    <a class="navbar-brand d-flex align-items-center text-gray" href="#">
      <img class="logo me-2" src="../IMAGES/LP-IMAGES/Love-Joy-Logo.svg" alt="">
      <span class="fw-bold fs-5">Love Joy's Admin</span>
    </a>
  </div>
</header>

<!-- Sidebar -->
<aside class="position-fixed bg-main-dark start-0 bottom-0 top-0">
  <div class="sidebar d-flex flex-column border-end border-top h-100">

    <!-- Navigation -->
    <nav class="flex-grow-1 p-2 overflow-auto">
      <ul class="list-unstyled mb-0">
        <!-- DASHBOARD -->
        <a href="../DASHBOARD/Dashboard-Page.php" id="dashboard-sidebar" class="nav-link d-flex align-items-center gap-2 px-3 py-2 rounded text-decoration-none text-white">
          <i class="bi bi-speedometer2 fs-5"></i>
          <span>Dashboard</span>
        </a>

        <!-- USERS -->
        <a href="../DASHBOARD/Users-Page.php" id="users-sidebar" class="nav-link d-flex align-items-center gap-2 px-3 py-2 rounded text-decoration-none text-white">
          <i class="bi bi-people-fill fs-5"></i>
          <span>Users</span>
        </a>
      </ul>
    </nav>

    <!-- User Footer -->
    <div class="p-2 border-top">
      <a href="../DASHBOARD/User-Profile.php" class="d-flex align-items-center gap-2 p-2 rounded text-decoration-none text-white">
        <img src="https://github.com/mdo.png" alt="User" class="rounded-circle" width="32" height="32">
        <span class="fw-semibold">Lenard Colico</span>
      </a>
      <a href="../../BACKEND/DASHBOARD/logout.php" class="d-flex align-items-center gap-2 p-2 ms-2  text-decoration-none text-danger">
        <i class="bi bi-box-arrow-right fs-5"></i>
        <span class="fw-semibold">Log out</span>
      </a>
    </div>
</aside>