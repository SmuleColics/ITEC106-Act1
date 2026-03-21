<?php 
// <!-- ========== HEADER + SIDEBAR ========== -->
include('../INCLUDES/db-header-sidebar.php');
require "../../BACKEND/INCLUDES/session_msg.php";

$fullname = $_SESSION['fullname'];
$user_id = $_SESSION['user_id'];

// Retrieve data sa database
$sql = "SELECT * FROM tbl_users WHERE user_id = '$user_id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

// Set of profile pic - use default if empty
if (!empty($user['profile_pic'])) {
  $profile_src =  "../../BACKEND/UPLOADS/" . $user['profile_pic'];
} else {
  $profile_src = "https://github.com/mdo.png";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Love Joy's Admin — Profile</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- Website Icon -->
  <link rel="icon" type="image/svg+xml" href="../IMAGES/LP-IMAGES/Love-Joy-Logo.svg">

  <!-- CSS LINKS -->
  <link rel="stylesheet" href="../CSS/DB-CSS/Dashboard-Page.css">
  <link rel="stylesheet" href="../INCLUDES/utilities.css">
</head>

<body class="bg-db">
  <!-- ========== MAIN CONTENT ========== -->
  <main class="p-4">

    <div class="container-xxl">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">

          <!-- Page heading -->
          <div class="mb-4">
            <h2 class="mb-1">My Profile</h2>
            <p class="mb-0 text-muted fs-14">Manage your personal information.</p>
          </div>

          <form class="needs-validation" novalidate method="POST" action="../../BACKEND/DASHBOARD/be-user-profile.php" enctype="multipart/form-data">

            <!-- ========== PROFILE PICTURE CARD ========== -->
            <div class="bg-white rounded-3 border p-4 mb-4">
              <h6 class="fw-semibold mb-3">Profile Picture</h6>

              <div class="d-flex flex-column align-items-center gap-3">

                <!-- Avatar -->
                <div class="profile-img">
                  <img src="<?= $profile_src ?>" alt="User" class="rounded-circle" width="120" height="120">
                </div>

                <!-- File Upload -->
                <div class="d-flex align-items-center flex-column justify-content-center">
                  <input type="file" id="profileUpload" name="profile_pic" accept="image/*" class="form-control form-control-sm mb-2">

                  <button type="submit" name="upload_pic" class="btn btn-primary btn-sm">
                    <i class="bi bi-upload mx-auto"></i> Upload Photo
                  </button>
                </div>

              </div>
            </div>

            <!-- ========== USER INFORMATION ========== -->
            <div class="bg-white rounded-3 border p-4">
              <h6 class="fw-semibold mb-3">User Information</h6>

              <!-- Name & Email row -->
              <div class="row g-3 mb-3">

                <div class="col-12 col-sm-6">
                  <label class="form-label fw-semibold fs-14">Name</label>
                  <input type="text" class="form-control" name="fullname" value="<?= htmlspecialchars($user['fullname']) ?>" required>
                  <div class="invalid-feedback">Please provide your name.</div>
                </div>

                <div class="col-12 col-sm-6">
                  <label class="form-label fw-semibold fs-14">Email</label>
                  <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
                  <div class="invalid-feedback">Please provide a valid email address.</div>
                </div>

                <hr class="mt-4">
                
                <h6 class="fw-semibold mt-0">Change Password</h6>
                <!-- Current & New Password -->
                <div class="col-12">
                  <label class="form-label fw-semibold fs-14">Current Password</label>
                  <input type="password" class="form-control" name="current_password"
                    placeholder="••••••••">
                </div>
                <div class="col-12 col-sm-6">
                  <label class="form-label fw-semibold fs-14">New Password</label>
                  <input type="password" class="form-control" name="new_password"
                    placeholder="••••••••">
                </div>
                <div class="col-12 col-sm-6">
                  <label class="form-label fw-semibold fs-14">Confirm Password</label>
                  <input type="password" class="form-control" name="confirm_password"
                    placeholder="••••••••">
                </div>

                <!-- Save button -->
                <div class="d-flex justify-content-end gap-2">
                  <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                  <button type="submit" name="save_changes" class="btn btn-primary">Save Changes</button>
                </div>

              </div>

          </form>

        </div>
      </div>
    </div>

  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Form Validation Script -->
  <script>
    (() => {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>

</body>

</html>