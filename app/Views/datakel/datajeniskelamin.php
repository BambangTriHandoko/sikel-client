<?= $this->extend('Layout/template'); ?>
<?= $this->section('title'); ?>
Data Jenis Kelamin
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
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="container">
			<div class="row">
					<div class="single_post_content">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div id="piechart" style="width: 420px; height: 500px;"></div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<br>
					<br>
					<br>
					<br>
					<table class="display" style="width: 350px; height: 300px;">
						<thead class="thead">
							<tr>
								<th class="dth" scope="col">nama</th>
								<th class="dth" scope="col">data</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($warga as $value) { ?>
								<tr>
									<td class="dtd">kelurahan</td>
									<td class="dtd"><?= $value['nama_kel']; ?></td>
								</tr>
								<tr>
									<td class="dtd">kecamatan</td>
									<td class="dtd"><?= $value['kecamatan']; ?></td>
								</tr>
								<tr>
									<td class="dtd">laki laki</td>
									<td class="dtd"><?= $value['laki_laki']; ?> jiwa</td>
								</tr>
								<tr>
									<td class="dtd">perempuan</td>
									<td class="dtd"><?= $value['perempuan']; ?> jiwa</td>
								</tr>
								<tr>
									<td class="dtd">jumlah penduduk</td>
									<td class="dtd"><?= $value['laki_laki'] + $value['perempuan']; ?> jiwa</td>
									</td>
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
			foreach ($warga as $key => $value) {
				$sum += $value['laki_laki'];
				$sum2 += $value['perempuan'];
			}
			?>['name', 'value'],
			['laki laki', <?= $sum; ?>],
			['perempuan', <?= $sum2; ?>],
		]);

		var options = {
			title: 'Data Jenis Kelamin',
			is3D: true,
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		chart.draw(data, options);
	}
</script>
<?= $this->endSection(); ?>
