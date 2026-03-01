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

  <!-- ========== HEADER + SIDEBAR ========== -->
  <?php include('../INCLUDES/db-header-sidebar.php'); ?>

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

          <form class="needs-validation" novalidate method="POST" action="">

            <!-- ========== PROFILE PICTURE CARD ========== -->
            <div class="bg-white rounded-3 border p-4 mb-4">
              <h6 class="fw-semibold mb-3">Profile Picture</h6>

              <div class="d-flex flex-column align-items-center gap-3">

                <!-- Avatar -->
                <div class="profile-img">
                  <img src="https://github.com/mdo.png" alt="User" class="rounded-circle" width="120" height="120">
                </div>

                <!-- File Upload -->
                <div>
                  <label for="profileUpload" class="btn btn-secondary btn-sm mb-0">
                    <i class="bi bi-camera me-1"></i> Change Photo
                  </label>
                  <input type="file" id="profileUpload" name="profile_picture" accept="image/*" class="d-none">
                </div>

              </div>
            </div>

            <!-- ========== USER INFORMATION ========== -->
            <div class="bg-white rounded-3 border p-4">
              <h6 class="fw-semibold mb-3">User Information</h6>

              <!-- Name + Email row -->
              <div class="row g-3 mb-3">

                <div class="col-12 col-sm-6">
                  <label class="form-label fw-semibold fs-14">Name</label>
                  <input type="text" class="form-control" name="name" value="Juan Dela Cruz" required>
                  <div class="invalid-feedback">Please provide your name.</div>
                </div>

                <div class="col-12 col-sm-6">
                  <label class="form-label fw-semibold fs-14">Email</label>
                  <input type="email" class="form-control" name="email" value="juan@email.com" required>
                  <div class="invalid-feedback">Please provide a valid email address.</div>
                </div>

              </div>

              <!-- Phone + Address row -->
              <div class="row g-3 mb-3">

                <div class="col-12 col-sm-6">
                  <label class="form-label fw-semibold fs-14">Phone Number</label>
                  <input type="tel" class="form-control" name="phone" value="+63 912 345 6789" required>
                  <div class="invalid-feedback">Please provide a phone number.</div>
                </div>

                <div class="col-12 col-sm-6">
                  <label class="form-label fw-semibold fs-14">Address</label>
                  <input type="text" class="form-control" name="address" value="123 Beach Road, Boracay, Philippines" required>
                  <div class="invalid-feedback">Please provide an address.</div>
                </div>

              </div>

              <!-- Short Bio -->
              <div class="mb-4">
                <label class="form-label fw-semibold fs-14">Short Bio</label>
                <textarea class="form-control" name="bio" rows="4" placeholder="Tell us about yourself..." required>Passionate traveler and resort enthusiast. Love spending time by the ocean and exploring new destinations.</textarea>
                <div class="invalid-feedback">Please enter a short bio.</div>
              </div>

              <!-- Save button -->
              <div class="d-flex justify-content-end gap-2">
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
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