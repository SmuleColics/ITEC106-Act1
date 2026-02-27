<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Website Icon -->
  <link rel="icon" type="image/svg+xml" href="../IMAGES/LP-IMAGES/Love-Joy-Logo.svg">
  <!-- CSS LINKS -->
  <link rel="stylesheet" href="../CSS/LP-CSS/Landing-Page.css">
  <link rel="stylesheet" href="../INCLUDES/utilities.css">
  <!-- FontAwesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body style="overflow-x: hidden; overflow-y: auto;">

  <!-- ========== HEADER ========== -->
  <?php include('../INCLUDES/header.php'); ?>

  <main class="container-xxl px-0 bg-semi-white">

    <!-- ========== START OF REGISTRATION SEsCTION ========== -->
    <section class="py-md-5 py-4">
      <div class="d-flex justify-content-center align-items-center py-4">
        <div class="card col-lg-4 px-4 py-3">
          <div class="card-body">

            <div class="text-center mb-4">
              <div class="d-flex justify-content-center mb-3">
                <img class="logo me-2" src="../IMAGES/LP-IMAGES/Love-Joy-Logo.svg" alt="">
              </div>

              <h5 class="card-title fw-bold">Create Your Account</h5>
              <p class="card-text text-secondary">Join us and start booking your dream getaway</p>
            </div>

            <?php
            //Display of error and success message
            require "../../BACKEND/INCLUDES/session_msg.php";
            ?>

            <!-- include enctype logic to allow the upload of files -->
            <form class="needs-validation" method="POST" action="../../BACKEND/LANDING-PAGE/signup.php" enctype="multipart/form-data" novalidate>

              <div class="mb-3">
                <label for="name" class="form-label mb-0">Full Name</label>
                <input type="text" class="form-control bg-semi-white" id="name" name="fullname" placeholder="Juan Dela Cruz" required>
                <div class="invalid-feedback">
                  Please provide your full name.
                </div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label mb-0">Email Address</label>
                <input type="email" class="form-control bg-semi-white" id="email" name="email" placeholder="you@gmail.com" required>
                <div class="invalid-feedback">
                  Please provide a valid email address.
                </div>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label mb-0">Password</label>
                <input type="password" class="form-control bg-semi-white" id="password" name="password" placeholder="********" minlength="8" required>
                <div class="invalid-feedback">
                  Password must be at least 8 characters long.
                </div>
              </div>

              <div class="mb-3">
                <label for="confirmPassword" class="form-label mb-0">Confirm Password</label>
                <input type="password" class="form-control bg-semi-white" id="confirmPassword" name="confirmPassword" placeholder="********" minlength="8" required>
                <div class="invalid-feedback">
                  Please confirm your password.
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label mb-2">Gender <span class="text-danger">*</span></label>
                <div>
                  <div class="d-flex gap-4">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                      <label class="form-check-label" for="male">
                        Male
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                      <label class="form-check-label" for="female">
                        Female
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="other" value="other" required>
                      <label class="form-check-label" for="other">
                        Other
                      </label>
                    </div>
                  </div>
                  <div class="invalid-feedback">
                    Please select your gender.
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="profilePicture" class="form-label mb-0">Profile Picture (Optional)</label>
                <input class="form-control bg-semi-white" type="file" id="profilePicture" name="profilePic" accept="image/*">
                <div class="form-text">Upload a profile picture (JPG, PNG, max 5MB)</div>
              </div>

              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms" required>
                  <label class="form-check-label" for="terms">
                    I agree to the <a href="#" class="text-decoration-none">Terms and Conditions</a>
                  </label>
                  <div class="invalid-feedback">
                    You must agree to the terms and conditions.
                  </div>
                </div>
              </div>

              <div class="d-grid mb-3">
                <button type="submit" name="submit" class="btn btn-primary">
                  <i class="fa-solid fa-user-plus me-2"></i>Create Account
                </button>
              </div>

              <p class="text-secondary text-center mb-0 fs-14">
                Already have an account?
                <i class="fa-solid fa-right-to-bracket text-primary"></i>
                <a href="Login-Page.php" class="text-decoration-none">Log In</a>
              </p>
            </form>
          </div>

        </div>
      </div>
    </section>
    <!-- ========== END OF REGISTRATION SECTION ========== -->

    <!-- ========== FOOTER ========== -->
    <?php include('../INCLUDES/footer.php'); ?>

  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

  <!-- Form Validation Script -->
  <script>
    (() => {
      'use strict'
      const forms = document.querySelectorAll('.needs-validation')
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>

</body>

</html>