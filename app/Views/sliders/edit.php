<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>UBAH DATA sliders</h2>

            <form action="/sliders/update/<?= $sliders['id']; ?>" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>
                <input type="hidden" name="gambarlama" value="<?= $sliders['name']; ?>">
                <div class="row mb-3">
                    <label for="label" class="col-sm-2 col-form-label">label</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('label')) ? 'is-invalid' : ''; ?>" id="label" value="<?= $sliders['label']; ?>" name="label" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('label'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $sliders['name']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" name="name" id="name" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                            <label class="custom-file-label" for="name"><?= $sliders['name']; ?></label>
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