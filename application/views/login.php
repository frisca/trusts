<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Informasi Pengelolaan Data dan Pelacakan Lokasi Mobil</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/node_modules/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form method="post" action="<?php echo base_url()?>login/processLogin">
                    <div class="form-group">
                    <label>Username *</label>
                    <input type="text" class="form-control p_input" name="username"> 
                    </div>
                    <div class="form-group">
                    <label>Password *</label>
                    <input type="password" class="form-control p_input" name="password">
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url()?>assets/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url()?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url()?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url()?>assets/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
