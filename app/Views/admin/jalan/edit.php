<?= $this->extend('layout/template2'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            </div>
        <div class="col-md-10">
            <h2>UBAH DATA jalan</h2>

                        <form action="/jalan/update/<?= $jalan['id']; ?>" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">File GeoJson</label>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" id="nama" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                            <label class="custom-file-label" for="file"><?= $jalan['nama']; ?></label>
                        </div>
                    </div>
                </div>

        <div class="row mb-3">
            <label for="warna" class="col-sm-2 col-form-label">warna</label>
            <div class="col-sm-10">
                <select name='warna'>
                    <option value="#FF0000">merah</option>
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