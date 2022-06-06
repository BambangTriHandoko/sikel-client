<!doctype html>
<html lang="en">
  

<head>
	    
	<!-- Required meta tags -->
	    
	<meta charset="utf-8">
	    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    
	<!-- Bootstrap CSS -->
	    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	 
	<link rel="stylesheet" href="/css/login.css">
	<style>

	</style>
	    <title>Login</title>
</head>
  

<body>
	<div class="container">

		<div class="body"></div>
		                <?php if (session()->getFlashdata('msg')) : ?>
		                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
		                <?php endif; ?>
		<div class="grad"></div>
		<div class="header">
			<div>LOGIN<span>SIKEL</span></div>
		</div>
		<br>
		<div class="login">    
			<form action="/login/auth" method="post">
				<input type="email" placeholder="email" name="email" value="<?= set_value('email') ?>"><br>
				<input type="password" placeholder="password" name="password"><br>
				<button type="submit" value="Login">Login</button>
			</form>
		</div>
	</div>
	<script type="text/javascript">
	</script> 
	    
	<!-- Popper.js first, then Bootstrap JS -->
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
	  
</body>

</html>
