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
			<h1>Programme de la formation en ???, pour un niveau niveau ???.</h1>
			<br>
			<br>
			<div id="presentation">
					<br>
				<h3 id="titleprgr">Le contenu :</h1>
				        Chap 1
        <br>
        Chap 2
	    <br>
 	    Chap 3
 		<br>
 	    Chap 4
 		<br>
  		Chap 5
 		<br>        Chap 1
        <br>
        Chap 2
	    <br>
 	    Chap 3
 		<br>
 	    Chap 4
 		<br>
  		Chap 5
 		<br>        Chap 1
        <br>
        Chap 2
	    <br>
 	    Chap 3
 		<br>
 	    Chap 4
 		<br>
  		Chap 5
 		<br>	
 				        Chap 1
        <br>
        Chap 2
	    <br>
 	    Chap 3
 		<br>
 	    Chap 4
 		<br>
  		Chap 5
 		<br>        Chap 1
        <br>
        Chap 2
	    <br>
 	    Chap 3
 		<br>
 	    Chap 4
 		<br>
  		Chap 5
 		<br>        Chap 1
        <br>
        Chap 2
	    <br>
 	    Chap 3
 		<br>
 	    Chap 4
 		<br>
  		Chap 5
 		<br>	
 				        Chap 1
        <br>
        Chap 2
	    <br>
 	    Chap 3
 		<br>
 	    Chap 4
 		<br>
  		Chap 5
 		<br>        Chap 1
        <br>
        Chap 2
	    <br>
 	    Chap 3
 		<br>
 	    Chap 4
 		<br>
  		Chap 5
 		<br>        Chap 1
        <br>
        Chap 2
	    <br>
 	    Chap 3
 		<br>
 	    Chap 4
 		<br>
  		Chap 5
 		<br>	

 				        Chap 1
        <br>
        Chap 2
	    <br>
 	    Chap 3
 		<br>
 	    Chap 4
 		<br>

			<?php 
			
			?>
			</div>
			<br>
		</section>
		<div id="prgrmm"> 
		<h3 id="titleprgr">Le programme :</h1>
        Chap 1
        <br>
        Chap 2
	    <br>
 	    Chap 3
 		<br>
 	    Chap 4
 		<br>
  		Chap 5
 		<br>
		</div>
</div>
	</body>

	<footer>
		<p>Form@Cup Copyright - Tous droits réservés © 2014 - Mentions légales</p>
	</footer>
</html>