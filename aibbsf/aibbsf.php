<?php
/*
 * Template Name: AIBBSF
 * */
?>
<?php
/**
 *  * @package WordPress
 *   * @subpackage Default_Theme
 *    */


?>

<!doctype html>
<html class="no-js" lang="fr">
<head>
		<meta charset="UTF-8">
		<title>Avenir(s) d'internet: Big Brother entre réalité et science-fiction</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() . '/aibbsf/aibbsf.css') ?>" media="all">
		<link rel="stylesheet" href="<?php echo( get_stylesheet_directory_uri() . '/aibbsf/knacss.css') ?>" media="all">
</head>
<body>
	
	<header id="header" role="banner" class="line pal w800p-ce">
		<h3 style="color: grey">*** Page en cours d'écriture/design ***</h3>
		<h1>Avenir(s) d’internet</h1>
		<h2>Big Brother entre réalité et science-fiction</h2>
		<p class="">Une série de conférences et d’ateliers à Strasbourg...<br/>
		...pour comprendre et regarder internet autrement.</p>
	</header>

	<div id="main" role="main" class="line">

			<div id="sf-intro"><div class="w800p-ce pal">
				<p>2035, le consortium Google Networks (GN) règne sans partage sur tous les échanges d’informations à l’échelle mondiale. Face à l’effondrement de la souveraineté des états, le groupe est devenu le prestataire de sécurité de tout l’occident, garant de la stabilité en temps de crise : grâce aux implants cérébraux ‘Google imagine’ et aux technologies de surveillance globale de l’agence de sécurité américaine, GN sait tout ce que vous faites, se rappelle ce que vous avez fait, anticipe ce que vous ferez.</p>
				<p>Toute contestation politique est étouffée avant même d’advenir, grâce aux programmes personnalisés d’anticipation de la déviance et au contrôle par GN des programmes d’éducation. Seul quelques groupes d’activistes vivent coupés du reste de l’humanité en refusant la connexion au réseau Google universel : on les surnomme les Rebelles de l’Intimité...</p>
				<p class="arial"><br/>Triste récit ? Futurologie manichéenne grotesque ? Ou parabole de notre présent (déjà très) inquiètant ?</p>
			</div></div>

			<div id="conf-ouverture"><div class="w800p-ce pal">
				<h2>Conférence d'ouverture</h2>
				<h3> « Surveillance de masse et dystopie: imaginer, raconter, s'alarmer. »</h3>
				<p>L'évolution d'internet est inquiétante, la surveillance de masse est une réalité. Pourtant cette menace invisible, technique, noyée dans des discours rassurants, est parfois difficile à saisir et à prendre au sérieux.</p>
				<p>Cette conférence propose de confronter récit de science-fiction et présentation des enjeux de la surveillance de masse.</p>
				<p>En ouverture, un auteur de science fiction viendra raconter un futur dystopique, vision fictionnelle mais non moins rigoureuse de ce qui nous menace déjà aujoud'hui. Ce récit sera ensuite mis en lien par un spécialiste de la problématique avec les réalités de la surveillance de masse : depuis les smartphones espions, jusqu'aux assassinats par drones, il se pourrait que la réalité ait peu à envier à la fiction.</p>
			</div></div>

			<div id="retorquer"><div class="w800p-ce pal">
				<p>On pourrait alors rétorquer : « Ces récits sont certes alarmants, mais que puis-je donc faire en pratique contre ces dérives ? »</p>
				<p>C’est simple : n’ayez plus peur de l’eau(*). Pour comprendre les enjeux et voir les choses différemment, prenez le temps d’une petite plongée sous la surface…</p>
			</div></div>

			<div id="nocloud"><div class="w800p-ce pal">
				<p>Quelles données faites vous circuler sur le réseau ? Comment circulent-elles ?
Chez qui résident-elles ?</p>
				<div class="grid-2-tiny-1 ptm">
					<img class="" src="<?php echo( get_stylesheet_directory_uri() . '/aibbsf/nocloud.png') ?>"/>
					<div>
						<p class="">Démystifier l'internet</p>
						<p class="">« There is no cloud, just other people’s computer. »</p>
						<p class="">« Le "cloud" n’existe pas, il y a seulement les ordinateurs des autres. »</p>
					</div>
				</div>
				<p>Avez-vous réellement confiance dans les personnes (Google, Apple, Free, ... autre ) qui hébergent vos données ? Si non, pourquoi ne pas les héberger vous-même… ou chez vos amis ?</p>
				<p>Et nous, en fait, on aimerait vous aider à y voir plus clair ;-).</p>
			</div></div>

			<div id="ateliers"><div class="w800p-ce pal">
				<h2>Ateliers d'initiation à l'auto-hébergement</h2>
				<p>L'auto-hébergement c'est héberger ses données, ses services internets (mails, réseau social, cloud, serveur de musique ou video) sur un ordinateur que vous contrôlez, chez vous ou chez un fournisseur de confiance.</p>
				<p>Pour promouvoir cette possibilité alternative d'envisager la vie numérique, le hackstub proposera une série de quatres ateliers d'introduction : s'ils ciblent un public réellement profane, ces ateliers seront l'occasion de découvrir de façon abordable et émancipatrice le fonctionnement d'internet et de nombreuses réalités de l'informatique négligées hors des milieux de passionés et de professionnels.</p>
				<h4>Atelier 1: Les bases du fonctionnement d'internet.</h4>
				<p>Cet atelier abordera certaines notions à la base de l'internet (client/serveur, protocole, routing, DNS, le web) à travers des jeux de rôles et des exercices pratiques adaptés à chacun. </p>
				<h4>Atelier 2: Découvrir le vrai visage d'un serveur </h4>
				<p>L'objectif de cet atelier sera d'explorer de façon transversale un ordinateur (une machine virtuelle) fonctionnant avec le système d'exploitation Debian et notamment d'apprivoiser doucement les interfaces en ligne de commande.</p>
				<h4>Atelier 3: Introduction à Yunohost et la brique internet.</h4>
				<p>La brique internet est un petit boitier à brancher chez soi, faisant office :</br>
					1) de client VPN pour offrir un réseau sûr</br>
					2) de serveur grâce au système Yunohost.
				</p>
				<p>L'atelier cherchera à présenter la brique internet, son installation et à passer en revue les principales possibilités offertes par un serveur Yunohost.</p>
				<h4>Atelier 4: Vers l'autonomie, comprendre et résoudre un problème sur votre serveur</h4>
				<p>Ce dernier atelier, plus ouvert, permettra premièrement de revenir sur des éventuelles questions liées aux autres ateliers mais plus largement de proposer des méthodes pour comprendre et résoudre un problème survenant sur un serveur : où chercher des informations précises sur le problème, où trouver des ressources pour le comprendre, où trouver de l'aide? </p>
				<p></br>Les quatres ateliers bien qu'ils supposent chacun certains prérequis, sont prévus pour être indépendants les uns des autres. Par ailleurs, ils sont orientés vers la découverte et compréhension globale des enjeux techniques de l'autohébergement, et non pas vers l'approfondissement : pour aller plus loin, diverses ressources seront sélectionnées en plus des supports des ateliers</p>
			</div></div>

			<div id="utopie-dystopie"><div class="w800p-ce pal">
				<img src="<?php echo( get_stylesheet_directory_uri() . '/aibbsf/utopie-dystopie.png') ?>"/>
			</div></div>

			<div id="conf-cloture"><div class="w800p-ce pal">
				<h2>Conférence de clôture</h2>
				<h3> « Défendre et concrétiser une utopie : un internet convivial, fait par ses utilisateurs et pour ses utilisateurs. »</h3>
				<p>Face aux promoteurs d'un avenir technologique toujours plus indiscret et hors de contrôle, il est primordial de  défendre des alternatives.</p>
				<p>Cette conférence sera l'occasion de faire le point sur les évènements précédents et de présenter les initiatives, locales ou non, qui s'engagent pour une autre vision de l'internet.</p>
				<p>Le FAI associatif Alsace Réseau Neutre viendra notamment présenter comment se construit aujourd'hui un internet associatif.</p>
			</div></div>

			<div id="calendrier"><div class="w800p-ce pal">
				<h2>Calendrier du cycle</h2>
				<p><strong>jeudi 10 décembre 2015:</strong></br>
 Conférence d'ouverture, « Surveillance de masse et dystopie: imaginer, raconter, s'alarmer. »</p>
				<p><strong>janvier, février 2016:</strong></br>
 Ateliers d'initiation à l'auto-hébergement</p>
				<p><strong>mars 2016:</strong></br>
 Conférence de cloture, « Défendre et concrétiser une utopie : un internet convivial, fait par ses utilisateurs et pour ses utilisateurs. »</p>
			</div></div>

			<div id="organisation"><div class="w800p-ce pal">
				<p>Ce projet est organisé par le Hackstub, hackerspace à Strasbourg en partenariat avec le Shadok centre de culture numérique de la ville de Strasbourg et le FAI associatif Alsace Réseau Neutre.</p>
				<div class="grid-3-tiny-2 pal w75">
					<img src="<?php echo( get_stylesheet_directory_uri() . '/aibbsf/hackstub.png') ?>"/>
					<img src="<?php echo( get_stylesheet_directory_uri() . '/aibbsf/shadok_gc.png') ?>" alt="logo-shadok" height="90" width="270"/>
					<img src="<?php echo( get_stylesheet_directory_uri() . '/aibbsf/arn.png') ?>"/>
				</div>
			</div></div>

	</div>
	<footer id="footer" role="contentinfo" class="line pam txtcenter">
	</footer>

</body>
</html>

