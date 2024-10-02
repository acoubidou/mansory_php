<!DOCTYPE html>
<html lang="FR-fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="robots" content="noindex,nofollow">
		<title><?php echo($strTitre); ?></title>
		<link rel="icon" type="image/vnd.icon" href="/mansory_php/assets/images/general/mansory_favicon.ico">
		<link href="/mansory_php/assets/css/bootstrap.css" rel="stylesheet">
		<link href="/mansory_php/assets/css/style.css" rel="stylesheet">
		<link href="/mansory_php/assets/css/style.scss" rel="stylesheet">
		<script src="/mansory_php/assets/js/recherche_voitures.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Roboto:wght@100;300;400;500;700;900&family=Tai+Heritage+Pro&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/6a3fabcc27.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="divFixFooter">
			<header>
				<nav class="navbar navbar-expand-lg bg-body-tertiary">
					<div class="container-fluid">
						<a class="navbar-brand" href="/mansory_php/index.php"><img src="/mansory_php/assets/images/general/mansory_logo_noir.png" width="220rem" height="auto"></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav nav-fill">
                            <?php include("nav.php");?>
							</div>
						</div>
					</div>
				</nav>
			</header>