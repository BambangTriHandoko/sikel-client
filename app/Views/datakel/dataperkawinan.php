<?= $this->extend('Layout/template'); ?>
<?= $this->section('title'); ?>
Data Perkawinan
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
		<div class="container">
			<div class="row">
			    		<div class="single_post_content">
				<div class="col-lg-7 col-md-7 col-sm-7">
					<div id="piechart" style="width: 440px; height: 500px;"></div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<br>
					<br>
					<br>
					<table class="display" style="width: 350px; height: 300px;">
						<thead class="thead">
							<tr>
								<th class="dth" scope="col">Status Perkawinan</th>
								<th class="dth" scope="col">laki laki</th>
								<th class="dth" scope="col">Perempuan</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($warga as $value) { ?>
								<tr>
									<td class="dtd">Belum Kawin</td>
									<td class="dtd"><?= $value['belum_kawin_lakilaki']; ?></td>
									<td class="dtd"><?= $value['belum_kawin_perempuan']; ?></td>
								</tr>
								<tr>
									<td class="dtd">kawin</td>
									<td class="dtd"><?= $value['kawin_lakilaki']; ?></td>
									<td class="dtd"><?= $value['kawin_perempuan']; ?></td>
								</tr>
								<tr>
									<td class="dtd">cerai hidup</td>
									<td class="dtd"><?= $value['cerai_hidup_lakilaki']; ?></td>
									<td class="dtd"><?= $value['cerai_hidup_perempuan']; ?></td>
								</tr>
								<tr>
									<td class="dtd">Cerai Mati</td>
									<td class="dtd"><?= $value['cerai_mati_lakilaki']; ?> </td>
									<td class="dtd"><?= $value['cerai_mati_perempuan']; ?> </td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

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
			foreach ($warga as $key => $value) {
				$sum += $value['belum_kawin_lakilaki'] + $value['belum_kawin_perempuan'];
				$sum2 += $value['kawin_perempuan'] + $value['kawin_lakilaki'];
				$sum3 += $value['cerai_hidup_perempuan'] + $value['cerai_hidup_lakilaki'];
				$sum4 += $value['cerai_mati_perempuan'] + $value['cerai_mati_lakilaki'];
			}
			?>['name', 'value'],
			[' belum kawin', <?= $sum; ?>],
			['kawin', <?= $sum2; ?>],
			['cerai hidup', <?= $sum3; ?>],
			['cerai mati', <?= $sum4; ?>],
		]);

		var options = {
			title: 'Data Status Perkawinan',
			is3D: true,
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		chart.draw(data, options);
	}
</script>
<?= $this->endSection(); ?>
