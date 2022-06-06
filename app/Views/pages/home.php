b<?= $this->extend('Layout/template'); ?>
<?= $this->section('title'); ?>
<?php foreach ($P as $b) { ?>
	Sistem Informasi Kelurahan <?= $b['nama_kel'] ?>
<?php } ?>
<?= $this->endSection(); ?>
<?= $this->section('head'); ?>
<?= $this->endSection(); ?>
<?= $this->section('latnews'); ?>
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="latest_newsarea"> <span>Latest News</span>
				<ul id="ticker01" class="news_sticker">
					<?php foreach ($berita as $b) { ?>
						<li><a id="t_panel" href="/beritaharian/detail/<?= $b['id']; ?>"><img src="img/<?= $b['gambar']; ?>" alt=""><?= $b['judul']; ?></a></li>
					<?php } ?>
				</ul>
				<div class="social_area">
					<ul class="social_nav">
						<li class="material-icons"><a href="#"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="slick_slider">
				<?php foreach ($sliders as $C) { ?>
					<div class="single_iteam"> <a href="#"> <img src="/slider/<?= $C['name']; ?>" alt=""></a>
						<div class="slider_article">
							<?php foreach ($P as $b) { ?>
								<h2 class="text-uppercase"><a class="slider_tittle " href="#">SELAMAT DATANG DI SIKEL <?= $b['nama_kel'] ?></a></h2>
							<?php } ?>
							<p><?= $C['label']; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

	</div>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>



	<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8">
				<div class="single_post_content">
					<h2><span>Berita</span></h2>
					<?php $i = 1 + (6 * ($currentpage - 1)); ?>
					<?php $bab = ($berita);
					foreach ($bab as $b) : ?>
						<div class="single_post_content_left">
							<ul class="business_catgnav  wow fadeInDown">
								<li>
									<figure class="bsbig_fig"> <a href="/beritaharian/detail/<?= $b['id']; ?>" class="featured_img"> <img alt="" src="img/<?= $b['gambar']; ?>"> <span class="overlay"></span> </a>
										<figcaption><a href="/beritaharian/detail/<?= $b['id']; ?>" id="t_berita"><?= substr($b['judul'], 0, 50); ?>. Baca Selengkapnya...</a> </figcaption>
										<h4 id="t_berita">di upload pada <?= date('d M Y', strtotime($b['created_at'])); ?></h4>
									</figure>
								</li>
							</ul>
						</div>
					<?php endforeach; ?>
<?= $pager->links('berita', 'berita_pagination'); ?>
				</div>
	
		</div>
		<div class="col-md-4">
			<div class="panel-heading">
				<?php foreach ($P as $b) { ?>
					<div class="right_content">
						<div class="single_post_content">
							<h2><span>Batas Kelurahan <?= $b['nama_kel'] ?></span></h2>
							<div id="maps"></div>
						</div>
					</div>
				<?php }  ?>
			</div>
		</div>
		<div class="col-md-4">
		    <div class="panel-heading">
				<div class="single_post_content">
			<div id="gpr-kominfo-widget-container">
			</div>
			</div>
			</div>
		</div>

	</div>
	</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="footer-link-terkait">
		
				<center>
                    <div class="single_post_content">
					<h2><span>LINK TERKAIT</span></h2>
					</div>
					<div class="row">

						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href="http://lapor.go.id" target="_blank"><img id="link-5" class="link-terkait" src="https://data.tasikmalayakota.go.id/wp-content/uploads/2020/08/lapor.png" alt="lapor"></a>

							<a href="https://lpse.tasikmalayakota.go.id/eproc4" target="_blank"><img id="link-2" class="link-terkait" src="https://portal.tasikmalayakota.go.id/assets/uploads/a3.png"></a>
							<a href="https://data.tasikmalayakota.go.id/" target="_blank"><img id="link-3" class="link-terkait" src="https://data.tasikmalayakota.go.id/wp-content/uploads/2020/02/LOGO-NEW-ODT-MINI.png" alt="open-government-indonesia"></a>
							<a href="http://diskominfo.tasikmalayakota.go.id" target="_blank"><img id="link-4" class="link-terkait" src="https://data.tasikmalayakota.go.id/wp-content/uploads/2019/08/GREY-KOMINFO.png" alt="diskominfo"></a>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href="https://portal.tasikmalayakota.go.id/" target="_blank"><img id="link-1" class="link-terkait" src="/logo/tasikmalayakota.png" alt="Tasikmalayakota"></a>
							<a href="http://smartkelurahan.tasikmalayakota.go.id/" target="_blank"><img id="link-6" class="link-terkait" src="/logo/smartkel.png" alt="Tasikmalayakota"></a>
						</div>
					</div>
				</center>
		
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="/css/calendar.js"></script>
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
<?= $this->endSection(); ?>
<?= $this->section('foot'); ?>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<!-- sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="/geo/leaflet.ajax.js"></script>
<script>
	var kelurahan = L.layerGroup();
	<?php
	foreach ($P as $maps => $b) {
	?>
		var myStyle = {
			"color": "<?= $b['warna']; ?>",
			"weight": 2,
			"opacity": 0.75
		};


		var jsonTest = new L.GeoJSON({
			"type": "FeatureCollection",
			"features": [<?= $b['koordinat']; ?>]
		}, {
			// onEachFeature: popUp,
			style: myStyle
		}).addTo(kelurahan).on('click', function() {
			Swal.fire({
				title: "kelurahan <?= $b['nama_kel']; ?>",
				html: ' <table id="tpen" class="display"><tr><td class="dtd">Kelurahan</td><td class="dtd"><?= $b['nama_kel']; ?></td></tr><tr><td class="dtd">Kecamatan</td><td class="dtd"><?= $b['kecamatan']; ?></td></tr><tr><td class="dtd">Laki Laki</td><td class="dtd"><?= $b['lakilaki']; ?> jiwa</td></tr><tr><td class="dtd">Perempuan</td><td class="dtd"><?= $b['perempuan']; ?> jiwa</td></tr><tr><td class="dtd">Jumlah KK</td><td class="dtd"><?= $b['kk']; ?>KK</td></tr><tr><td class="dtd">Jumlah Penduduk</td><td class="dtd"><?= $b['lakilaki'] + $b['perempuan']; ?> jiwa</td></tr></table>    ',


			})
		});;
	<?php
	} ?>

	var mbAttr = '',
		mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var hybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
			tileSize: 512,
			zoomOffset: -1,
			subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
			attribution: mbAttr
		}),
		streets = L.tileLayer(mbUrl, {
			id: 'mapbox/streets-v11',
			tileSize: 512,
			zoomOffset: -1,
			attribution: mbAttr
		});
	<?php foreach ($P as $b) { ?>
		var map = L.map('maps', {
			center: [-7.345929490940457, 108.21857067544946],
			zoom: 12,
			layers: [streets, kelurahan]
		});
	<?php
	} ?>
	var baseLayers = {
		"hybrid": hybrid,
		"Streets": streets,

	};

	var overlays = {
		"kelurahan": kelurahan,
	};

	L.control.layers(baseLayers, overlays).addTo(map);
</script>
<?= $this->endSection(); ?>
