<?= $this->extend('layout/template2'); ?>
<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-2">
		    </div>
		<div class="col-md-10">
			
<h2>SELAMAT DATANG</h2>
<br>
<h2> <?php $session = session();
		echo $session->get('username'); ?></h2>
<br>
<h2>Di halaman admin</h2>
<?= $this->endSection(); ?>