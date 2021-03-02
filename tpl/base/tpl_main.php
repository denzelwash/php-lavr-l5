<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/bootstrap.css">
	<style>
		.page-wrap {
			display: flex;
			flex-direction: column;
			min-height: 100vh;
		}

		.site-footer {
			margin-top: auto;
		}

		header {
			margin-bottom: 1.5rem;
		}

		nav {
			background-color: #ececec;
			margin-top: 0.5rem;
		}
	</style>
</head>

<body>
	<div class="page-wrap">
		<header class="site-header">
			<div class="container">
				<h1 class="logo__title h3">My blog</h1>
			</div>
			<nav class="site-nav">
				<div class="container">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="<?= BASE_URL ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= BASE_URL ?>add">Add</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="site-content">
			<div class="container">
				<?= $content ?>
			</div>
		</div>
		<footer class="site-footer">
			<div class="container">
				&copy; site about all
			</div>
		</footer>
	</div>
</body>

</html>