<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>REVIEW</h2>
            <div class="card" style="width: 40rem;">

                <div class="card-body">
                    <h5 class="card-title"><?= $Profile['judul']; ?></h5>
                    <p class="card-text"><?= $Profile['isi']; ?></p>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>