<?= $this->extend('Layout/template'); ?>
<?= $this->section('title'); ?>
Data Pendidikan
<?= $this->endSection(); ?>
<?= $this->section('head'); ?>
<style>
	#tpen {
		border: 1px solid #1C6EA4;
		background-color: #EEEEEE;
		width: 100%;
		text-align: left;
		border-collapse: collapse;
	}

	.thead {
		background: #20BC42;
		background: -moz-linear-gradient(top, #58cd71 0%, #36c255 66%, #20BC42 100%);
		background: -webkit-linear-gradient(top, #58cd71 0%, #36c255 66%, #20BC42 100%);
		background: linear-gradient(to bottom, #58cd71 0%, #36c255 66%, #20BC42 100%);
		border-bottom: 2px solid #444444;
		border: 3px solid #AAAAAA;
		padding: 3px 2px;
	}

	.dtd {
		border: 3px solid #AAAAAA;
		padding: 3px 2px;
	}

	.dth {
		border: 3px solid #AAAAAA;
		padding: 3px 2px;
	}
</style>
<?= $this->endSection(); ?>
<?= $this->section('latnews'); ?>
<section id="newsSection">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="latest_newsarea"> <span>Latest News</span>
				<ul id="ticker01" class="news_sticker">
					<?php
					foreach ($berita as $b) {
					?>
						<li><a href="/beritaharian/detail/<?= $b['id']; ?>"><img src="img/<?= $b['gambar']; ?>" alt=""><?= $b['judul']; ?></a></li>
					<?php
					} ?>
				</ul>
				<div class="social_area">
					<ul class="social_nav">
						<li class="material-icons"><a href="#"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
	    		<div class="single_post_content">
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div id="piechart" style="width: 430px; height: 500px;"></div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3">
			<br>
			<br>
			<table class="display">
				<thead class="thead">
					<tr>
						<th class="dth" scope="col">pendidikan Terakhir</th>
						<th class="dth" scope="col">laki-laki</th>
						<th class="dth" scope="col">perempuan</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($warga as $value) { ?>
						<tr>
							<td class="dtd">Belum Sekolah</td>
							<td class="dtd"><?= $value['belumsekolah_lakilaki']; ?></td>
							<td class="dtd"><?= $value['belumsekolah_perempuan']; ?></td>
						</tr>
						<tr>
							<td class="dtd">Belum Tamat SD</td>
							<td class="dtd"><?= $value['belumtamatSD_lakilaki']; ?></td>
							<td class="dtd"><?= $value['belumtamatSD_perempuan']; ?></td>
						</tr>
						<tr>
							<td class="dtd">SD/Sederajat</td>
							<td class="dtd"><?= $value['sd/sederajat_lakilaki']; ?></td>
							<td class="dtd"><?= $value['sd/sederajat_perempuan']; ?></td>
						</tr>
						<tr>
							<td class="dtd">SMP/Sederajat</td>
							<td class="dtd"><?= $value['smp/sederajat_lakilaki']; ?></td>
							<td class="dtd"><?= $value['smp/sederajat_perempuan']; ?></td>
						</tr>
						<tr>
							<td class="dtd">SMA/Sederajat</td>
							<td class="dtd"><?= $value['sma/sederajat_lakilaki']; ?></td>
							<td class="dtd"><?= $value['sma/sederajat_perempuan']; ?></td>
						</tr>
						<tr>
							<td class="dtd">DI/DII</td>
							<td class="dtd"><?= $value['di/dii_lakilaki']; ?></td>
							<td class="dtd"><?= $value['di/dii_perempuan']; ?></td>
						</tr>
						<tr>
							<td class="dtd">DIII</td>
							<td class="dtd"><?= $value['diii_lakilaki']; ?></td>
							<td class="dtd"><?= $value['diii_perempuan']; ?></td>
						</tr>
						<tr>
							<td class="dtd">S1/DIV</td>
							<td class="dtd"><?= $value['s1/div_lakilaki']; ?></td>
							<td class="dtd"><?= $value['s1/div_perempuan']; ?></td>
						</tr>
						<tr>
							<td class="dtd">S2</td>
							<td class="dtd"><?= $value['s2_lakilaki']; ?></td>
							<td class="dtd"><?= $value['s2_perempuan']; ?></td>
						</tr>
						<tr>
							<td class="dtd">S3</td>
							<td class="dtd"><?= $value['s3_lakilaki']; ?></td>
							<td class="dtd"><?= $value['s3_perempuan']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load("current", {
		packages: ["corechart"]
	});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			<?php
			$sum = 0;
			$sum2 = 0;
			$sum3 = 0;
			$sum4 = 0;
			$sum5 = 0;
			$sum6 = 0;
			$sum7 = 0;
			$sum8 = 0;
			$sum9 = 0;
			$sum1 = 0;
			foreach ($warga as $key => $value) {
				$sum +=  $value['belumsekolah_lakilaki'] + $value['belumsekolah_perempuan'];
				$sum2 += $value['belumtamatSD_lakilaki'] + $value['belumtamatSD_perempuan'];
				$sum3 += $value['sd/sederajat_lakilaki'] + $value['sd/sederajat_perempuan'];
				$sum4 += $value['smp/sederajat_lakilaki'] + $value['smp/sederajat_perempuan'];
				$sum5 += $value['sma/sederajat_lakilaki'] + $value['sma/sederajat_perempuan'];
				$sum6 += $value['di/dii_lakilaki'] + $value['di/dii_perempuan'];
				$sum7 += $value['diii_lakilaki'] + $value['diii_perempuan'];
				$sum8 += $value['s1/div_lakilaki'] + $value['s1/div_perempuan'];
				$sum9 += $value['s2_lakilaki'] + $value['s2_perempuan'];
				$sum1 += $value['s3_lakilaki'] + $value['s3_perempuan'];
			}
			?>['name', 'value'],
			['belum sekolah', <?= $sum; ?>],
			['belum tamat SD', <?= $sum2; ?>],
			['SD/sederajat', <?= $sum3; ?>],
			['SMP/sederajat', <?= $sum4; ?>],
			['SMA/sederajat', <?= $sum5; ?>],
			['DI/DII', <?= $sum6; ?>],
			['DIII', <?= $sum7; ?>],
			['S1/DIV', <?= $sum8; ?>],
			['S2', <?= $sum9; ?>],
			['S3', <?= $sum1; ?>],
			['S3', <?= $sum1; ?>],
		]);

		var options = {
			title: 'Data Pendidikan',
			is3D: true,
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		chart.draw(data, options);
	}
</script>
<?= $this->endSection(); ?>
