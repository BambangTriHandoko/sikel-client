<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="mt-2">Data kependudukan</h1>
			<?php if (session()->getFlashdata('pesan')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->getFlashdata('pesan'); ?>
				</div>
			<?php endif; ?>
			<a href="/data_kel/datawilayah_create" class="btn btn-primary mt-3">Tambah</a>
			<table class="display" id="tmap">
				<thead>
					<tr>
						<th scope="col">no.</th>
						<th scope="col">nama kelurahan</th>
						<th scope="col">jumlah penduduk</th>
						<th scope="col">laki laki</th>
						<th scope="col">perempuan</th>
						<th scope="col">RT</th>
						<th scope="col">Rw</th>
						<th scope="col">aksi</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1;
					foreach ($warga as $b) : ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $b['nama_kel'] ?></td>
							<td><?= $b['perempuan'] + $b['laki_laki'] ?></td>
							<td><?= $b['laki_laki'] ?></td>
							<td><?= $b['perempuan'] ?></td>
							<td><?= $b['rt'] ?></td>
							<td><?= $b['rw'] ?></td>
							<td><a href="/data_kel/datawilayah_edit/<?= $b['id'] ?>" class="btn btn-success">edit</a></td>
							<td>
								<form action="/data_kel/datawilayah_delete/<?= $b['id'] ?>" method="POST">
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
