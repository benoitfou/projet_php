<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8', 'root', 'BDDsurf@39');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
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
			<img src="images/logo.png" alt="logo Forma=@Cup" id="logo" />
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
				<h1>Quelle formation voulez-vous suivre ?</h1>
				<br>
				<blockquote>Choisissez la formation qui vous convient</blockquote>
			<br>

			<div id="public">
				<p>Public :</p>
				<br>
				<select>
					<?php
						$reponse = $bdd->query('SELECT * FROM publics');
						while ($donnees = $reponse->fetch())
						{
							print('<option>'.$donnees['pub_libelle'].'</option>');
						}    
					?>
				</select>
			</div>
			<br>
			<br>
			<div id="catmere">
				<p>Catégorie :</p>
				<br>
				<select>
					<?php
						$nb = 1;
						$reponse = $bdd->query('SELECT cat_id, cat_libelle FROM categories WHERE cat_idcatmere IS NULL');
						while ($donnees = $reponse->fetch())
						{
							print('<optgroup label="'.$donnees['cat_libelle'].'">');
							$reponse2 = $bdd->query('SELECT cat_id, cat_libelle FROM categories WHERE cat_idcatmere ='.$donnees['cat_id']);
								while ($donnees2 = $reponse2->fetch())
								{
									print('<option value="'.$donnees2['cat_libelle'].'">'.$donnees2['cat_libelle'].'</option>');
								}
						}  
					?>
					</optgroup>
				</select>
			</div>
			<br>
			</div>

		</section>
	</body>

	<footer>
		<p>Form@Cup Copyright - Tous droits réservés © 2014 - Mentions légales</p>
	</footer>
</html>