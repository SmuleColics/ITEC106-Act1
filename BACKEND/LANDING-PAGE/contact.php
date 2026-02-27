<?php 
session_start();
require "../INCLUDES/db-con.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $sql = "INSERT INTO tbl_contact (fullname, email, message) VALUES ('$fullname', '$email', '$message')";

  if ($conn->query($sql)) {
    $_SESSION['successMsg'] = "Sent sucessfully.";
  } else {
    $_SESSION['errorMsg'] = "Failed to send message.";
  }

  header("Location: ../../FRONTEND/LANDING-PAGE/Contact-Page.php");
  exit();
}

?>