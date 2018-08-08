<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Navigation</title>
	<!--<link href="{{ asset('/css/app.css') }}" rel="stylesheet">-->

	<!-- Latest compiled and minified Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><!-- Scripts -->

	<style>
		html {
			position: relative;
			min-height: 100%;
		}
		body {
			margin-bottom: 60px;
		}
		.footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 60px;
			line-height: 60px;
			background-color: #f5f5f5;
		}
		body > .container {
			padding: 80px 15px 0;
		}

		.footer > .container {
			padding-right: 15px;
			padding-left: 15px;
		}
	</style>
	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified Bootstrap JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
</head>

<body>

	<nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="/">Navigation</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="nav-content">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="categories" class="nav-link">Categories</a></li>
					<li class="nav-item"><a href="movies" class="nav-link">Movies</a></li>
					<li class="nav-item"><a href="contact" class="nav-link">Contact Us</a></li>
					<li class="nav-item"><a href="about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="login" class="nav-link">Login</a></li>
					<li class="nav-item"><a href="register" class="nav-link">Register</a></li>
					<li class="nav-item disabled"><a href="logout" class="nav-link disabled">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
	@yield('content')
	</div>
	<footer class="footer">
		<div class="container"><span class="text-muted">&copy; 2018 - Navigation</span></div>
	</footer>

</body>
</html>
