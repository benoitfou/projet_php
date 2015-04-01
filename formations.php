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
		<div id="base"> 
		<section>
			<br>
				<h1>Quelle formation voulez-vous suivre ?</h1>
				<br>
				<blockquote>Choisissez la formation qui vous convient</blockquote>
			<br>
			<br>
			<br>
			<form id="divchoix" action="details.php" method="post">
			
				<div id="public">
					<p><b>Public :</b></p>
					<br>
					<select name="public[]">
						<?php
							$reponse = $bdd->query('SELECT * FROM publics');
							while ($donnees = $reponse->fetch())
							{
								print('<option>'.$donnees['pub_libelle'].'</option>');
							}    
						?>
					</select>
				</div>

				<div id="catmere">
					<p><b>Catégorie :</b></p>
					<br>
					<select name="catmere[]">
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

				<div id="niveau">
					<p><b>Niveau :</b></p>
					<br>
					<select name="niveau[]">
						<?php
							$reponse = $bdd->query('SELECT * FROM niveaux');
							while ($donnees = $reponse->fetch())
							{
								print('<option>'.$donnees['niv_libelle'].'</option>');
							}    
						?>
					</select>
				</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<input type="submit" value="Envoyer"  />
			</form>

			<br>
			<br>

		</section>
</div>
	</body>

	<footer>
		<p>Form@Cup Copyright - Tous droits réservés © 2014 - Mentions légales</p>
	</footer>
</html>