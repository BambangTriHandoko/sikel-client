<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="mt-2">pesan</h1>
			<br>
			<br>
			<?php if (session()->getFlashdata('pesan')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->getFlashdata('pesan'); ?>
				</div>
			<?php endif; ?>
			<table class="display" id="tmap">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">nama</th>
						<th scope="col">email/nomor Handphone</th>
						<th scope="col">tanggal</th>
						<th scope="col">aksi</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($Pesan as $b) : ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $b['nama']; ?></td>
							<td><?= $b['email']; ?></td>
							<td><?= $b['created_at']; ?></td>
							<td><a href="/pesan/detail/<?= $b['id']; ?>" class="btn btn-success">Lihat</a></td>
							<td>
								<form action="/pesan/delete/<?= $b['id']; ?>" method="POST">
									<?= csrf_field(); ?>
									<button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus? ');">hapus</button>
								</form>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
<?= $this->endSection(); ?>
