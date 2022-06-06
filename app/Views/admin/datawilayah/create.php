<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h2>TAMBAH DATA profile</h2>

			<form action="/data_kel/datawilayah_save" method="post" enctype="multipart/form-data">

				<?= csrf_field(); ?>
				<div class="row mb-3">
					<label for="nama_kel" class="col-sm-2 col-form-label">Nama Kelurahan</label>
					<div class="col-sm-6">
						<input type="text" class="form-control <?= ($validation->hasError('nama_kel')) ? 'is-invalid' : ''; ?>" id="nama_kel" name="nama_kel" autofocus>
						<div class="invalid-feedback">
							<?= $validation->getError('nama_kel'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="laki_laki" class="col-sm-2 col-form-label">laki_laki</label>
					<div class="col-sm-3">
						<input type="text" class="form-control <?= ($validation->hasError('laki_laki')) ? 'is-invalid' : ''; ?>" id="laki_laki" name="laki_laki">
						<div class="invalid-feedback">
							<?= $validation->getError('laki_laki'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="perempuan" class="col-sm-2 col-form-label">perempuan</label>
					<div class="col-sm-3">
						<input type="text" class="form-control <?= ($validation->hasError('perempuan')) ? 'is-invalid' : ''; ?>" id="perempuan" name="perempuan">
						<div class="invalid-feedback">
							<?= $validation->getError('perempuan'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="rt" class="col-sm-2 col-form-label">rt</label>
					<div class="col-sm-3">
						<input type="text" class="form-control <?= ($validation->hasError('rt')) ? 'is-invalid' : ''; ?>" id="rt" name="rt">
						<div class="invalid-feedback">
							<?= $validation->getError('rt'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="rw" class="col-sm-2 col-form-label">rw</label>
					<div class="col-sm-3">
						<input type="text" class="form-control <?= ($validation->hasError('rw')) ? 'is-invalid' : ''; ?>" id="rw" name="rw">
						<div class="invalid-feedback">
							<?= $validation->getError('rw'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="KK" class="col-sm-2 col-form-label">KK</label>
					<div class="col-sm-3">
						<input type="text" class="form-control <?= ($validation->hasError('KK')) ? 'is-invalid' : ''; ?>" id="KK" name="KK">
						<div class="invalid-feedback">
							<?= $validation->getError('KK'); ?>
						</div>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-sm-3 offset-sm-2">
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
