<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h2>TAMBAH DATA map</h2>

			<form action="/map/save" method="post" enctype="multipart/form-data">

				<?= csrf_field(); ?>
				<div class="col-sm-10">
					<div class="row mb-3">
						<label for="nama_kel" class="col-sm-2 col-form-label">nama kelurahan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control <?= ($validation->hasError('nama_kel')) ? 'is-invalid' : ''; ?>" id="nama_kel" name="nama_kel" autofocus>
							<div class="invalid-feedback">
								<?= $validation->getError('nama_kel'); ?>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-10">
							<div class="row mb-3">
								<label for="koordinat" class="col-sm-2 col-form-label">nama kelurahan</label>
								<div class="col-sm-10">
									<input type="text" class="form-control <?= ($validation->hasError('koordinat')) ? 'is-invalid' : ''; ?>" id="koordinat" name="koordinat" autofocus>
									<div class="invalid-feedback">
										<?= $validation->getError('koordinat'); ?>
									</div>
								</div>
							</div>
							<div class="row mb-3">
								<div class="row mb-3">
									<label for="kecamatan" class="col-sm-2 col-form-label">kecamatan</label>
									<div class="col-sm-10">

										<select name='kecamatan'>
											<?php foreach ($kec as $k) { ?>
												<option value="<?= $k['nama_kec']; ?>"> <?= $k['nama_kec']; ?></option>
											<?php } ?>
											<option value="-"> null </option>


										</select>
									</div>
									<label for="nama_kel" class="col-sm-2 col-form-label">warna</label>
									<div class="col-sm-10">
										<select name='warna'>
											<option value="#FF0000">merah</option>
											<option value="#FF8C00">oren</option>
											<option value="#008000">hijau</option>
											<option value="#0000FF">biru</option>
											<option value="#FFD700">kuning</option>
											<option value="#FF1493">pink</option>
											<option value="#9400D3">ungu</option>
											<option value="#006400">Hijau gelap</option>
											<option value="#00FFFF">Cyan</option>
											<option value="#808080">silver</option>
											<option value="#7CFC00">hijau muda</option>
											<option value="#A52A2A">coklat</option>

										</select>
										<div class="invalid-feedback">
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label for="file" class="col-sm-2 col-form-label">file GeoJSON</label>
									<div class="col-sm-8">
										<div class="custom-file">
											<input type="file" class="custom-file-input <?= ($validation->hasError('file')) ? 'is-invalid' : ''; ?>" name="nama" id="nama" onchange="previewImg()">
											<div class="invalid-feedback">
												<?= $validation->getError('nama'); ?>
											</div>
											<label class="custom-file-label" for="file">Pilih file</label>
										</div>
									</div>
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
