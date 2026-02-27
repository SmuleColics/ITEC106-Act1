<?php 
session_start();

$fullname = $_SESSION['user'];

if (!isset($fullname)) {
  header("Location: ../LANDING-PAGE/Login-Page.php");
}

?>

<!-- Hindi ko na po ito i d design ma'am. Sa activity 3 ko na lang po i d design yung dashboard. -->
<h1>Admin Dashboard</h1>
<h2>
  Welcome Back, 
  <strong><?php echo $fullname; ?></strong>
</h2>

<a href="../../BACKEND/DASHBOARD/logout.php">
  Log out
</a>