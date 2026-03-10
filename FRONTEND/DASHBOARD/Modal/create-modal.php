<?php
// CREATE
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_acc'])) {
  $fullname = ucfirst($_POST["fullname"]);
  $email = $_POST["email"];
  $role = $_POST["role"];
  $status = $_POST["status"];

  $checkEmail = $conn->query("SELECT email FROM tbl_users WHERE email = '$email' LIMIT 1");

  if ($checkEmail->num_rows > 0) {
    $_SESSION['errorMsg'] = 'Email already exist!';
  } else {
    $sql = "INSERT INTO tbl_users (fullname, email, role, status) VALUES ('$fullname', '$email', '$role', '$status')";

    if ($conn->query($sql)) {
      $_SESSION['successMsg'] = "Account created successsfully!";
    } else {
      $_SESSION['errorMsg'] = "Failed to create an account.";
    }
  }

  header("Location: Users-Page.php");
  exit();
}

?>

<!-- ========== CREATE MODAL ========== -->
<div class="modal fade" id="createModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-3 border-0 shadow-sm">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form class="needs-validation" method="POST" novalidate>

        <div class="modal-body">
          <p class="text-muted mb-3 fs-14">Fill in the details to create a new record.</p>

          <div class="mb-3">
            <label class="form-label fw-semibold fs-14">Full Name</label>
            <input type="text" class="form-control" name="fullname" placeholder="Enter full name" required>
            <div class="invalid-feedback">Please provide a full name.</div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold fs-14">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            <div class="invalid-feedback">Please provide a valid email address.</div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold fs-14">Role</label>
            <select name="role" class="form-select" required>
              <option value="Admin" selected>Admin</option>
              <option value="User">User</option>
            </select>
            <div class="invalid-feedback">Please select a role.</div>
          </div>

          <div class="mb-1">
            <label class="form-label fw-semibold fs-14">Status</label>
            <select name="status" class="form-select">
              <option>Active</option>
              <option>Inactive</option>
            </select>
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" name="create_acc" class="btn btn-primary">Submit</button>
        </div>

      </form>
    </div>
  </div>
</div>

