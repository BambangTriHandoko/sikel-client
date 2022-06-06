<?= $this->extend('Layout/template'); ?>
<?= $this->section('title'); ?>
<?= $berita['judul']; ?>
<?= $this->endSection(); ?>
<?= $this->section('head'); ?>
<link rel="/img/<?= $berita['gambar']; ?>" href="//beritaharian/detail/<?= $berita['id']; ?>" />
<!-- <link rel="stylesheet" href="/css/style.css"> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<title><?= $berita['judul']; ?></title>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<div class="container"></div>
<div class="row">
	<div class="col-lg-1 col-md-1 col-sm-1">

	</div>
	<div class="col-lg-10 col-md-10 col-sm-10">
		<h3><?= $berita['judul']; ?></h3>
		<br>
		<h5>dipublikasi pada tanggal <?= date('d M Y', strtotime($berita['created_at'])); ?></h5>
		<img class="img-responsive" src="/img/<?= $berita['gambar']; ?>">
		<p><?= $berita['isi']; ?></p>
	</div>
</div>
</div>
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
<?= $this->endSection(); ?>
<?= $this->section('foot'); ?>
<?= $this->endSection(); ?>
