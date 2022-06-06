<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="mt-2">KELOLA AKUN</h1>
			<a href="/register" class="btn btn-primary mt-3">Tambah</a>
			<br><br><br>
			<?php if (session()->getFlashdata('pesan')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->getFlashdata('pesan'); ?>
				</div>
			<?php endif; ?>
			<table class="display" id="tmap">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">email</th>
						<th scope="col">username</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($users as $b) : ?>
						<tr>
							<td scope="row"><?= $i++; ?></td>
							<td><?= $b['email']; ?></td>
							<td><?= $b['username']; ?></td>
							<td>
								<form action="/register/delete/<?= $b['id']; ?>" method="POST">
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
