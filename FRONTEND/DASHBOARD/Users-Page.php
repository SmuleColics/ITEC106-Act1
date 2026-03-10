<?php
//  ========== HEADER + SIDEBAR ========== 
include('../INCLUDES/db-header-sidebar.php');

// fetch datas from tbl_users
$sql = "SELECT * FROM tbl_users";
$result = $conn->query($sql);

// EDIT MODAL LOGIC
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_user'])) {
  $edit_id = $_POST['edit_id'];

  $m_fullname = $_POST['m_fullname'];
  $m_email = $_POST['m_email'];
  $m_role = $_POST['m_role'];
  $m_status = $_POST['m_status'];

  $sql = "UPDATE tbl_users SET fullname = '$m_fullname', email = '$m_email', role = '$m_role', status = '$m_status' WHERE user_id = '$edit_id'";

  if ($conn->query($sql)) {
    $_SESSION['successMsg'] = "Account edited successsfully!";
  } else {
    $_SESSION['errorMsg'] = "Failed to edit an account.";
  }
  header("Location: Users-Page.php");
  exit();
}

// DELETE MODAL LOGIC
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_user'])) {
  $delete_id = $_POST['delete_id'];

  $sql = "DELETE FROM tbl_users WHERE user_id = '$delete_id'";

  if ($conn->query($sql)) {
    $_SESSION['successMsg'] = "Account deleted successsfully!";
  } else {
    $_SESSION['errorMsg'] = "Failed to delete an account.";
  }
  header("Location: Users-Page.php");
  exit();
}
?>

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

  <!-- ========== CREATE MODAL  ==========  -->
  <?php include("Modal/create-modal.php"); ?>
  <!-- ========== Display error and success message  ==========  -->
  <?php include "../../BACKEND/INCLUDES/session_msg.php"; ?>

  <!-- ========== MAIN CONTENT ========== -->
  <main class="p-4">

    <div class="container-xxl p-0">
      <!-- Page heading + Add button -->
      <div
        class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-3 mb-4">
        <div>
          <h2 class="mb-1">Users Management</h2>
          <p class="mb-0 text-secondary fs-14">Manage all user records from here.</p>
        </div>
        <!-- Triggers Create Modal -->
        <button class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal"
          data-bs-target="#createModal">
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

            <?php while ($row = $result->fetch_assoc()) { ?>

              <!-- START OF TABLE -->
              <tr>
                <td class="fw-medium fs-14"><?php echo $row['user_id'] ?></td>
                <td class="fw-medium fs-14"><?php echo $row['fullname'] ?></td>
                <td class="d-none d-sm-table-cell text-secondary fs-14"><?php echo $row['email'] ?></td>
                <td class="d-none d-md-table-cell fs-14 text-secondary"><?php echo $row['role'] ?></td>

                <?php if ($row['status'] == "Active"): ?>
                  <td>
                    <span class="badge bg-success rounded-pill px-3 py-1 fs-14"><?php echo $row['status'] ?></span>
                  </td>
                <?php endif; ?>

                <?php if ($row['status'] == "Inactive"): ?>
                  <td>
                    <span class="badge bg-danger rounded-pill px-3 py-1 fs-14"><?php echo $row['status'] ?></span>
                  </td>
                <?php endif; ?>

                <td class="text-end">
                  <button class="btn btn-sm btn-light me-1" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['user_id'] ?>"
                    title="Edit">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="btn btn-sm btn-light text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['user_id'] ?>"
                    title="Delete">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
              <!-- ========== END OF TABLE ========== -->

              <!-- ========== EDIT MODAL ========== -->
              <div class="modal fade" id="editModal<?php echo $row['user_id'] ?>" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content rounded-3 border-0 shadow-sm">

                    <div class="modal-header">
                      <h5 class="modal-title fw-semibold">Edit User</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form method="POST" class="needs-validation" novalidate>
                      <input type="hidden" name="edit_id" value="<?php echo $row['user_id'] ?>">

                      <div class="modal-body">

                        <div class="mb-3">
                          <label class="form-label fw-semibold fs-14">Full Name</label>
                          <input type="text" class="form-control" name="m_fullname" value="<?php echo $row['fullname'] ?>" required>
                          <div class="invalid-feedback">Please provide a full name.</div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label fw-semibold fs-14">Email</label>
                          <input type="email" class="form-control" name="m_email" value="<?php echo $row['email'] ?>" required>
                          <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label fw-semibold fs-14">Role</label>
                          <select class="form-select" name="m_role" required>
                            <option value="Admin" <?php echo $row['role'] == 'Admin' ? 'selected' : '' ?>>Admin</option>
                            <option value="User" <?php echo $row['role'] == 'User' ? 'selected' : '' ?>>User</option>
                          </select>
                          <div class="invalid-feedback">Please select a role.</div>
                        </div>

                        <div class="mb-1">
                          <label class="form-label fw-semibold fs-14">Status</label>
                          <select class="form-select" name="m_status">
                            <option value="Active" <?php echo $row['status'] == 'Active' ? 'selected' : '' ?>>Active</option>
                            <option value="Inactive" <?php echo $row['status'] == 'Inactive' ? 'selected' : '' ?>>Inactive</option>
                          </select>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="edit_user">Save
                          Changes</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>

              <!-- ========== DELETE CONFIRMATION MODAL ========== -->
              <div class="modal fade" id="deleteModal<?php echo $row['user_id'] ?>" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                  <div class="modal-content rounded-3 border-0 shadow-sm">

                    <div class="modal-header border-0 pb-0">
                      <h5 class="modal-title fw-semibold">Delete User?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form method="POST">
                      <input type="hidden" name="delete_id" value="<?php echo $row['user_id'] ?>">

                      <div class="modal-body pt-1">
                        <p class="text-muted mb-0 fs-14">
                          This action cannot be undone. The record will be permanently removed.
                        </p>
                      </div>

                      <div class="modal-footer border-0 pt-1">
                        <button class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger btn-sm" name="delete_user">Confirm Delete</button>
                      </div>

                    </form>
                  </div>
                </div>
              </div>

            <?php } ?>

          </tbody>
        </table>
      </div>

    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<!-- ========== VALIDATION SCRIPT ========== -->
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

</html>