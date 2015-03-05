<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8', 'root', 'BDDsurf@39');
?>
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
				<li id="formations"><a href="formations.php">Formations</a></li>
				<li id="compagnie"><a href="compagnie.php">Compagnie</a></li>
				<li id="contact"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<br>

		<section>
			<br>
				<h1>Quelle formation voumez-vous suivre ?</h1>
				<br>
				<blockquote>Choisissez la formation qui vous convient</blockquote>
			<br>
			<div id="public">
				<p>Public :</p>
				<br>
				<?php
					$tabpublic = array(
						'01' => 'Salarié',
						'02' => 'Demandeur d\'emploi',
						'03' => 'Jeune -26 ans',
						'04' => 'Autre');

					$selected = '';

					echo '<select name="formation">',"n";
					foreach ($tabpublic as $numero => $nomFormation) {
						if ($nomFormation == 'Salarié')
						{
							$selected = ' selected="selected"';
						}
						echo "\t",'<option value="', $numero ,'"', $selected ,'>', $nomFormation,'</option>',"\n";

						$selected='';
					}
					echo '</select>',"\n";
				?>
				<br>
			</div>
			<br>
			<div id="categorie">
				<p>Catégorie :</p>
				<br>
				<?php
					$tabcategorie = array(
						'01' => 'Développement',
						'02' => 'Programmation',
						'03' => 'HTML-CSS-PHP',
						'04' => 'Analyse',
						'05' => 'Base de données');

					$selected = '';

					echo '<select name="categorie">',"n";
					foreach ($tabcategorie as $numero => $nomcategorie) {
						if ($nomcategorie == 'Développement')
						{
							$selected = ' selected="selected"';
						}
						echo "\t",'<option value="', $numero , '"', $selected , '>', $nomcategorie,'</option>',"\n";

						$selected='';
					}
					echo '</select>', "\n";
				?>
			</div>
		</section>
	</body>

	<footer>
	</footer>
</html>