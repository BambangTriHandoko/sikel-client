<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="mt-2">berkas</h1>
			<a href="/berkas/create" class="btn btn-primary mt-3">Tambah</a>
			<br><br><br>
			<?php if (session()->getFlashdata('pesan')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->getFlashdata('pesan'); ?>
				</div>
			<?php endif; ?>
			<table class="display" id="tmap">
				<thead>
					<tr>
						<td scope="col">#</td>
						<th scope="col">judul</th>
						<th scope="col">label</th>
						<th scope="col">nama file</th>
						<th scope="col">tahun</th>
						<th scope="col">aksi</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($Berkas as $b) : ?>
						<tr>
							<th scope="row"><?= $i++; ?></th>
							<td><?= $b['judul']; ?></td>
							<td><?= $b['label']; ?></td>
							<td><?= $b['file']; ?></td>
							<td><?= $b['tahun']; ?></td>
							<td><a href="/berkas/edit/<?= $b['id']; ?>" class="btn btn-success">edit</a></td>
							<td>
								<form action="/berkas/delete/<?= $b['id']; ?>" method="POST">
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
