<?php 
session_start();
//destroy all the sessions then redirect back  to log in
session_abort();
header("Location: ../../FRONTEND/LANDING-PAGE/Login-Page.php");
?>