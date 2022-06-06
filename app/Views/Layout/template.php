<!DOCTYPE html>
<html>

<head>
	<title><?= $this->renderSection('title'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="logo/KotaTasikmalaya.png">
	<link rel="stylesheet" type="text/css" href="<?= base_url('news/assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('news/assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('news/assets/css/animate.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('news/assets/css/font.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('news/assets/css/li-scroller.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('news/assets/css/slick.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('news/assets/css/jquery.fancybox.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('news/assets/css/theme.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('news/assets/css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/style2.css'); ?>">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	<!--[if lt IE 9]>
<script src="('/news/assets/js/html5shiv.min.js'); ?>"></script>
<script src="('/news/assets/js/respond.min.js'); ?>"></script>
<![endif]-->
	<?= $this->renderSection('head'); ?>
</head>
<link rel="stylesheet" href="sweetalert2.min.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<style type="text/css">
	<?php foreach ($nav as $N) { ?>

	/* warna latar mulai */
	.header_bottom {
		background-color: <?= $N['warna'] ?>;
		display: inline;
		float: left;
		padding: 15px 30px 15px;
		width: 100%;
	}

	#navArea {
		float: left;
		display: inline;
		width: 100%;
		padding: 0 30px;
		background-color: <?= $N['warna'] ?>;
	}

	#contentSection {
		float: left;
		display: inline;
		width: 100%;
		background-color: <?= $N['warna'] ?>;
		padding: 0 30px;
	}

	.container {
		background: <?= $N['warna'] ?>;

	}

	#newsSection {
		float: left;
		display: inline;
		width: 100%;
		padding: 0 30px;
		background: <?= $N['warna'] ?>;
		padding-bottom: 20px;
	}

	#sliderSection {

		background: <?= $N['warna'] ?>;
	}

	/* akhir warna latar*/
	/* warna panel */
	.latest_newsarea {
		float: left;
		display: inline;
		width: 100%;
		background-color: <?= $N['panel']; ?>;
		position: relative;
	}

	.footer_top {
		background-color: <?= $N['panel']; ?>;
		color: #ddd;
		display: inline;
		float: left;
		padding: 10px 30px 48px;
		width: 100%;
	}

	.single_post_content>h2 {
		background: none repeat scroll 0 0 <?= $N['panel']; ?>;
		color: #fff;
		font-family: "Oswald", sans-serif;
		font-size: 18px;
		font-weight: 400;
		margin-bottom: 10px;
		margin-left: 0;
		margin-top: 5px;
		padding: 0;
		position: relative;
		text-align: center;
		text-transform: uppercase;
		margin-bottom: 20px;
	}

	.navbar {
		border: medium none;
		border-radius: 0;
		background-color: <?= $N['panel']; ?>;
	}

	.dropdown-menu {
		background-color: <?= $N['panel']; ?>;
	}

	.dropdown-menu>li>a {
		clear: both;
		color: #ddd;
		background-color: <?= $N['panel']; ?>;
		padding: 10px 20px;
		font-family: "Oswald", sans-serif;
		-webkit-transition: all 0.5s;
		-mz-transition: all 0.5s;
		-ms-transition: all 0.5s;
		-o-transition: all 0.5s;
		transition: all 0.5s;
	}

	/*warna text berita */
	#t_berita {
		color: <?= $N['t_berita']; ?>;
	}

	/* warna text  panel*/
	#t_panel {
		color: <?= $N['t_panel']; ?>;
	}

	<?php } ?>
	.bsbig_fig{
	    width:240px;
	}
</style>

<body>
	<div class="container">
		<!--<div id="preloader">-->
		<!--    <div id="status">&nbsp;</div>-->
		<!--    -->
		<!--</div>-->
		<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
		<header id="header">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12">
					<?php if (session()->getFlashdata('pesan')) : ?>
						<div class="alert alert-success" role="alert">
							<?= session()->getFlashdata('pesan'); ?>
						</div>
					<?php endif; ?>
					<div class="header_bottom">
						<?php foreach ($nav as $N) { ?>
							<div class="logo_area"><a href="/" class="logo"><img src="/logo/<?= $N['logo']; ?>" alt=""></a></div>
							<!--<div class="add_banner"><a href=""><img src="<?= base_url('news/images/addbanner_728x90_V1.jpg'); ?>" alt=""></a></div>-->
					</div>
				</div>
			</div>
		</header>
		<section id="navArea">
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav main_nav">
						<li class="active"><a href="/"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
						<li class="dropdown"> <a id="t_panel" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TENTANG KELURAHAN</a>
							<ul class="dropdown-menu" role="menu">
								<li><a id="t_panel" href="/Profilekel/visi">VISI DAN MISI</a></li>
								<li><a id="t_panel" href="/Profilekel/struktur">STRUKTUR</a></li>
							</ul>
						</li>
						<li><a id="t_panel" href="/Profilekel">PROFILE</a></li>
						<li class="dropdown"> <a id="t_panel" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DATA KELURAHAN</a>
							<ul class="dropdown-menu" role="menu">
								<li><a id="t_panel" href="/data_kelurahan/data_wilayah_administratif">DATA Wilayah Administrtif</a></li>
								<li><a id="t_panel" href="/data_kelurahan/data_pendidikan">DATA Pendidikan</a></li>
								<li><a id="t_panel" href="/data_kelurahan/data_perkawinan">DATA Pernikahan </a> </li>
								<li><a id="t_panel" href="/data_kelurahan/data_pekerjaan">DATA Pekerjaan</a></li>
								<li><a id="t_panel" href="/data_kelurahan/data_agama">DATA Agama</a></li>
								<li><a id="t_panel" href="/data_kelurahan/data_jenis_kelamin">DATA Jenis Kelamin</a></li>
								<!-- <li><a id="t_panel" href="/data_kelurahan/data_warganegara">DATA Warga Negra</a></li> -->
							</ul>
						</li>
						<li class="dropdown"> <a id="t_panel" href="#" class="dropdoswn-toggle" data-toggle="dropdown" role="button" aria-expanded="false">REGULASI</a>
							<ul class="dropdown-menu" role="menu">
								<li><a id="t_panel" href="/regulasi">PRODUK HUKUM</a></li>
								<li><a id="t_panel" href="/Pelayanan/halaman/10">INFORMASI PUBLIK</a></li>
							</ul>
						</li>
						<li class="dropdown"> <a id="t_panel" href="#" class="dropdoswn-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pelayanan Publik</a>
							<ul class="dropdown-menu" role="menu">
								<li><a id="t_panel" href="/Pelayanan/halaman/3">Standard pelayanan</a></li>
								<li><a id="t_panel" href="/Pelayanan/halaman/4">Jenis Pelayanan</a></li>
								<li><a id="t_panel" href="/Pelayanan/halaman/5">Maklumat Pelayanan</a></li>
								<li><a id="t_panel" href="/Pelayanan/halaman/6">Pengelolaan Pengaduan</a></li>
								<li><a id="t_panel" href="/Pelayanan/halaman/7">Sarana,Prasarana dan Fasilitas</a></li>
								<li><a id="t_panel" href="/Pelayanan/halaman/8">Jadwal Petugas Pelayanan</a></li>
								<li><a id="t_panel" href="/Pelayanan/halaman/9">Pencegahan Penyebaran Covid 19</a></li>
							</ul>
					</ul>
					<form action="" class="form-inline" method="post">
						<input class="form-control float-right" type="search" name="cari" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-light " style="margin-top: 5px;" name="submit" type="submit"><b>Search</b></button>
					</form>
				</div>
			</nav>

	<?php } ?>
				
	<?= $this->renderSection('latnews'); ?>
		</section>
	<?= $this->renderSection('content'); ?>
	<footer id="footer">
		<div class="footer_top">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="footer_widget wow fadeInLeftBig">
						<h2 id="t_panel">KONTAK KAMI</h2>
						<table class="tabfoot" style="margin-left:10px;">
							<tr>
								<td>
								</td>
							<tr>
<?php foreach($A as $b) { ?>
								<td><i id="t_panel" class="fa fa-map-marker"> :</i> <a id="t_panel" class="itemtab" href="<?= $b['link_alamat']; ?>"> <?= $b['alamat']; ?> </a></td>
							<tr>
								<td>
									<i id="t_panel" class="fa fa-phone" style="margin-right:10px;"></i><a id="t_panel" class="itemtab" href="tel:<?= $b['no_hp']; ?>"> : <?= $b['no_hp']; ?> </a>
								</td>
							<tr>
								<td><i id="t_panel" class="fa fa-envelope"> :</i>
									<a id="t_panel" class="itemtab" href="mailto:<?= $b['email']; ?>"><?= $b['email']; ?></a>
								</td>
							</tr>
							<tr>
								<td><i id="t_panel" class="fa fa-twitter" style="font-size:1.2em"> :</i>
									<a id="t_panel" class="itemtab" href="<?= $b['link_tw']; ?>" target="_blank"><?= $b['tw']; ?></a>
								</td>
							</tr>
							<tr>
								<td><i id="t_panel" class="fa fa-instagram" style="font-size:1.2em"> :</i><a id="t_panel" class="itemtab" href="<?= $b['link_ig']; ?>" target="_blank"><?= $b['ig']; ?></a></td>
							</tr>
							<tr>
								<td><i id="t_panel" class="fa fa-globe" style="font-size:1.2em"> :</i><a id="t_panel" class="itemtab" href="<?= $b['link_web']; ?>" target="_blank"><?= $b['web']; ?></a></td>

							</tr>
							<tr>
								<td><br></td>
							</tr>
							</tr>

<?php }?>
						</table>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="footer_widget wow fadeInDown">
						<h2 id="t_panel">Tweets by kemkominfo</h2>
						<a class="twitter-timeline" data-width="350" data-height="350" href="https://twitter.com/kemkominfo?ref_src=twsrc%5Etfw"></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="footer_widget wow fadeInRightBig">

						<h2 id="t_panel">HUBUNGI KAMI</h2>
						<h4> </h4>
						<form action="/pesan/kirim" method="post" accept-charset="utf-8" id="formKontak">
							<div class="form-group has-feedback">
								<label class="sr-only" for="nama">Nama</label>
								<input type="text" class="form-control input-md" placeholder="Nama" id="nama" name="nama" required>
							</div>
							<div class="form-group has-feedback">
								<label class="sr-only" for="email">Alamat Email</label>
								<input type="text" class="form-control input-md" placeholder="Alamat Email/nomor handphone(Whatsapp)" id="email" name="email" required>
							</div>
							<div class="form-group has-feedback">
								<label class="sr-only" for="pesan">Pesan</label>
								<textarea class="form-control input-md" rows="5" placeholder="Pesan" id="pesan" name="pesan" required></textarea>
							</div>

							<!--div class="form-group has-feedback">
						<input class="form-control input-md" type="text" id="aunt" name="aunt" placeholder="Masukan Kode Diatas" required>
						</div-->

							<div class="form-group has-feedback">
								<button id="kirim" name="kirim" class="btn btn-default">Kirim</button>
							</div>

						</form>
					</div>
				</div>
			</div>
			<br>
			<div class="footer_bottom">
				<p class="copyright">All Right Reserved by Diskominfo Kota Tasikmalaya 2021</a></p>
			</div>
		</div>
	</div>
	</footer>
	</div>
	<script src="<?= base_url('news/assets/js/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('news/assets/js/wow.min.js'); ?>"></script>
	<script src="<?= base_url('news/assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('news/assets/js/slick.min.js'); ?>"></script>
	<script src="<?= base_url('news/assets/js/jquery.li-scroller.1.0.js'); ?>"></script>
	<script src="<?= base_url('news/assets/js/jquery.newsTicker.min.js'); ?>"></script>
	<script src="<?= base_url('news/assets/js/jquery.fancybox.pack.js'); ?>"></script>
	<script src="<?= base_url('news/assets/js/custom.js'); ?>"></script>
	<?= $this->renderSection('foot'); ?>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	<!-- <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script> -->
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#tpen').DataTable();
		});
	</script>
</body>

</html>
