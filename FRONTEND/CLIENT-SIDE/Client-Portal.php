<?php 
session_start();

$fullname = $_SESSION['user'];

if (!isset($fullname)) {
  header("Location: ../LANDING-PAGE/Login-Page.php");
}
?>

<h2>Welcome to Client Portal <?php echo $fullname ?></h2>

<a href="../../BACKEND/DASHBOARD/logout.php">Logout</a>