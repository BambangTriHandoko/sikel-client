<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('head'); ?>
<style>
	.display {
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

	.td {
		border: 3px solid #AAAAAA;
		padding: 3px 2px;
	}

	.col {
		border: 3px solid #AAAAAA;
		padding: 3px 2px;
	}
</style>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="mt-2">map</h1>
			<?php if (session()->getFlashdata('pesan')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->getFlashdata('pesan'); ?>
				</div>
			<?php endif; ?>
			<!-- <a href="/map/create" class="btn btn-primary mt-3">Tambah</a> -->
			<!-- <a href="/map/view" class="btn btn-primary mt-3">VIEW</a> -->
			<br><br>
			<table id="tmap" class="display">
				<thead class="thead">
					<tr>
						<th scope="col">no.</th>
						<th scope="col">nama kelurahan</th>
						<th scope="col">kecamatan</th>
						<th scope="col">warna</th>
						<th scope="col">koordinat</th>
						<th scope="col">nama file</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php
					foreach ($Map as $key => $b) {
					?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $b['nama_kel']; ?></td>
							<td><?= $b['kecamatan']; ?></td>
							<td>
								<div style="color:<?= $b['warna']; ?>;"><b>WARNA</b></div>

							</td>
							<td><?= $b['koordinat']; ?></td>
							<td><?= $b['nama']; ?></td>
							<td><a href="/map/edit/<?= $b['id']; ?>" class="btn btn-success">edit</a></td>
							<td>
								<!-- <form action="/map/delete/<?= $b['id']; ?>" method="POST">
									<?= csrf_field(); ?>
									<button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus? ');">hapus</button>
								</form> -->
							</td>
						</tr>
					<?php
					} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>
