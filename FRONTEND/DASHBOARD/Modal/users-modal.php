<!-- ========== CREATE MODAL ========== -->
<div class="modal fade" id="createModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-3 border-0 shadow-sm">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p class="text-muted mb-3 fs-14">Fill in the details to create a new record.</p>

        <form id="createForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label class="form-label fw-semibold fs-14">Full Name</label>
            <input type="text" class="form-control" placeholder="Enter full name" required>
            <div class="invalid-feedback">Please provide a full name.</div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold fs-14">Email</label>
            <input type="email" class="form-control" placeholder="Enter email" required>
            <div class="invalid-feedback">Please provide a valid email address.</div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold fs-14">Role</label>
            <select class="form-select" required>
              <option value="" disabled selected>Select role</option>
              <option>Admin</option>
              <option>Staff</option>
              <option>Guest</option>
            </select>
            <div class="invalid-feedback">Please select a role.</div>
          </div>

          <div class="mb-1">
            <label class="form-label fw-semibold fs-14">Status</label>
            <select class="form-select">
              <option>Active</option>
              <option>Inactive</option>
            </select>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" onclick="document.getElementById('createForm').requestSubmit()">Submit</button>
      </div>

    </div>
  </div>
</div>

<!-- ========== EDIT MODAL ========== -->
<div class="modal fade" id="editModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-3 border-0 shadow-sm">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p class="text-muted mb-3 fs-14">Update the record details below.</p>

        <form id="editForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label class="form-label fw-semibold fs-14">Full Name</label>
            <input type="text" class="form-control" value="Juan Dela Cruz" required>
            <div class="invalid-feedback">Please provide a full name.</div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold fs-14">Email</label>
            <input type="email" class="form-control" value="juan@email.com" required>
            <div class="invalid-feedback">Please provide a valid email address.</div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold fs-14">Role</label>
            <select class="form-select" required>
              <option selected>Admin</option>
              <option>Staff</option>
              <option>Guest</option>
            </select>
            <div class="invalid-feedback">Please select a role.</div>
          </div>

          <div class="mb-1">
            <label class="form-label fw-semibold fs-14">Status</label>
            <select class="form-select">
              <option selected>Active</option>
              <option>Inactive</option>
            </select>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" onclick="document.getElementById('editForm').requestSubmit()">Save Changes</button>
      </div>

    </div>
  </div>
</div>

<!-- ========== DELETE CONFIRMATION MODAL ========== -->
<div class="modal fade" id="deleteModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content rounded-3 border-0 shadow-sm">

      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-semibold">Delete User?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body pt-1">
        <p class="text-muted mb-0 fs-14">
          This action cannot be undone. The record will be permanently removed.
        </p>
      </div>

      <div class="modal-footer border-0 pt-1">
        <button class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-danger btn-sm">Confirm Delete</button>
      </div>

    </div>
  </div>
</div>

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