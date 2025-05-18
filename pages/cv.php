<?php
	$nav_cv = 'current';
	include('../common/conf.php');
?>
<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Carine Chaulacel - Curriculum Vitae</title>
		<meta name="viewport" content="width=device-width"/>
		<meta name="description" content="CV de Carine Chaulacel"/>
		<link rel="apple-touch-icon" sizes="180x180" href="<?= STATICS_PATH ?>/image/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= STATICS_PATH ?>/image/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= STATICS_PATH ?>/image/favicon-16x16.png">
        <link rel="manifest" href="<?= STATICS_PATH ?>/image/site.webmanifest">
		<link type="text/css" rel="stylesheet" href="<?= STATICS_PATH ?>/css/styles.css" />
	</head>
	<body>
		<div class="page cv">

			<?php 
				include('../templates/header.php');
			?>
			<div class="content">
				<section class="side">
					<div class="">
						<p class="titre">Profil</p>
						<p>Formée tout d'abord à la structuration et à la transformation de documents avec les langages XML et XSLT , j'ai découvert l'univers du web et ses langages avec la société Groupe La Centrale.</p>
						<p>C'est aussi là que j'ai découvert l'agilité. J'ai fait mes armes en tant que scrum master et participé au déploiement des méthodes agiles dans l'entreprise.</p>
						<p>J’ai évolué dans plusieurs univers (droit, éditorial, petites annonces, forum, retail ..) au sein d'équipes parfois pluri disciplinaires.</p>
						<p>Lorsque je suis dans une entreprise, je m’intéresse aux métiers des autres équipes que la mienne ainsi qu’au fonctionnement de l'entreprise de manière générale et je m’investis dans la vie de l’entreprise.</p>
					</div>
					
					<div class="card background-two card_big">
						<p class="titre">Diplômes et formations</p>
						<p><b>Master</b> - Linguistique et informatique - <i>Université Nancy 2</i></p>
						<p><b>Master</b> - Lexicographie et terminographie - <i>Université Lille 3</i></p>
						<p>Formation personnelle à <b>Wordpress</b></p>
					</div>

					<div class="card background-five card_big">
						<p class="titre">Centres d'interêt</p>
						<p>Le metal (concerts, festivals ...)</p>
						<p>Les chats (en vrai et en vidéos)</p>
						<p>Les vidéos de chats qui écoutent du metal</p>
						<p>Parler de tout ça avec mes amis</p>
					</div>
				</section>

					
	<div class="card parcours background-two">
		<p class="titre">Parcours</p>
		<p>Après un master en linguistique et informatique, j'ai débuté avec XML/XSLT, puis me suis spécialisée dans le web chez Groupe La Centrale (intégration, agilité, Scrum Master). Chez Yellowkorner, j'ai travaillé sur des projets retail (Yellowkorner, Zeinberg, CMS interne).</p>
		<p>Habituée à collaborer avec des designers sur des maquettes précises ou à m'adapter à des demandes variées, je m'intègre facilement dans des environnements divers.</p>
	</div>
	<div class="card parcours background-one">
		<p class="titre">Réalisations</p>
		<p>Extension ChangeUrl</p>
		<p>J'ai développé une extension Chrome en React permettant de modifier dynamiquement les URL via des remplacements (regex ou texte) et l'ajout de paramètres. Fonctionnalités incluent la gestion des boutons personnalisés, l'import/export de configurations JSON, et un mode de débogage avec logs conditionnels. Stockage local via localStorage et interface utilisateur intuitive.<p>
		<a href="https://chromewebstore.google.com/detail/changeurl/ffnagmjeaolejfandagidkaapfomnofc?hl=fr">ChangeUrl (Chrome Web Store)</a>
		<p class="titre">Sites</p>
		<p><a href="https://www.caradisiac.com/" target="_blank'">Caradisiac</a></p>
		<p><a href="https://forum-auto.caradisiac.com/" target="_blank">Forum Auto</a></p>
		<p><a href="https://www.lacentrale.fr/" target="_blank">La Centrale</a>.</p>
		<p><a href="https://www.yellowkorner.com" target="_blank">YellowKorner</a></p>
		<p><a href="https://www.zeinberg.com" target="_blank">Zeinberg</a></p>
	</div>
			</div>
		</div>
		
	</body>
</html>