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
<div id="base"> 
		<section>
			<br>
			<h1>Programme de la formation en <?php $formCatm = $_POST['catmere']; echo("$formCatm");?>, pour un niveau niveau <?php $formNiveau = $_POST['niveau']; echo("$formNiveau");?>.</h1>
			<br>
			<br>
			<div id="presentation">
					<br>
				<h3 id="titleprgr">Le contenu :</h3>
        <br>
        <?php
        if ($formCatm='HTML/CSS')
        {
			$reponse = $bdd->query('SELECT chap_titre,chap_id,det_contenu FROM chapitres INNER JOIN details where chap_id<5 AND det_id<5');
				while ($donnees = $reponse->fetch())
				{
					print('<h1>'.$donnees['chap_titre'].'<br>'.'</h1>');
					if ($donnees['chap_id']==1)
					{
					print($donnees['det_contenu']);
					}
					
				}    
				
		}
		?>
 		<br>
 	    Avec un prix de
 	    <?php $prix="Autre"; 

 	    $formPublic = $_POST['public'];
 		switch ($formPublic) {
 			case 'Jeune -26 ans':
 				$prix = 1999;
 				break;
  			case 'Salarié':
 				$prix = 2499;
 				break;
  			case 'Demandeur d\'emplois':
 				$prix = 2999;
 				break;
 			case 'Retraité':
 				$prix = 2499;
 				break;
 			
 			default:
 				$prix = 3999;
 				break;
 		}
		echo($prix."€ ");  
 	     echo(" pour le public :");  
 	     echo(" $formPublic");
 	     ?>.
			</div>
			<br>
		</section>
		<div id="prgrmm"> 
		<h3 id="titleprgr">Le programme :</h3>
		<br>
		<br>
        <?php
			$reponse = $bdd->query('SELECT chap_titre,chap_contenu FROM chapitres where chap_id<5');
				while ($donnees = $reponse->fetch())
				{
					print('<h3>'.$donnees['chap_titre'].'<br>'.'</h3>');
					print($donnees['chap_contenu'].'<br>');
				}    
		?>
		</div>
</div>
	</body>

	<footer>
		<p>Form@Cup Copyright - Tous droits réservés © 2015 - Mentions légales</p>
	</footer>
</html>