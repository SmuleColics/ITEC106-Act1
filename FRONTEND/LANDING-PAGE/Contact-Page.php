<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Website Icon -->
  <link rel="icon" type="image/svg+xml" href="../IMAGES/LP-IMAGES/Love-Joy-Logo.svg">
  <!-- CSS LINKS -->
  <link rel="stylesheet" href="../CSS/LP-CSS/Landing-Page.css">
  <link rel="stylesheet" href="../INCLUDES/utilities.css">
  <!-- FontAwesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    #contact-nav {
      color: #0d6efd !important;
    }
  </style>
</head>

<body class="overflow-x-hidden">

  <!-- ========== HEADER ========== -->
  <?php include('../INCLUDES/header.php'); ?>

  <main class="container-xxl px-0 bg-semi-white">

    <!-- ========== START OF TITLE FACILITIES SECTION ========== -->
    <section class="py-5 bg-sec">
      <div class="row py-4 mx-5 p-0 text-center">
        <h1 class="display-5 fw-bold">Contact & Location</h1>
        <p class="col-lg-7 mx-auto mb-0">Have questions? Send us below a message.</p>
      </div>
    </section>
    <!-- ========== END OF TITLE FACILITIES SECTION ========== -->

    <!-- ========== START OF CONTACT SECTION ========== -->
    <section class="py-5 mx-5">
      <div class="row py-4">
        <div class="col-lg-6 d-flex justify-content-center align-items-center gap-4">
          <div class="w-100 mx-5">

            <form method="POST" action="../../BACKEND/LANDING-PAGE/contact.php" class="needs-validation" novalidate>
              <h5 class="fs-3 fw-bold mb-4">Send Us a Message</h5>

              <?php
              //Display of error and success message
              require "../../BACKEND/INCLUDES/session_msg.php";
              ?>

              <div class="mb-3">
                <label for="name" class="form-label mb-0">Name</label>
                <input type="text" class="form-control" id="name" name="fullname" placeholder="Your Name" required>
                <div class="invalid-feedback">
                  Please provide your name.
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label mb-0">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@gmail.com" required>
                <div class="invalid-feedback">
                  Please provide a valid email address.
                </div>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label mb-0">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="How can we help?"
                  required></textarea>
                <div class="invalid-feedback">
                  Please enter your message.
                </div>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane me-1"></i>
                  Send Message</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="py-5 px-3">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.0430400108135!2d121.00690997444981!3d14.308932084152287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d7001c906037%3A0xdaa0fe3401bd4eed!2sLovejoy%20miniresort!5e0!3m2!1sen!2sph!4v1770988211282!5m2!1sen!2sph"
              height="450" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade" class="border-0 shadow w-100"></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- ========== END OF CONTACT SECTION ========== -->

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