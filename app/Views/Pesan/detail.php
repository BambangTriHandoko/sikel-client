<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('head'); ?>
<style>
    .sampul {
        width: 700px;

    }
</style>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>PESAN</h2>
            <div class="card" style="width: 70rem;">
                <div class="card-body">
                    <h5 class="card-title">dari      :<?= $Pesan['nama']; ?></h5>
                    <h5 class="card-title">alamat    :<?= $Pesan['email']; ?></h5>
                    <h5 class="card-title">isi pesan :</h5>
                    <p class="card-text"><?= $Pesan['pesan']; ?></p>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>