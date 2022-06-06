<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>UBAH DATA profile</h2>

            <form action="/profile/update/<?= $profile['id']; ?>" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="label" class="col-sm-2 col-form-label">label</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('label')) ? 'is-invalid' : ''; ?>" id="label" value="<?= $profile['label']; ?>" name="label" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('label'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" value="<?= $profile['judul']; ?>" name="judul" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="isi" class="col-sm-2 col-form-label">ISI</label>
                    <textarea name="isi" id="summernote" cols="30" rows="10"> <?= $profile['isi']; ?></textarea>
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