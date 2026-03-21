<?php
session_start();
require "../INCLUDES/db-con.php";

$user_id = $_SESSION['user_id'];

if (isset($_POST['upload_pic'])) {

  $file_name = $_FILES['profile_pic']['name'];
  $tmp_name = $_FILES['profile_pic']['tmp_name'];
  $file_size = $_FILES['profile_pic']['size'];

  // extract file extension
  $file_extract = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

  // set allowed img type
  $allowed_types = ['jpg', 'png', 'webp'];

  if (!in_array($file_extract, $allowed_types)) {
    $_SESSION['errorMsg'] = "Invalid file type. Only JPG, PNG, and WEBP are allowed";
    header("Location: ../../FRONTEND/DASHBOARD/User-Profile.php");
    exit();
  }

  if ($file_size > 2000000) {
    $_SESSION['errorMsg'] = "File size too large. Maximum allowed size is 2MB.";
    header("Location: ../../FRONTEND/DASHBOARD/User-Profile.php");
    exit();
  }

  // create a unique file name
  $new_file_name = time() . "_" . $file_name;

  // upload location
  $upload_location = "../UPLOADS/" . $new_file_name;

  // move file to location
  move_uploaded_file($tmp_name, $upload_location);

  $sql = "UPDATE tbl_users SET profile_pic = '$new_file_name' WHERE user_id = '$user_id'";

  $conn->query($sql);

  $_SESSION['successMsg'] = "Profile picture updated successfully!"; // ✅ ADDED
  header("Location: ../../FRONTEND/DASHBOARD/User-Profile.php");
  exit();
}

// update user information
if (isset($_POST['save_changes'])) {

  $fullname = $_POST['fullname'];
  $email = $_POST['email'];

  $current_password = $_POST['current_password'];
  $new_password = $_POST['new_password'];
  $confirm_password = $_POST['confirm_password'];

  $sql = "UPDATE tbl_users SET fullname = '$fullname', email = '$email'";

  if (!empty($current_password) || !empty($new_password) || !empty($confirm_password)) {

    $check_sql = "SELECT * FROM tbl_users WHERE user_id = '$user_id'";
    $check_result = $conn->query($check_sql);
    $user = $check_result->fetch_assoc();

    // check current password
    if (!password_verify($current_password, $user['password'])) {
      $_SESSION['errorMsg'] = "Current Password is incorrect";
      header("Location: ../../FRONTEND/DASHBOARD/User-Profile.php");
      exit();
    }

    // check if new password and confirm password match
    if ($new_password != $confirm_password) {
      $_SESSION['errorMsg'] = "New password and confirm password do not match."; // ✅ FIXED message
      header("Location: ../../FRONTEND/DASHBOARD/User-Profile.php");
      exit();
    }

    $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
    $sql .= ", password = '$hashed_new_password'";
  }

  $sql .= " WHERE user_id = '$user_id'";

  $conn->query($sql);

  $_SESSION['fullname'] = $fullname;
  $_SESSION['successMsg'] = "Profile updated successfully!"; // ✅ ADDED
  header("Location: ../../FRONTEND/DASHBOARD/User-Profile.php");
  exit();
}