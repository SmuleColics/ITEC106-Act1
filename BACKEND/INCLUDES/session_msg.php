<?php
// session_start();

$successMsg = $_SESSION['successMsg'] ?? "";
$errorMsg = $_SESSION['errorMsg'] ?? "";
?>

<!-- Success and error message display -->
<?php if (isset($_SESSION['successMsg'])) { ?>
  <div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert">
      <div class="d-flex">
        <div class="toast-body">
          <?php echo $_SESSION['successMsg']; ?>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
      </div>
    </div>
  </div>
  <?php unset($_SESSION['successMsg']);
} ?>

<?php if (isset($_SESSION['errorMsg'])) { ?>
  <div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="errorToast" class="toast align-items-center text-bg-danger border-0" role="alert">
      <div class="d-flex">
        <div class="toast-body">
          <?php echo $_SESSION['errorMsg']; ?>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
      </div>
    </div>
  </div>
  <?php unset($_SESSION['errorMsg']);
} ?>


<script>
  document.addEventListener("DOMContentLoaded", function () {
    // var toastSuccess = document.getElementById('successToast');
    var toastSuccess = document.getElementById('successToast');
    var toastError = document.getElementById('errorToast');

    if (toastSuccess) {
      var toast = new bootstrap.Toast(toastSuccess);
      toast.show();
    } else if (toastError) {
      var toast = new bootstrap.Toast(toastError);
      toast.show();
    }


  });

  setTimeout(() => {
    document.querySelector('.toast')?.classList.remove('show');
  }, 3000);


</script>