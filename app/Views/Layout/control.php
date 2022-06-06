<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="mt-2">NAV DAN PANEL</h1>
			<?php if (session()->getFlashdata('pesan')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->getFlashdata('pesan'); ?>
				</div>
			<?php endif; ?>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">nama file</th>
						<th scope="col">gambar</th>
						<th scope="col">latar</th>
						<th scope="col">panel</th>
						<th scope="col">text panel</th>
						<th scope="col">text berita</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach (array_reverse($nav) as $b) : ?>
						<tr>
							<td><?= $b['logo']; ?></td>
							<td><img src="/logo/<?= $b['logo']; ?>" class="sampul" alt=""></td>
							<td><?= $b['warna']; ?></td>
							<td><?= $b['panel']; ?></td>
							<td><?= $b['t_panel']; ?></td>
							<td><?= $b['t_berita']; ?></td>
							<td><a href="/Layout/edit/<?= $b['id']; ?>" class="btn btn-success">edit</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>
