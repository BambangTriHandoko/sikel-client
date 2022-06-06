<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GIS Kota Tasikmalaya</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('side/'); ?>/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url('side/'); ?>/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('side/'); ?>/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('side/'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url('side/'); ?>/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('side/'); ?>/vendors/js/select.dataTables.min.css">
  
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('side/vendors') ?>/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <!--<link rel="shortcut icon" href="images/favicon-kominfo.png" />-->
  <link rel="shortcut icon" type="image/png" href="/logo/Logo.png" />
  <style>
      #maps {
            height: 700px;
            border-radius: 20px;
        }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html --> 
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href=""><img src="<?= base_url(); ?>/logo/logo_maps.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="<?= base_url(); ?>/logo/Logo.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <!-- <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            
            <a href="" class="btn btn-sm btn-primary">Open Data</a>
          </li>
        </ul> -->
        <ul class="navbar-nav navbar-nav-right">
        
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="fa fa-graduation-cap menu-icon"></i>
              <span class="menu-title">Pendidikan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="profil_sekolah.html">Profil Sekolah</a></li>
                <li class="nav-item"> <a class="nav-link" href="satuan_pendidikan.html">Satuan Pendidikan</a></li>
                <li class="nav-item"> <a class="nav-link" href="komparasi_pendidikan.html">Komparasi Pendidikan</a></li>
                <li class="nav-item"> <a class="nav-link" href="nilai_un_smp.html">Nilai UN SMP</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#kependudukan" aria-expanded="false" aria-controls="kependudukan">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">Kependudukan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="kependudukan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="profil_kecamatan.html">Profil Kecamatan</a></li>
                <li class="nav-item"> <a class="nav-link" href="analisis_kependudukan.html">Analisis Kependudukan</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#kesehatan" aria-expanded="false" aria-controls="kesehatan">
              <i class="fa fa-medkit menu-icon"></i>
              <span class="menu-title">Kesehatan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="kesehatan">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" href="analisis_kesehatan.html">Analisis Kesehatan</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#indeks_survey" aria-expanded="false" aria-controls="indeks_survey">
              <i class="fa fa-pie-chart menu-icon"></i>
              <span class="menu-title">Indeks Survey</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="indeks_survey">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="skor_kecamatan.html">Skor Kecamatan</a></li>
                <li class="nav-item"> <a class="nav-link" href="komparasi_skor_kecamatan.html">Komparasi Skor Kecamatan</a></li>
              </ul>
            </div>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        
        <div class="content-wrapper">
            <?= $this->renderSection('content'); ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"></span>
            <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span> -->
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?= base_url('side/'); ?>/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('side/'); ?>/vendors/chart.js/Chart.min.js"></script>
  <script src="<?= base_url('side/'); ?>/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= base_url('side/'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?= base_url('side/'); ?>/vendors/js/dataTables.select.min.js"></script>
<script src="https://use.fontawesome.com/6a195d762e.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('side/'); ?>/vendors/js/off-canvas.js"></script>
  <script src="<?= base_url('side/'); ?>/vendors/js/hoverable-collapse.js"></script>
  <script src="<?= base_url('side/'); ?>/vendors/js/template.js"></script>
  <script src="<?= base_url('side/'); ?>/vendors/js/settings.js"></script>
  <script src="<?= base_url('side/'); ?>/vendors/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('side/'); ?>/vendors/js/dashboard.js"></script>
  <script src="<?= base_url('side/'); ?>/vendors/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <?= $this->renderSection('footer'); ?>
</body>

</html>

