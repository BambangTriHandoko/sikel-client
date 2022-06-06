<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>GIS Kota Tasikmalaya</title>

    <!-- using online links -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- using local links -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css');?>">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css');?>"> -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="<?= base_url('/side/css/main.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/side/css/sidebar-themes.css'); ?>">
    <link rel="shortcut icon" type="image/png" href="/logo/Logo.png" />
    <?= $this->renderSection('head'); ?>
    <style type="text/css">
        .logo{
            height:200px;
            width:200px;
        }
        #maps {
            border-style: solid;
  border-color: #A9A9A9;
   border-width: 9px;
            height: 700px;
        }

        #link-1 {
            height: 50px;
            margin-bottom: 20px;
            margin-left: 10px;
        }

        #link-2 {
            height: 50px;
            margin-bottom: 20px;
            margin-left: 10px;
        }

        #link-3 {
            height: 50px;
            margin-bottom: 20px;
            margin-left: 10px;
        }

        #link-4 {
            height: 50px;
            margin-bottom: 20px;
            margin-left: 10px;
        }

        #link-5 {
            height: 50px;
            margin-bottom: 20px;
            margin-left: 10px;
        }

        #link-6 {
            height: 50px;
            margin-bottom: 20px;
            margin-left: 10px;
        }

        #link-7 {
            height: 50px;
            margin-bottom: 20px;
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">

                <div class="form-group col-md-4">
                    <a id="pin-sidebar" class="btn btn-outline-secondary" href="#">
                        <span><i class="fas fa-align-justify"></i></span>
                    </a>
                </div>
                <!-- sidebar-brand  -->

                <!-- sidebar-header  -->
                <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                        <img class="img-responsive img-rounded" src="/logo/logo_maps.png" height="60" alt="User picture">
                    </div>
                <!-- sidebar-search  -->
                <div class="sidebar-item sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-item sidebar-search">
                    <div>
                        <div id="layer" class="layermap"></div>
                        <div id="layer2" class="layermap"></div>
                    </div>
                </div>

                <!-- sidebar-menu  -->
                <!-- <div class=" sidebar-item sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Menu</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-layer-group"></i>
                                <span class="menu-text">Pelayanan Publik</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="#" class="w3-bar-item w3-button">Standard pelayanan</a></li>
                                    <li><a href="#" class="w3-bar-item w3-button">Jenis Pelayanan</a></li>
                                    <li><a href="#" class="w3-bar-item w3-button">Maklumat Pelayanan</a></li>
                                    <li><a href="#" class="w3-bar-item w3-button">Pengelolaan Pengaduan</a></li>
                                    <li><a href="#" class="w3-bar-item w3-button">Sarana,Prasarana dan Fasilitas</a></li>
                                    <li><a href="#" class="w3-bar-item w3-button">Jadwal Petugas Pelayanan</a></li>
                                    <li><a href="#" class="w3-bar-item w3-button">Pencegahan Penyebaran Covid 19</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                sidebar-menu -->
            </div>
            <!-- sidebar-footer  -->

        </nav>
        <!-- page-content  -->
        <?= $this->renderSection('content'); ?>
    </div>


    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- using local scripts -->
    <!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->


    <script src="<?= base_url('/side/js/main.js'); ?>"></script>
    <?= $this->renderSection('foot'); ?>
</body>

</html>