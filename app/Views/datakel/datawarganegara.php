<?= $this->extend('Layout/template'); ?>
<?= $this->section('title'); ?>
Data Warga Negara
<?= $this->endSection(); ?>
<?= $this->section('latnews'); ?>
<section id="newsSection">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="latest_newsarea"> <span>Latest News</span>
				<ul id="ticker01" class="news_sticker">
					<?php
					foreach ($berita as $b)
					{
						?>
						<li><a href="/beritaharian/detail/<?= $b['id']; ?>"><img src="img/<?= $b['gambar']; ?>" alt=""><?= $b['judul']; ?></a></li>
						<?php
					} ?>
				</ul>
				<div class="social_area">
					<ul class="social_nav">
						<li class="material-icons"><a href="#"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-7 col-md-7 col-sm-7">


		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div id="gpr-kominfo-widget-container">
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
<?= $this->endSection(); ?>
