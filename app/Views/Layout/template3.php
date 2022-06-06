<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="logo/KotaTasikmalaya.png">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title> </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <?= $this->renderSection('head'); ?>

  <link rel="stylesheet" href="/css/style.css">

</head>

<body>
  <br>
  <div class="container">
    <div class="header__group">
      <?php foreach ($nav as $N) { ?>
        <img id="displayPhoto" src='/logo/<?= $N['logo']; ?>' style="  height:100px; width:fixed; margin-top:10px; margin-left: auto; margin-bottom:5px;">
      <?php } ?>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: <?= $N['warna']; ?>;">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a href="/">
              <img src="/logo/homes.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Profilekel"><b>
                PROFILE</b></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <b> TENTANG KELURAHAN</b>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/Profilekel/visi"><b>VISI DAN MISI</b></a></li>
              <li><a class="dropdown-item" href="#"><b>STRUKTUR</b></a></li>
            </ul>
          </li>
          <li class="nav-item">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <b>DATA KELURAHAN</b>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"><b>DATA Wilayah Administrtif</b></a></li>
              <li><a class="dropdown-item" href="#"><b>DATA Pendidikan dalam KK</b></a></li>
              <li><a class="dropdown-item" href="#"><b>DATA Pendidikan Ditempuh</b></a></li>
              <li><a class="dropdown-item" href="#"><b>DATA Pekerjaan</b></a></li>
              <li><a class="dropdown-item" href="#"><b>DATA Agama</b></a></li>
              <li><a class="dropdown-item" href="#"><b>DATA Jenis Kelamin</b></a></li>
              <li><a class="dropdown-item" href="#"><b>DATA Warga Negra</b></a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <b>REGULASI</b>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/regulasi"><b>Produk Hukum</b></a></li>
              <li><a class="dropdown-item" href="/regulasi/informasi"><b>Informasi Publik</b></a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/peta"><b>
                PETA</b></a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit"><b>Search</b></button>
        </form>

      </div>

    </div>
  </nav>

  <?= $this->renderSection('content'); ?>
  </div>
  <br>



  </div>
  <div class="container">
    <div class="foot">
      <div class="row">
        <div class="col-xs-6 col-md-4 ">
          <br>
          <table class="tabfoot" style="margin-left:20px;">
            <tr>
              <td>
                <h4>HUBUNGI KAMI</h4>
              </td>
            <tr>

              <td><i class="fa fa-map-marker"></i>: <a href="https://goo.gl/maps/H39B9xvDCy7ZiJxq9" style="font-size:14;"> Jl. Ir. H.Juanda No. 191, Sukamulya, Kec. Bungursari</a></td>
            <tr>
              <td>
                <i class="fa fa-phone" style="margin-right:10px; color:#55b8bf;"></i><a href="tel:+622657523616">(0265)7523616 </a>
              </td>
            <tr>
              <td><i class="fa fa-envelope"></i> :
                <a href="mailto:kominfo@tasikmalayakota.go.id">kominfo@tasikmalayakota.go.id</a>
              </td>
            </tr>
            <tr>
              <td><i class="fa fa-twitter" style="font-size:1.2em"></i>:
                <a href="http://twitter.com/KominPemkotTsm" target="_blank">@KominPemkotTsm</a>
              </td>
            </tr>
            <tr>
              <td><i class="fa fa-instagram" style="font-size:1.2em"></i>:<a href="http://instagram.com/kominfo_pemkot_tsm" target="_blank">@kominfo_pemkot_tsm</a></td>
            </tr>
            <tr>
              <td><i class="fa fa-globe" style="font-size:1.2em"></i>:<a href="http://tasikmalayakota.go.id" target="_blank">Website Resmi Kota Tasikmalaya</a></td>

            </tr>
            <tr>
              <td><br></td>
            </tr>
            </tr>


          </table>


        </div>

        <div class="col-xs-6 col-md-4">
          <br>
          <a class="twitter-timeline" data-width="350" data-height="350" href="https://twitter.com/kemkominfo?ref_src=twsrc%5Etfw">Tweets by kemkominfo</a>

        </div>

        <div class="col-xs-6 col-md-3">
          <div class="lokasi">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div id="custom_html-10" class="widget_text widget widget_custom_html" style="margin-left:20px;">
                <br>
                <h4 class="widget-title h6"><span>LOKASI </span></h4>
                <div class="textwidget custom-html-widget"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3720497131585!2d108.19717851477523!3d-7.312034294722815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f50d181a66e55%3A0x38a9629bb8aa8f00!2sDiskominfo+Kota+tasikmalaya!5e0!3m2!1sen!2sid!4v1563936906414!5m2!1sen!2sid" width="360" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe><br><br><br>
                  <br><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright-area">
    <div class="container">
      <div class="container-foot" style="background-color: <?= $N['warna']; ?>;">
        <div class="row ">
          <div class="col-12 text-center">
            <div class="copyright-area  ">
              <br>
              <p><b>All Right Reserved by Diskominfo Kota Tasikmalaya 2021</b></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?= $this->renderSection('foot'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>

</html>