<?= $this->extend('Layout/template'); ?>
<?= $this->section('head'); ?>
<style>
	.display {
		border: 1px solid #1C6EA4;
		background-color: #EEEEEE;
		width: 100%;
		text-align: left;
		border-collapse: collapse;
	}

	.thead {
		background: #20BC42;
		background: -moz-linear-gradient(top, #58cd71 0%, #36c255 66%, #20BC42 100%);
		background: -webkit-linear-gradient(top, #58cd71 0%, #36c255 66%, #20BC42 100%);
		background: linear-gradient(to bottom, #58cd71 0%, #36c255 66%, #20BC42 100%);
		border-bottom: 2px solid #444444;
		border: 3px solid #AAAAAA;
		padding: 3px 2px;
	}

	.td {
		border: 3px solid #AAAAAA;
		padding: 3px 2px;
	}

	.col {
		border: 3px solid #AAAAAA;
		padding: 3px 2px;
	}
</style>
<?= $this->endSection(); ?>
<?= $this->section('title'); ?>
Produk Hukum
<?= $this->endSection(); ?>
<?= $this->section('latnews'); ?>
<section id="newsSection">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="latest_newsarea"> <span>Latest News</span>
				<ul id="ticker01" class="news_sticker">
					<?php foreach ($berita as $b) { ?>
						<li><a href="/beritaharian/detail/<?= $b['id']; ?>"><img src="img/<?= $b['gambar']; ?>" alt=""><?= $b['judul']; ?></a></li>
					<?php } ?>
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
<section id="newsSection">
	<h2>PRODUK HUKUM</h2>
	<div class="row">
		<div class="col-md-8">
			<table id="tpen" class="display">
				<thead class="thead">
					<tr>
						<th class="col" scope="col">no.</th>
						<th class="col" scope="col">judul</th>
						<th class="col" scope="col">tahun</th>
						<th class="col" scope="col">aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					foreach ($berkas as  $b) : ?>
						<tr>
							<td class="td" scope="row"><?= $i++; ?></td>
							<td class="td"><?= $b['judul']; ?></td>
							<td class="td"><?= $b['tahun']; ?></td>
							<td class="td">
								<a class="btn btn-info" href="/pdf/<?= $b['file']; ?>" download>Download</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
</section>

<?= $this->endSection(); ?>
