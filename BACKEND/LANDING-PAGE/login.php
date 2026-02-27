<?php 
session_start();
require "../INCLUDES/db-con.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // get all the information first 
  $email = $_POST['email'];
  $password = $_POST['password'];

  //check if email exist in the db
  $sql = "SELECT * FROM tbl_users WHERE email = '$email'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    //if email is found, fetch the user data
    $user =  $result->fetch_assoc();

    // verify the input password from hashed password in the db
    if (password_verify($password, $user['password'])) {
      $_SESSION['user'] = $user['fullname']; 
      header('Location: ../../FRONTEND/DASHBOARD/Dashboard-Page.php');
      exit();
    } else {
      $_SESSION['errorMsg'] = "Invalid Password";
    }
  } else {
    $_SESSION['errorMsg'] = "User not found";
  }

  //redirect back to login page
  header('Location: ../../FRONTEND/LANDING-PAGE/Login-Page.php');
  exit();
}



?>