<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<h2>PETA KELURAHAN KOTA TASIKMALAYA</h2>
<div id="maps"></div>
<!-- mapleaflet -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<!-- sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
	var mymap = L.map('maps').setView([-7.3274, 108.2207], 12);
	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		maxZoom: 18,
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1,
		accessToken: 'pk.eyJ1Ijoic2lrZWwzNSIsImEiOiJja29nNnkzc3AwYmYzMm9wN28yaGN2cjFuIn0.fSf9N8NEezExa0sGtyffNQ'
	}).addTo(mymap);
	<?php
	foreach ($Map as $maps => $b)
	{
		?>
		var myStyle = {
			"color": "<?= $b['warna']; ?>",
			"weight": 3,
			"opacity": 0.65
		};
		L.geoJSON({

			"type": "FeatureCollection",
			"features": [<?= $b['koordinat']; ?>]

		}, {
			style: myStyle
		}).addTo(mymap).on('click', function() {
			Swal.fire({
				title: "kelurahan <?= $b['nama_kelurahan']; ?>",
				text: "jumlah penduduk = <?= $b['jml_pddk']; ?>",
				imageUrl: "<?= base_url('img/default.jpg'); ?>",
				imageWidth: 400,
				imageHeight: 200,
				imageAlt: 'Custom image',
				animation: false
			})
		});
		<?php
	} ?>
</script>
<?= $this->endSection(); ?>