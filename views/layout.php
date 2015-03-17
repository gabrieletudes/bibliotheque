<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Librery - Cours PHP</title>
<meta name="Librery" content="yes">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="contenu-principal">
		<header>
			<nav>
				<a href="#" id="logo">MALIBRERY</a>
				<a href="<?php echo $_SERVER['PHP_SELF'];  ?>?a=accueil&m=books">Livres</a>
				<a href="<?php echo $_SERVER['PHP_SELF'];  ?>?a=accueil&m=authors">Auteurs</a>
				<a href="<?php echo $_SERVER['PHP_SELF'];  ?>?a=accueil&m=genres">Genres</a>
				<a href="admin.html">Administrateur</a>
			</nav>
			<div id="header">
				<span>Ma Librery</span>
			</div>
		</header>
		<?php include($data['view']); ?>
		<footer>
			<h4>Contactez moi</h4>
			<span>
				<strong>Email:</strong> 
				<a href="mailto:info@meslivressoncool.com">info@meslivressoncool.com</a>
			</span>
			<div>
				<a href="#" id="facebook">Facebook</a>
				<a href="#" id="youtube">Youtube</a>
				<a href="#" id="twitter">Twitter</a>
			</div>
		</footer>
	</div>
</body>
</html>