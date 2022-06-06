<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" type="image/x-icon" href="logo/KotaTasikmalaya.png">
	<link rel="stylesheet" href="<?= base_url('/css/admin.css'); ?>" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('/admin/css/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('/admin/css/dataTables.bootstrap5.min.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('/admin/css/style.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('/admin/summernote/summernote-bs4.min.css'); ?>">
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">x
	<style type="text/css">
		#maps {
			height: 650px;
		}
	</style>
	<?= $this->renderSection('head'); ?>
	<title>SELAMAT DATANG DI ADMIN SIDE</title>
</head>

<body>
	<!-- top navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
				<span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
			</button>
			<a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="/fradmin">Admin</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="topNavBar">
				<form class="d-flex ms-auto my-3 my-lg-0">
					<!-- <div class="input-group">
						<input class="form-control" type="search" placeholder="Search" aria-label="Search" />
						<button class="btn btn-primary" type="submit">
							<i class="bi bi-search"></i>
						</button>
					</div> -->
				</form>
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-person-fill"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="/login/logout">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- top navigation bar -->
	<!-- offcanvas -->
	<div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
		<div class="offcanvas-body p-0">
			<nav class="navbar-dark">
				<ul class="navbar-nav">
					<li>
						<div class="user-panel mt-6 pb-3 mb-6 d-flex">
							<p>.....</p>
							<div class="image">
								<img src="<?= base_url('/logo/admin.png'); ?>" class="img-circle elevation-2" alt="User Image" width="100">
							</div>
					</li>
					<li>
						<div class="text-muted small fw-bold text-uppercase px-3 mb-3">
							user <?php $session = session() ?>
							<?= $session->get('username');
							?> </h2>
						</div>
					</li>
					<li>
						<a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
							<span class="me-2"><i class="bi bi-grid"></i></span>
							<span>Menu Utama</span>
							<span class="ms-auto">
								<span class="right-icon">
									<i class="bi bi-chevron-down"></i>
								</span>
							</span>
						</a>
						<div class="collapse" id="layouts">
							<ul class="navbar-nav ps-3">

								<li>
									<a href="/pesan" class="nav-link px-3">
										<ion-icon name="book-outline"></ion-icon>
										<span class="me-2"><i class="bi bi-newspaper"></i></span>
										<span>Pesan</span>
									</a>
								</li>
								<li>
									<a href="/berita" class="nav-link px-3">
										<ion-icon name="book-outline"></ion-icon>
										<span class="me-2"><i class="bi bi-newspaper"></i></span>
										<span>Berita</span>
									</a>
								</li>
								<li>
									<a href="/berkas" class="nav-link px-3">
										<span class="me-2"><i class="bi bi-file-text-fill"></i></span>
										<span>Berkas</span>
									</a>
								</li>
								<li>
									<a href="/profile" class="nav-link px-3">
										<span class="me-2"><i class="bi bi-book-fill"></i></span>
										<span>Profile</span>
									</a>
								</li>
								<li>
									<a href="/pelayanan" class="nav-link px-3">
										<span class="me-2"><i class="bi bi-book-fill"></i></span>
										<span>Pelayanan</span>
									</a>
								</li>
								<li>
									<a href="/users" class="nav-link px-3">
										<span class="me-2"><i class="bi bi-person-circle"></i></span>
										<span>User</span>
									</a>
								</li>
								<li>
									<a href="/sliders" class="nav-link px-3">
										<span class="me-2"><i class="bi bi-map"></i></span>
										<span>Slider</span>
									</a>
								</li>
								<li>
									<a href="/layout/nav" class="nav-link px-3">
										<span class="me-2"><i class="bi bi-grid"></i></span>
										<span>Nav</span>
									</a>
								</li>
								<li>
									<a href="/layout/alamat" class="nav-link px-3">
										<span class="me-2"><i class="bi bi-grid"></i></span>
										<span>Alamat</span>
									</a>
								</li>


							</ul>
					</li>

					<li class="my-4">
						<hr class="dropdown-divider bg-light" />
					</li>
					<!-- <li>
						<a href="/data_kel/datawilayah" class="nav-link px-3">
							<span class="me-2"><i class="bi bi-grid"></i></span>
							<span>Kependudukan</span>
						</a>
					</li> -->
					<li class="my-4">
						<hr class="dropdown-divider bg-light" />
					</li>
					<li>
						<a href="/login/logout" class="nav-link px-3">
							<span class="me-2"><i class="bi bi-app"></i></span>
							<span>LOGOUT</span>
						</a>
					</li>
		</div>
		</ul>

		</ul>
		</nav>
	</div>
	</div>
	<!-- offcanvas -->
	<main class="mt-5 pt-3">
		<?= $this->renderSection('content'); ?>
	</main>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="<?= base_url('/admin/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?= base_url('/admin/js/script.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
	<script>
		$('#summernote').summernote({
			tabsize: 2,
			height: 120,
			toolbar: [

				['basic', ['style', 'fontname', 'color']],
				['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['fontsize', ['fontsize']],
				['color', ['furecolor', 'blackcolor']],
				['block', ['ul', 'ol', 'paragraph']],
				['media', ['link', 'picture', 'video', 'table', 'hr']],
				['height', ['height', 'codeview', 'fullscreen', 'undo', 'redo']]
			]
		});
	</script>
	<script>
		function previewImg() {
			const gambar = document.querySelector('#gambar');
			const gambarLabel = document.querySelector('.custom-file-label');
			const imgPreview = document.querySelector('.img-preview');

			gambarLabel.textContent = gambar.files[0].name;

			const filegambar = new FileReader();
			filegambar.readAsDataURL(gambar.files[0]);

			filegambar.onload = function(e) {
				imgPreview.src = e.target.result;
			}

		}
	</script>
	<?= $this->renderSection('foot'); ?>
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#tmap').DataTable();
		});
	</script>
</body>

</html>
