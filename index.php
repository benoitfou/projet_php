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
		<div>
<?php
$reponse = $bdd->query('SELECT * FROM publics');

while ($donnees = $reponse->fetch())
{
?>
    <p>
   <?php echo $donnees['pub_libelle']; ?><br />
   </p>
<?php
}
$reponse->closeCursor();
?>

</div>
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
			<h1>Bienvenue sur le site de Form@Cup</h1>
			<br>
			<br>
			<div id="presentation">
				<p>Des formations adaptées à vos compétences.</p>
				<br>
				<p>Toutes nos formations sont encadrées par des enseignants et/ou des intervenants.</p>
				<br>
				<p>Regardez notre vidéo de présentation pour en savoir plus.</p>
			</div>
			<br>
		</section>
	</body>

	<footer>
		<p>Form@Cup Copyright - Tous droits réservés © 2014 - Mentions légales</p>
	</footer>
</html>