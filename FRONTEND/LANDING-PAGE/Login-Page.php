<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
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

<body class="overflow-x-hidden overflow-y-auto h-100">

  <!-- ========== HEADER ========== -->
  <?php include('../INCLUDES/header.php'); ?>

  <main class="container-xxl px-0 bg-semi-white vh-100">

    <!-- ========== START OF LOGIN SECTION ========== -->
    <section class="py-md-5 py-4">
      <div class="d-flex justify-content-center align-items-center pt-4 h-100">
        <div class="card col-lg-4 px-4 py-3">
          <div class="card-body">

            <div class="text-center mb-4">
              <div class="d-flex justify-content-center mb-3">
                <img class="logo me-2" src="../IMAGES/LP-IMAGES/Love-Joy-Logo.svg" alt="">
              </div>

              <h5 class="card-title fw-bold">Welcome Back</h5>
              <p class="card-text text-secondary">Log in to book your private paradise</p>
            </div>

            <form class="needs-validation" novalidate>
              <div class="mb-3">
                <label for="email" class="form-label mb-0">Username/Email</label>
                <input type="email" class="form-control bg-semi-white" id="email" placeholder="you@gmail.com" required>
                <div class="invalid-feedback">
                  Please provide a valid email address.
                </div>
              </div>
              <div class="mb-4">
                <label for="password" class="form-label mb-0">Password</label>
                <input type="password" class="form-control bg-semi-white" id="password" placeholder="********" required>
                <div class="invalid-feedback">
                  Please provide a valid password.
                </div>
              </div>
              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">
                  <i class="fa-solid fa-right-to-bracket me-2"></i>Log In
                </button>
              </div>

              <div class="position-relative my-4 py-2">
                <hr class="my-0">
                <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 text-muted small">OR</span>
              </div>

              <div class="d-grid mb-3">
                <button type="button" class="btn btn-light bg-semi-white border border-light-subtle">
                  Continue as Guest
                </button>
              </div>
              <p class="text-secondary text-center mb-0 fs-14">
                Don't have an account? 
                <i class="fa-solid fa-user-plus text-primary"></i>
                <a href="Signup-Page.php" class="text-decoration-none">Register</a>
              </p>
            </form>
          </div>

        </div>
      </div>
    </section>
    <!-- ========== END OF LOGIN SECTION ========== -->

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
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')
      // Loop over them and prevent submission
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