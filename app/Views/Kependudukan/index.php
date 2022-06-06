<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<h1>DATA KEPENDUDUKAN</h1>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">kelurahan</th>
						<th scope="col">jumlah</th>
						<th scope="col">laki laki</th>
						<th scope="col">perempuan</th>
						<th scope="col">created_at</th>
						<th scope="col">update_at</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1 + (10 * ($currentpage - 1)); ?>
					<?php foreach ($Kependudukan as $b) : ?>
						<tr>
							<th scope="row"><?= $i++; ?></th>
							<td><?= $b['nama_kelurahan']; ?></td>
							<td><?= $b['jml_pddk']; ?></td>
							<td><?= $b['j_man']; ?></td>
							<td><?= $b['j_woman']; ?></td>
							<td><?= $b['created_at']; ?></td>
							<td><?= $b['created_at']; ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<?= $this->endSection(); ?>
