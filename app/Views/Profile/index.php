<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="mt-2">Profile</h1>
			<!--<a href="/profile/create" class="btn btn-primary mt-3">Tambah</a>-->
			<br>
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
						<th scope="col">label</th>
						<th scope="col">judul</th>
						<th scope="col">tanggal</th>
						<th scope="col">aksi</th>
						<th scope="col">aksi</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($Profile as $b) : ?>
						<tr>
							<td scope="row"><?= $i++; ?></td>
							<td><?= $b['label']; ?></td>
							<td><?= $b['judul']; ?></td>
							<td><?= $b['created_at']; ?></td>
							<td><a href="/profile/detail/<?= $b['id']; ?>" class="btn btn-success">View</a></td>
							<td><a href="/profile/edit/<?= $b['id']; ?>" class="btn btn-success">edit</a></td>
							<!--<td>-->
							<!--	<form action="/profile/delete/<?= $b['id']; ?>" method="POST">-->
							<!--		<?= csrf_field(); ?>-->
							<!--		<button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus? ');">hapus</button>-->
							<!--	</form>-->
							<!--</td>-->
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>
