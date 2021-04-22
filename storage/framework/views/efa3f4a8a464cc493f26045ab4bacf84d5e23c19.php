<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Girişi</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('back/')); ?>/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo e(asset('back/')); ?>/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(asset('back/')); ?>/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(asset('back/')); ?>/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo e(asset('back/')); ?>/images/logo.svg" alt="logo">
              </div>
              <h4>Admin Panel Giriş</h4>
              <h6 class="font-weight-light">Lütfen Giriş Yapınız</h6>
              <form method="POST" action="user" class="pt-3">
              <?php echo csrf_field(); ?>
                <div class="form-group">
                  <input type="text" name="user" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Kullanıcı Adı">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Parola">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Oturum Aç</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo e(asset('back/')); ?>/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo e(asset('back/')); ?>/js/off-canvas.js"></script>
  <script src="<?php echo e(asset('back/')); ?>/js/hoverable-collapse.js"></script>
  <script src="<?php echo e(asset('back/')); ?>/js/template.js"></script>
  <script src="<?php echo e(asset('back/')); ?>/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
<?php /**PATH C:\Users\Bey\Desktop\TestBlog\resources\views/login.blade.php ENDPATH**/ ?>