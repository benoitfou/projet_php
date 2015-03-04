<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Form@Cup</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<header>
			<img src="images/ecran_logo.png" alt="logo Forma=@Cup" id="logo" />
			<h1>Form@Cup</h1>
			<div id="share">

			</div>
		</header>
		<br>

		<nav>
			<ul class="menu">
				<li id="accueil"><a href="index.php">Accueil</a></li>
				<li id="formations"><a href="#">Formations</a></li>
				<li id="compagnie"><a href="#">Compagnie</a></li>
				<li id="contact"><a href="#">Contacts</a></li>
			</ul>
		</nav>
		<br>

		<section>
			<br>
			<h1>Fiche de contact</h1>
			<br>
			<br>
			<div id="typeforma">
			<?php
				foreach ($tabPersonnes as $indice => $personne) {
					print('<tr><td>'.$personne['nom'].'</td>');
					print('<td>'.$personne['prenom'].'</td>');
					print('<td>'.$personne['mail'].'</td>');
					print('<td>'.$personne['ddn'].'</td>');
					print('<td><a href="liste.php?act=DEL" title="Supprimer"><img class="litleimg" src="supr.png"/></a></td>');
					print('<td><a href="fiche.php?act=MOD&idpersonne='.$indice.'" title="Modifier"><img class="litleimg" src="mod.png"/></a></td>');
					print('<td><a href="fiche.php?act=VIEW&idpersonne='.$indice.'" title="Visualiser"><img class="litleimg" src="view.png"/></a></td></tr>');
				}
			?>
			</div>
			<br>
		</section>
	</body>

	<footer>
	</footer>
</html>