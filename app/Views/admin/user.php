<?= $this->extend('layout/template2'); ?>
<?= $this->section('content'); ?>
<div class="container">
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
			<a href="/register" class="btn btn-primary mt-3">Tambah</a>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">no.</th>
						<th scope="col">Email</th>
						<th scope="col">Username</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php
					foreach ($users as $key => $b) {
					?>
						<tr>
							<th scope="row"><?= $i++; ?></th>
							<td><?= $b['email']; ?></td>
							<td><?= $b['username']; ?></td>
							<td>
								<form action="/register/delete/<?= $b['id']; ?>" method="POST">
									<?= csrf_field(); ?>
									<button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus? ');">hapus</button>
								</form>
							</td>
						</tr>
					<?php
					} ?>
<?= $this->endSection(); ?>