<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Page</title>
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
    #about-nav {
      color: #0d6efd !important;
    }
  </style>
</head>

<body class="overflow-x-hidden overflow-y-auto">

  <!-- ========== HEADER ========== -->
  <?php include('../INCLUDES/header.php'); ?>

  <main class="container-xxl px-0 bg-semi-white">

    <!-- ========== START OF TITLE ABOUT SECTION ========== -->
    <section class="py-5 bg-sec">
      <div class="row py-4 mx-5 p-0 text-center">
        <h1 class="display-5 fw-bold">About Love Joy's Resort</h1>
        <p>A private resort paradise in General Mariano Alvarez, Cavite, designed for exclusive getaways with the people
          you love.</p>
      </div>
    </section>
    <!-- ========== END OF TITLE ABOUT SECTION ========== -->

    <!-- ========== START OF STORY SECTION ========== -->
    <section class="py-4 mx-5">
      <div class="row py-4">
        <div class="col-lg-6 d-flex justify-content-center align-items-center gap-4">
          <div>
            <h2 class="fs-2 mb-0 fw-bold text-primary">Our Story</h2>
            <p class="text-secondary my-4">
              Love Joy's Private Resort was born from a simple dream — to create a place where families and friends can
              escape the city and enjoy quality time together in complete privacy. Nestled in the peaceful town of
              General Mariano Alvarez, Cavite, our resort offers an exclusive experience that feels like your own
              private home.

              With 3 comfortable bedrooms, 2 refreshing swimming pools, and serene surroundings, every visit is a
              memorable one. Whether you're celebrating a birthday, hosting a small reunion, or simply unwinding for the
              weekend, Love Joy's is your personal paradise.

              We take pride in maintaining every corner of the resort to the highest standards, so you can focus on what
              matters most — making memories with your loved ones.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="py-5 px-3">
            <img class="img-fluid w-100 rounded shadow new-pool" src="../IMAGES/LP-IMAGES/About-Img.jpg"
              alt="Love Joy Pool">
          </div>
        </div>
      </div>
    </section>
    <!-- ========== END OF STORY SECTION ========== -->

    <!-- ========== START OF GALLERY SECTION ========== -->
    <section class="py-5 bg-main">
      <div class="py-4 mx-5">
        <div class="text-center mb-5">
          <h2 class="fs-2 mb-0 fw-bold mb-2 text-primary">Resort Gallery</h2>
          <p class="text-body-secondary mx-auto col-md-6">Explore photos of our resort’s amenities, rooms, pools, and
            relaxing spaces designed for your perfect getaway.</p>
        </div>
        <div class="d-flex justify-content-center">
          <div id="carouselExampleFade" class="carousel slide carousel-fade mb-4">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="carousel-img d-block mx-auto my-0 rounded-3" src="../IMAGES/LP-IMAGES/Carousel-1.jpg"
                  alt="New Pool">
                <div class="carousel-caption d-none d-md-block">
                  <h5>New Swimming Pool</h5>
                  <p>Our newest addition - a refreshing pool perfect for your relaxation.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="carousel-img d-block mx-auto my-0 rounded-3" src="../IMAGES/LP-IMAGES/Carousel-2.jpg"
                  alt="Poolside Lounge">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Poolside Relaxation</h5>
                  <p>Comfortable lounging area beside the pool for your leisure.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="carousel-img d-block mx-auto my-0 rounded-3" src="../IMAGES/LP-IMAGES/Carousel-3.jpg"
                  alt="Original Pool">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Original Pool</h5>
                  <p>Our classic pool - a timeless favorite for all guests.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- ========== END OF GALLERY SECTION ========== -->

    <!-- ========== START OF WHY CHOOSE US SECTION ========== -->
    <section class="py-4">
      <div class="py-5 mx-5">

        <div class="text-center mb-5">
          <h2 class="fs-2 mb-0 fw-bold mb-2 text-primary">Why Choose Us</h2>
        </div>

        <div class="row d-flex justify-content-center mx-sm-0 mx-5">

          <div class="col-lg-9">
            <div class="row">

              <!-- Private & Exclusive -->
              <div class="col-lg-4 col-sm-6 mb-4 d-flex">
                <div class="card p-2 h-100">
                  <div class="card-body text-center p-3">
                    <i class="fa-solid fa-lock text-primary fs-4 bg-secondary-subtle p-3 rounded-pill mb-3"></i>
                    <h5 class="card-title fs-6 mb-3 fw-bold">Private & Exclusive</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">The entire resort is yours — no shared spaces, no
                      other guests</h6>
                  </div>
                </div>
              </div>

              <!-- Up to 15 Guests -->
              <div class="col-lg-4 col-sm-6 mb-4 d-flex">
                <div class="card p-2 h-100">
                  <div class="card-body text-center p-3">
                    <i class="fa-solid fa-users text-primary fs-4 bg-secondary-subtle p-3 rounded-pill mb-3"></i>
                    <h5 class="card-title fs-6 mb-3 fw-bold">Up to 15 Guests</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Perfect for families, friend groups, or intimate
                      celebrations.</h6>
                  </div>
                </div>
              </div>

              <!-- 2 Swimming Pools -->
              <div class="col-lg-4 col-sm-6 mb-4 d-flex">
                <div class="card p-2 h-100">
                  <div class="card-body text-center p-3">
                    <i class="fa-solid fa-water-ladder text-primary fs-4 bg-secondary-subtle p-3 rounded-pill mb-3"></i>
                    <h5 class="card-title fs-6 mb-3 fw-bold">2 Swimming Pools</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">A stunning main pool and a cozy plunge pool for
                      ultimate relaxation.</h6>
                  </div>
                </div>
              </div>

              <!-- Lush Surroundings (renamed from Tropical Grounds) -->
              <div class="col-lg-4 col-sm-6 mb-4 d-flex">
                <div class="card p-2 h-100">
                  <div class="card-body text-center p-3">
                    <i class="fa-solid fa-leaf text-primary fs-4 bg-secondary-subtle p-3 rounded-pill mb-3"></i>
                    <h5 class="card-title fs-6 mb-3 fw-bold">Lush Surroundings</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Lush gardens and palm-shaded walkways surround
                      the resort.</h6>
                  </div>
                </div>
              </div>

              <!-- Lovingly Maintained -->
              <div class="col-lg-4 col-sm-6 mb-4 d-flex">
                <div class="card p-2 h-100">
                  <div class="card-body text-center p-3">
                    <i class="fa-solid fa-broom text-primary fs-4 bg-secondary-subtle p-3 rounded-pill mb-3"></i>
                    <h5 class="card-title fs-6 mb-3 fw-bold">Lovingly Maintained</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Every corner is kept clean, fresh, and ready for
                      your arrival.</h6>
                  </div>
                </div>
              </div>

              <!-- GMA, Cavite Location -->
              <div class="col-lg-4 col-sm-6 mb-4 d-flex">
                <div class="card p-2 h-100">
                  <div class="card-body text-center p-3">
                    <i class="fa-solid fa-location-dot text-primary fs-4 bg-secondary-subtle p-3 rounded-pill mb-3"></i>
                    <h5 class="card-title fs-6 mb-3 fw-bold">GMA, Cavite Location</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Enjoy cool breezes and scenic views in the heart
                      of Cavite.</h6>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- ========== END OF WHY CHOOSE US SECTION ========== -->

    < <!--==========FOOTER==========-->
      <?php include('../INCLUDES/footer.php'); ?>

  </main>


</body>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</html>