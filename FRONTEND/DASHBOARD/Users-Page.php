<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Love Joy's Admin — Users</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Website Icon -->
  <link rel="icon" type="image/svg+xml" href="../IMAGES/LP-IMAGES/Love-Joy-Logo.svg">
  <!-- CSS LINKS -->
  <link rel="stylesheet" href="../CSS/DB-CSS/Dashboard-Page.css">
  <link rel="stylesheet" href="../INCLUDES/utilities.css">
  <style>
    #users-sidebar {
      background-color: #0d6efd !important;
      color: #fff !important;
    }
  </style>
</head>

<body class="bg-db">
  <!-- ========== HEADER + SIDEBAR ========== -->
  <?php include('../INCLUDES/db-header-sidebar.php'); ?>
  <?php include "Modal/users-modal.php" ?>
  <!-- ========== MAIN CONTENT ========== -->
  <main class="p-4">

    <div class="container-xxl p-0">
      <!-- Page heading + Add button -->
      <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-3 mb-4">
        <div>
          <h2 class="mb-1">Users Management</h2>
          <p class="mb-0 text-secondary fs-14">Manage all user records from here.</p>
        </div>
        <!-- Triggers Create Modal -->
        <button class="btn btn-primary d-flex align-items-center gap-2"
          data-bs-toggle="modal" data-bs-target="#createModal">
          <i class="bi bi-plus-lg"></i> Add New User
        </button>
      </div>
  
      <!-- Search input -->
      <div class="mb-3 search-container">
        <div class="input-group">
          <span class="input-group-text bg-white border-end-0">
            <i class="bi bi-search text-secondary fs-14"></i>
          </span>
          <input type="text" class="form-control border-start-0 ps-0" placeholder="Search users...">
        </div>
      </div>
  
      <!-- ========== USERS TABLE ========== -->
      <div class="bg-white rounded-3 border overflow-hidden">
        <table class="table table-hover mb-0">
          <thead class="table-light">
            <tr>
              <th class="text-secondary fw-semibold fs-14">ID</th>
              <th class="text-secondary fw-semibold fs-14">Name</th>
              <th class="text-secondary fw-semibold d-none d-sm-table-cell fs-14">Email</th>
              <th class="text-secondary fw-semibold d-none d-md-table-cell fs-14">Role</th>
              <th class="text-secondary fw-semibold fs-14">Status</th>
              <th class="text-secondary fw-semibold text-end fs-14">Actions</th>
            </tr>
          </thead>
          <tbody>
  
            <!-- Row 1 -->
            <tr>
              <td class="fw-medium fs-14">1</td>
              <td class="fw-medium fs-14">Juan Dela Cruz</td>
              <td class="d-none d-sm-table-cell text-secondary fs-14">juan@email.com</td>
              <td class="d-none d-md-table-cell fs-14 text-secondary">Admin</td>
              <td>
                <span class="badge bg-success rounded-pill px-3 py-1 fs-14">Active</span>
              </td>
              <td class="text-end">
                <button class="btn btn-sm btn-light me-1" data-bs-toggle="modal" data-bs-target="#editModal" title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-sm btn-light text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Delete">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>
  
            <!-- Row 2 -->
            <tr>
              <td class="fw-medium fs-14">2</td>
              <td class="fw-medium fs-14">Maria Santos</td>
              <td class="d-none d-sm-table-cell text-secondary fs-14">maria@email.com</td>
              <td class="d-none d-md-table-cell fs-14 text-secondary">Staff</td>
              <td>
                <span class="badge bg-success rounded-pill px-3 py-1 fs-14">Active</span>
              </td>
              <td class="text-end">
                <button class="btn btn-sm btn-light me-1" data-bs-toggle="modal" data-bs-target="#editModal" title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-sm btn-light text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Delete">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>
  
            <!-- Row 3 -->
            <tr>
              <td class="fw-medium fs-14">3</td>
              <td class="fw-medium fs-14">Pedro Reyes</td>
              <td class="d-none d-sm-table-cell text-secondary fs-14">pedro@email.com</td>
              <td class="d-none d-md-table-cell fs-14 text-secondary">Guest</td>
              <td>
                <span class="badge bg-danger rounded-pill px-3 py-1 fs-14">Inactive</span>
              </td>
              <td class="text-end">
                <button class="btn btn-sm btn-light me-1" data-bs-toggle="modal" data-bs-target="#editModal" title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-sm btn-light text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Delete">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>
  
            <!-- Row 4 -->
            <tr>
              <td class="fw-medium fs-14">4</td>
              <td class="fw-medium fs-14">Ana Garcia</td>
              <td class="d-none d-sm-table-cell text-secondary fs-14">ana@email.com</td>
              <td class="d-none d-md-table-cell fs-14 text-secondary">Staff</td>
              <td>
                <span class="badge bg-success rounded-pill px-3 py-1 fs-14">Active</span>
              </td>
              <td class="text-end">
                <button class="btn btn-sm btn-light me-1" data-bs-toggle="modal" data-bs-target="#editModal" title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-sm btn-light text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Delete">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>
  
            <!-- Row 5 -->
            <tr>
              <td class="fw-medium fs-14">5</td>
              <td class="fw-medium fs-14">Carlos Mendoza</td>
              <td class="d-none d-sm-table-cell text-secondary fs-14">carlos@email.com</td>
              <td class="d-none d-md-table-cell fs-14 text-secondary">Guest</td>
              <td>
                <span class="badge bg-success rounded-pill px-3 py-1 fs-14">Active</span>
              </td>
              <td class="text-end">
                <button class="btn btn-sm btn-light me-1" data-bs-toggle="modal" data-bs-target="#editModal" title="Edit">
                  <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-sm btn-light text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Delete">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>
  
          </tbody>
        </table>
      </div>
  
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>