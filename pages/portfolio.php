<?php
	$nav_presentation = 'current';
	include('../common/conf.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Carine Chaulacel - Portfolio</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="Portfolio de Carine Chaulacel"/>
		<link rel="apple-touch-icon" sizes="180x180" href="<?= STATICS_PATH ?>/image/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?= STATICS_PATH ?>/image/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= STATICS_PATH ?>/image/favicon-16x16.png">
		<link rel="manifest" href="<?= STATICS_PATH ?>/image/site.webmanifest">
		<link rel="stylesheet" href="<?= STATICS_PATH ?>/css/index.css"/>
		<script src="https://kit.fontawesome.com/efd5bd8198.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="page portfolio">
			<?php 
				include('../templates/header.php');
				include('../templates/contact.php');
				include('../templates/main.php');
				include('../templates/side.php');
			?>
		</div>
		<script src="<?= STATICS_PATH ?>/js/scripts.js"></script>
	</body>
</html>