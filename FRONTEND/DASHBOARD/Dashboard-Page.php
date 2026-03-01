<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Love Joy's Admin — Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Website Icon -->
  <link rel="icon" type="image/svg+xml" href="../IMAGES/LP-IMAGES/Love-Joy-Logo.svg">
  <!-- CSS LINKS -->
  <link rel="stylesheet" href="../CSS/DB-CSS/Dashboard-Page.css">
  <link rel="stylesheet" href="../INCLUDES/utilities.css">
  <style>
    #dashboard-sidebar {
      background-color: #0d6efd !important;
      color: #fff !important;
    }
  </style>
</head>

<body class="bg-db">
  <!-- ========== HEADER + SIDEBAR ========== -->
  <?php include('../INCLUDES/db-header-sidebar.php'); ?>

  <main>
    <div class="p-3">
      <!-- Dashboard header -->
      <div class="container-xxl p-0">
        <div>
          <h2 class="mb-0">Welcome <?php echo $fullname ?>, </h2>
          <p">
            Manage reservations, monitor bookings, and oversee resort operations from your dashboard.
            </p>
        </div>
  
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>