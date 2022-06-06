<?= $this->extend('Layout/Tadmin'); ?>

<?= $this->section('content'); ?>
<?php if (session()->getFlashdata('pesan')) : ?>
	<div class="alert alert-success" role="alert">
		<?= session()->getFlashdata('pesan'); ?>
	</div>
<?php endif; ?>

<h2>SELAMAT DATANG</h2>
<br>
<h2> <?php $session = session();
		echo $session->get('username'); ?></h2>
<br>
<h2>Di halaman admin</h2>

<?= $this->endSection(); ?>
