<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="mt-2">ALAMAT</h1>
			<?php if (session()->getFlashdata('pesan')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->getFlashdata('pesan'); ?>
				</div>
			<?php endif; ?>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Alamat</th>
						<th scope="col">No.HP</th>
						<th scope="col">Email</th>
						<th scope="col">twitter</th>
						<th scope="col">Instagram</th>
						<th scope="col">Web REsmi</th>
						<th scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach (array_reverse($p) as $b) : ?>
						<tr>
							<td><?= $b['alamat']; ?></td>
							<td><?= $b['no_hp']; ?></td>
							<td><?= $b['email']; ?></td>
							<td><?= $b['tw']; ?></td>
							<td><?= $b['ig']; ?></td>
							<td><?= $b['web']; ?></td>
							<td><a href="/Layout/editalamat/<?= $b['id']; ?>" class="btn btn-success">edit</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>