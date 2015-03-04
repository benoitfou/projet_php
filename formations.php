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
				<li id="compagnie"><a href="#">Compagnie</a></li>
				<li id="contact"><a href="#">Contact</a></li>
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
					echo '</selected>',"\n";
				?>
				<br>
			</div>
			<br>
			<div id="choixforma">
				<p>Catégorie :</p>
			</div>
		</section>
	</body>

	<footer>
	</footer>
</html>