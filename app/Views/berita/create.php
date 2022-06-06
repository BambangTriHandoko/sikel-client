<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h2>TAMBAH DATA BERITA</h2>

			<form action="/berita/save" method="post" enctype="multipart/form-data">

				<?= csrf_field(); ?>
				<div class="row mb-3">
					<label for="judul" class="col-sm-2 col-form-label">Judul</label>
					<div class="col-sm-10">
						<input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus>
						<div class="invalid-feedback">
							<?= $validation->getError('judul'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="label" class="col-sm-2 col-form-label">label</label>
					<div class="col-sm-10">
						<input type="text" class="form-control <?= ($validation->hasError('label')) ? 'is-invalid' : ''; ?>" id="label" name="label" autofocus>
						<div class="invalid-feedback">
							<?= $validation->getError('label'); ?>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="gambar" class="col-sm-2 col-form-label">gambar</label>
					<div class="col-sm-2">
						<img src="/img/default.jpg" class="img-thumbnail img-preview">
					</div>
					<div class="col-sm-8">
						<div class="custom-file">
							<input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" name="gambar" id="gambar" onchange="previewImg()">
							<div class="invalid-feedback">
								<?= $validation->getError('gambar'); ?>
							</div>
							<label class="custom-file-label" for="gambar">Pilih gambar</label>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="isi" class="col-sm-2 col-form-label">ISI</label>
					<textarea name="isi" id="summernote" cols="50" rows="20"></textarea>
				</div>
				<div class="row mb-3">
					<div class="col-sm-10 offset-sm-2">
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
