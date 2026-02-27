<?php
session_start();

$successMsg = $_SESSION['successMsg'] ?? "";
$errorMsg = $_SESSION['errorMsg'] ?? "";
//Session passed into variable, it can now be removed
unset($_SESSION['successMsg'], $_SESSION['errorMsg'])
?>

<!-- Success and error message display -->
<div class="alert-msg">
  <?php if (!empty($successMsg)): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong><?php echo $successMsg ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <?php if (!empty($errorMsg)): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong><?php echo $errorMsg ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
</div>