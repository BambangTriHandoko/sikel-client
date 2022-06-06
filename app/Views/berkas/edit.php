<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>UBAH DATA BERKAS</h2>

            <form action="/berkas/update/<?= $berkas['id']; ?>" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" value="<?= $berkas['judul']; ?>" name="judul" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                        <div class="row mb-3">
            <label for="label" class="col-sm-2 col-form-label">Label</label>
            <div class="col-sm-10">
                <select name='label'>
                    <option value="produk">Produk Hukum</option>
                    <option value="informasi">informasi Publik</option>
                    </select>
                <div class="invalid-feedback">
            </div>
        </div>
                </div>
                <div class="row mb-3">
                    <label for="label" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('tahun')) ? 'is-invalid' : ''; ?>" id="tahun" value="<?= $berkas['tahun']; ?>" name="tahun" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('tahun'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label">file</label>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('file')) ? 'is-invalid' : ''; ?>" name="file" id="file" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('file'); ?>
                            </div>
                            <label class="custom-file-label" for="file"><?= $berkas['file']; ?></label>
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