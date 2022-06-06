<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h2>Ubah Tampilan Beranda dan Navigasi</h2>

			<form action="/layout/update/<?= $nav['id']; ?>" method="post" enctype="multipart/form-data">

				<?= csrf_field(); ?>
				<input type="hidden" name="logolama" value="<?= $nav['logo']; ?>">
				<div class="row mb-3">
					<label for="warna" class="col-sm-2 col-form-label">warna latar</label>
					<div class="col-sm-10">
						<input type="color" id="favcolor" name="warna" value="<?= $nav['warna']; ?>">
						<div class="invalid-feedback">
							<?= $validation->getError('warna'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="panel" class="col-sm-2 col-form-label">warna panel</label>
					<div class="col-sm-10">
						<input type="color" id="favcolor" name="panel" value="<?= $nav['panel']; ?>">
						<div class="invalid-feedback">
							<?= $validation->getError('panel'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="t_berita" class="col-sm-2 col-form-label"> warna Text berita</label>
					<div class="col-sm-10">
						<input type="color" id="favcolor" name="t_berita" value="<?= $nav['t_berita']; ?>">
						<div class="invalid-feedback">
							<?= $validation->getError('t_berita'); ?>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<label for="t_panel" class="col-sm-2 col-form-label">warna Text panel</label>
					<div class="col-sm-10">
						<input type="color" id="favcolor" name="t_panel" value="<?= $nav['t_panel']; ?>">
						<div class="invalid-feedback">
							<?= $validation->getError('t_panel'); ?>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="form-group row">
						<label for="logo" class="col-sm-2 col-form-label">logo</label>
						<div class="col-sm-2">
							<img src="/logo/<?= $nav['logo']; ?>" class="img-thumbnail img-preview">
						</div>
						<div class="col-sm-8">
							<div class="custom-file">
								<input type="file" class="custom-file-input <?= ($validation->hasError('logo')) ? 'is-invalid' : ''; ?>" name="logo" id="logo" onchange="previewImg()">
								<div class="invalid-feedback">
									<?= $validation->getError('logo'); ?>
								</div>
								<label class="custom-file-label" for="logo"><?= $nav['logo']; ?></label>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-10 offset-sm-2">
							<button type="submit" class="btn btn-primary">Ubah</button>
						</div>
					</div>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
