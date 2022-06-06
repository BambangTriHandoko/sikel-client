<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h2>Ubah alamat</h2>

		<form action="/layout/updatealamat/<?= $p['id']; ?>" method="post" enctype="multipart/form-data">

<?= csrf_field(); ?>

  <div class="mb-3">
		<label for="InputForName" class="form-label">alamat</label>
		<input type="text" name="alamat" class="form-control" placeholder="masukan alamat"  value="<?= $p['alamat']; ?>">
	</div>
  	<div class="mb-3">
		<label for="InputForName" class="form-label">link_alamat</label>
		<input type="text" name="link_alamat" class="form-control" placeholder="masukan link_alamat"  value="<?= $p['link_alamat']; ?>">
	</div>
	<div class="mb-3">
		<label for="InputForName" class="form-label">NO Telephone</label>
		<input type="text" name="no_hp" class="form-control" placeholder="masukan nomor telephone"  value="<?= $p['no_hp']; ?>">
	</div>
	<div class="mb-3">
		<label for="InputForEmail" class="form-label">Email</label>
		<input type="email" name="email" class="form-control" placeholder="contoh email@gmail.com" id="InputForEmail" value="<?= $p['email']; ?>">
	</div>
	<div class="mb-3">
		<label for="InputForName" class="form-label">twitter</label>
		<input type="text" name="tw" class="form-control" placeholder="contoh: @KominfoPemkottsm"  value="<?= $p['tw']; ?>">
	</div>
	<div class="mb-3">
		<label for="InputForName" class="form-label">LInk twitter</label>
		<input type="text" name="link_tw" class="form-control" placeholder="contoh : http://twitter.com/cofee"  value="<?= $p['link_tw']; ?>">
	</div>
	<div class="mb-3">
		<label for="InputForName" class="form-label">Instagram</label>
		<input type="text" name="ig" class="form-control" placeholder="contoh : @instagram"  value="<?= $p['ig']; ?>">
	</div>
	<div class="mb-3">
		<label for="InputForName" class="form-label">link Instagram</label>
		<input type="text" name="link_ig" class="form-control" placeholder="contoh : http://instagram.com/kominfo_pemkot_tsm"  value="<?= $p['link_ig']; ?>">
	</div>
	<div class="mb-3">
		<label for="InputForName" class="form-label">web Resmi</label>
		<input type="text" name="web" class="form-control" placeholder="nama website"  value="<?= $p['web']; ?>">
	</div>
	<div class="mb-3">
		<label for="InputForName" class="form-label">link web Resmi</label>
		<input type="text" name="link_web" class="form-control" placeholder="http://tasikmalayakota.go.id"  value="<?= $p['link_web']; ?>">
	</div>



	<button type="submit" class="btn btn-primary">Submit</button>  
</form>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
