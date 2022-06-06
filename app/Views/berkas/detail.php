<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>REVIEW</h2>
            <div class="card" style="width: 40rem;">
                <img src="/img/<?= $berita['gambar']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $berita['judul']; ?></h5>
                    <p class="card-text"><?= $berita['isi']; ?></p>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>