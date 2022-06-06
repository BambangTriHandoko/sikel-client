<?= $this->extend('layout/template2'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-2">
		    </div>
		<div class="col-md-10">
			<h1 class="mt-2">Data batas Kelurahan</h1>
			<?php if (session()->getFlashdata('pesan')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->getFlashdata('pesan'); ?>
				</div>
			<?php endif; ?>
			<a href="/kelurahan/create" class="btn btn-primary mt-3">Tambah</a>
			<a href="/kelurahan/view" class="btn btn-primary mt-3">VIEW</a>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">nama kelurahan</th>
						<th scope="col">kecamatan</th>
						<th scope="col">warna</th>
						<th scope="col">nama file</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php
					foreach ($Peta as $key => $b) {
					?>
						<tr>
							<th scope="row"><?= $i++; ?></th>
							<td><?= $b['nama_kel']; ?></td>
							<td><?= $b['kecamatan']; ?></td>
							<td>
								<div style="color:<?= $b['warna']; ?>;"><b>WARNA</b></div>

							</td>
							<td><?= $b['nama']; ?></td>
							<td><a href="/kelurahan/edit/<?= $b['id']; ?>" class="btn btn-success">edit</a></td>
							<td>
								<form action="/kelurahan/delete/<?= $b['id']; ?>" method="POST">
									<?= csrf_field(); ?>
									<button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus? ');">hapus</button>
								</form>
							</td>
						</tr>
					<?php
					} ?>
<?= $this->endSection(); ?>