<?php
session_start();
require "../INCLUDES/db-con.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // get all the information first 
  $fullname = ucfirst($_POST["fullname"]);
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirmPassword"];
  $gender = $_POST["gender"];

  //logic for file upload
  $filename = $_FILES['profilePic']['name'];
  $tempname = $_FILES['profilePic']['tmp_name'];
  $folder = "../UPLOADS/" . $filename;
  move_uploaded_file($tempname, $folder);

  //check if email already exist in the db
  $checkEmail = $conn->query("SELECT user_id FROM tbl_users WHERE email = '$email'");

  if ($checkEmail->num_rows > 0) {
    $_SESSION['errorMsg'] = "Email already exist!";
  } else if ($password !== $confirmPassword) {
    $_SESSION['errorMsg'] = "Password does not match!";
  } else {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO tbl_users (fullname, email, password, gender, profile_pic) VALUES ('$fullname', '$email', '$hashedPassword', '$gender', '$filename')";

    if ($conn->query($sql)) {
      $_SESSION['successMsg'] = "Account created successsfully!";
    } else {
      $_SESSION['errorMsg'] = "Failed to create an account.";
    }
  }

  //redirect back to signup page
  header("Location: ../../FRONTEND/LANDING-PAGE/Signup-Page.php");
  exit();
}
