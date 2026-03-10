<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
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
    #home-nav {
      color: #0d6efd !important;
    }
  </style>
</head>

<body class="overflow-x-hidden">

  <main class="container-xxl p-0 bg-semi-white">
    <!-- ========== HEADER ========== -->
    <?php include('../INCLUDES/header.php'); ?>

    <!-- ========== START OF HERO SECTION ========== -->
    <section
      class="hero-section position-relative vh-100 overflow-hidden d-flex justify-content-center align-items-center z-2">
      <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100"
        style="object-fit: cover; z-index: -1;">
        <source src="../IMAGES/LP-IMAGES/Love-Joy-Resort-Video.mp4" type="video/mp4">
      </video>

      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

      <div class="text-center text-white position-relative z-2">
        <h1 class="display-4 fw-bold">Love Joy's Private <br> Resort</h1>
        <p class="col-md-9 mx-auto fs-5 mb-3">
          A relaxing private resort in G.M.A, Cavite — 3 comfortable rooms, 2 pools, and a peaceful stay for your
          weekend getaway.
        </p>
        <div class="mt-4">
          <a href="Login-Page.php" type="button" class="btn btn-primary me-2 px-3 py-1 px-md-4 py-md-2 fs-6 fs-md-5">Book Now</a>
          <a href="Facilities-Page.php" type="button" class="btn btn-outline-light px-3 py-1 px-md-4 py-md-2 fs-6 fs-md-5">View Facilities</a>
        </div>
      </div>
    </section>
    <!-- ========== END OF HERO SECTION ========== -->

    <!-- ========== START OF FEATURES/HIGHLIGHTS SECTION ========== -->
    <section class="bg-sec py-4 text-center">
      <div class="d-flex justify-content-center gap-1 gap-sm-2 gap-md-3 gap-lg-5 py-2">
        <span>
          <i class="fa-solid fa-lock text-primary me-1"></i>
          Private & Exclusive
        </span>
        <span class="mx-2">
          <i class="fa-solid fa-users text-primary me-1"></i>
          Up to 15 Guests
        </span>
        <span>
          <i class="fa-solid fa-water-ladder text-primary me-1"></i>
          2 Swimming Pools
        </span>
      </div>
    </section>
    <!-- ========== END OF FEATURES/HIGHLIGHTS SECTION ========== -->

    <!-- ========== START OF INTRODUCTION SECTION ========== -->
    <section class="py-4 mx-5">
      <div class="row py-4">
        <div class="col-lg-6 d-flex justify-content-center align-items-center gap-4">
          <div>
            <h2 class="fs-2 mb-0 fw-bold text-primary">Your Private Paradise Awaits</h2>
            <p class="text-secondary my-4">
              Escape to Love Joy's Private Resort in General Mariano Alvarez, Cavite, where tranquility meets
              exclusivity.
              Book the entire resort for yourself — complete privacy, no shared spaces, just you and your loved ones.

              Featuring 3 cozy bedrooms, 2 refreshing pools, and serene surroundings, it's the ideal retreat for
              families,
              friends, or couples seeking a peaceful weekend getaway.
            </p>
            <a href="Facilities-Page.php" type="button" class="btn btn-outline-primary border-secondary-subtle">Explore Our
              Facilities</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="py-5 px-3">
            <img class="img-fluid w-100 rounded shadow new-pool" src="../IMAGES/LP-IMAGES/Hero-Img.jpg"
              alt="Love Joy Pool">
          </div>
        </div>
      </div>
    </section>
    <!-- ========== END OF INTRODUCTION SECTION ========== -->
    
    <!-- ========== START OF PRICING SECTION ========== -->
    <section class="bg-main py-4">
      <div class="py-5 mx-5">

        <div class="text-center mb-5">
          <h2 class="fs-2 mb-0 fw-bold mb-2 text-primary">Simple, Transparent Pricing</h2>
          <p class="text-body-secondary mx-auto col-md-6">Choose the package that fits your schedule. All bookings
            include exclusive use of the entire resort.</p>
        </div>

        <div class="row d-flex justify-content-center mx-sm-0 mx-5">

          <!-- Full Day Card -->

          <div class="col-lg-3 col-sm-6 mb-4 d-flex">
            <div class="card p-2 border-primary border-2 h-100">
              <div class="card-body text-center p-3">
                <i class="fa-regular fa-clock text-primary fs-4 bg-secondary-subtle p-3 rounded-pill mb-3"></i>
                <h5 class="card-title fs-6 mb-3">Full Day</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary sm-text">6:00 AM - 4:00 AM • 22 hours</h6>
                <span class="card-text fs-2 fw-bold">₱9,500</span>
                <p class="card-text text-secondary">Enjoy the entire resort for a full day — perfect for
                  celebrations and large gatherings.</p>

                <p class="sm-text text-primary mb-2">20% down payment: ₱1,900 </p>
                <span class="badge rounded-pill text-bg-primary py-2 px-3">Best Value</span>
              </div>
            </div>
          </div>

          <!-- Day-Time Card -->
          <div class="col-lg-3 col-sm-6 mb-4 d-flex">
            <div class="card p-2 h-100">
              <div class="card-body text-center p-3">
                <i class="fa-solid fa-sun text-primary fs-4 bg-secondary-subtle p-3 rounded-pill mb-3"></i>
                <h5 class="card-title fs-6 mb-3">Day-time</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary sm-text">8:00 AM – 6:00 PM · 10 hours</h6>
                <span class="card-text fs-2 fw-bold">₱4,500</span>
                <p class="card-text text-secondary">A sun-filled day at the resort with full access to all pools
                  and rooms.</p>

                <p class="sm-text text-primary mb-2">20% down payment: ₱900 </p>
              </div>
            </div>
          </div>

          <!-- Night-Time Card -->
          <div class="col-lg-3 col-sm-6 mb-4 d-flex">
            <div class="card p-2 h-100 ">
              <div class="card-body text-center p-3">
                <i class="fa-solid fa-moon text-primary fs-4 bg-secondary-subtle p-3 rounded-pill mb-3"></i>
                <h5 class="card-title fs-6 mb-3">Night-time</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary sm-text">6:00 PM – 6:00 AM · 12 hours</h6>
                <span class="card-text fs-2 fw-bold">₱5,000</span>
                <p class="card-text text-secondary">An enchanting evening under the stars with exclusive
                  overnight access.</p>

                <p class="sm-text text-primary mb-2">20% down payment: ₱1,000 </p>
              </div>
            </div>
          </div>

        </div>

        <div class="d-flex justify-content-center mt-4">
          <a href="Login-Page.php" type="button" class="btn btn-primary btn-large py-2 px-4">Reserve Your Date</a>
        </div>

      </div>
    </section>
    <!-- ========== END OF PRICING SECTION ========== -->

    <!-- ========== START OF REVIEWS SECTION ========== -->
    <section class="bg-semi-white py-4">
      <div class="py-5 mx-5">
        <div class="text-center mb-5">
          <h2 class="fs-2 mb-0 fw-bold mb-2 text-primary">What Our Guests Say</h2>
        </div>

        <div class="row d-flex justify-content-center mx-sm-0 mx-5">
          <div class="col-lg-3 col-sm-6 mb-4 d-flex">
            <div class="card p-2 h-100">
              <div class="card-body">
                <div class="star-rating">
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                </div>

                <div class="text-rating mt-3 fs-14">
                  <p class="text-secondary">
                    "Absolutely stunning resort! We had the entire place to ourselves. The pools were crystal clear and
                    the rooms were spotless. Will definitely come back!"
                  </p>
                  <span class="fw-bold"> — Maria Santos</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-4 d-flex">
            <div class="card p-2 h-100">
              <div class="card-body">
                <div class="star-rating fs-14">
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                </div>

                <div class="text-rating mt-3 fs-14">
                  <p class="text-secondary">
                    "We booked for our anniversary and it was magical. The night-time package was so romantic with the
                    garden lights and pool. Highly recommended!"
                  </p>
                  <span class="fw-bold"> — John & Ana Cruz</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-4 d-flex">
            <div class="card p-2 h-100">
              <div class="card-body">
                <div class="star-rating fs-">
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                  <i class="fa-solid fa-star text-warning"></i>
                </div>

                <div class="text-rating mt-3 fs-14">
                  <p class="text-secondary">
                    "Perfect for a family reunion. Kids loved both pools, and having 3 rooms meant everyone had privacy.
                    The booking process was seamless."
                  </p>
                  <span class="fw-bold"> — The Garcia Family</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========== END OF REVIEWS SECTION ========== -->

    <!-- ========== START OF BOOK NOW SECTION ========== -->
    <section class="bg-sec p-0 py-4">
      <div class="py-5 mx-5 p-0">
        <div class="text-center">
          <h2 class="fs-2 mb-0 fw-bold mb-2 text-primary">Ready for Your Private Paradise?</h2>
          <p class="col-md-5 mx-auto text-secondary">Secure your date today with just 20% down payment. Your exclusive
            getaway awaits.</p>
          <a href="Login-Page.php" type="button" class="btn btn-primary px-4">Book Now</a>
        </div>
      </div>
    </section>
    <!-- ========== END OF BOOK NOW SECTION ========== -->

    <!-- ========== FOOTER ========== -->
    <?php include('../INCLUDES/footer.php'); ?>

  </main>


</body>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</html>