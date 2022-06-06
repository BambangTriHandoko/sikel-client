<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="mt-2">Sliders</h1>
			<a href="/Sliders/create" class="btn btn-primary mt-3">Tambah</a>
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
						<th scope="col">nama</th>
						<th scope="col">label</th>
						<th scope="col">gambar</th>
						<th scope="col">tanggal</th>
						<th scope="col">aksi</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php
					foreach ($sliders as $b) {
					?>
						<tr>
							<td scope="row"><?= $i++; ?></td>
							<td><?= $b['name']; ?></td>
							<td><?= $b['label']; ?></td>
							<td><img src="/slider/<?= $b['name']; ?>" class="sampul" alt=""></td>
							<td><?= $b['created_at']; ?></td>
							<td><a href="/Sliders/edit/<?= $b['id']; ?>" class="btn btn-success">edit</a></td>
							<td>
								<form action="/Sliders/delete/<?= $b['id']; ?>" method="POST">
									<?= csrf_field(); ?>
									<button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus? ');">hapus</button>
								</form>
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
