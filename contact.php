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
		<script type="text/javascript">
			
			function verifier()
			{
				if (document.getElementById('nom').value=='')
				{
					alert('Veuillez renseigner un nom');
					nom.style.borderColor='red';
					nom.focus();
					return false;
				}
				if (document.getElementById('prenom').value=='')
				{
					alert('Veuillez renseigner un prénom');
					prenom.style.borderColor='red';
					prenom.focus();
					return false;
				}
				if (document.getElementById('courriel').value=='')
				{
					alert('Veuillez renseigner une adresse mail');
					courriel.style.borderColor='red';
					courriel.focus();
					return false;
				}
			}
		</script>
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
			<h1>Fiche de contact</h1>
			<br>
			<br>
			<div id="presentation">
				<p>Si vous souhaitez avoir des renseignements supplémentaires sur nos fomations ou si vous êtes intéressé par l'une d'entre elles, contactez-nous en précisant votre e-mail.</p>
			</div>
			<br>
			<blockquote>* Champs obligatoires</blockquote>

			<?php
					if (isset($_GET['idpersonne'])) {
						
						$civi = $tabPersonnes[$_GET['idpersonne']]['civi'];
						$nom = $tabPersonnes[$_GET['idpersonne']]['nom'];
						$prenom = $tabPersonnes[$_GET['idpersonne']]['prenom'];
						$mail = $tabPersonnes[$_GET['idpersonne']]['mail'];
						$ddn = $tabPersonnes[$_GET['idpersonne']]['ddn'];
						$infosdate = explode('/', $ddn);
						$jour = $infosdate[0];
						$mois = $infosdate[1];
						$annee = $infosdate[2];
					}else{
						$nom='';
						$prenom='';
						$mail='';
						$jour='';
						$mois='';
						$annee='';
						$civi='NR';
					}
				?>

			<form action="" method="post" onsubmit="return verifier()">
				<div>
					<label for="civilite">Civilité :</label>
					<input type="radio" name="civi" value="Mr"/> Monsieur
					<input type="radio" name="civi" value="Mlle"/> Mademoiselle
					<input type="radio" name="civi" value="Mme"/> Madame
					
				</div>
				<div>
					<label for="nom">Nom* :</label>
					<input type="text" id="nom" value="<?php print($nom) ?>" />
				</div>
				<div>
					<label for="prenom">Prénom* :</label>
					<input type="text" id="prenom" value="<?php print($prenom) ?>" />
				</div>
				<div>
					<label for="ddn">Date de naissance :</label>
					<select>
						<?php
							$j=1;
							for ($j=1; $j <32 ; $j++) {
								if ($j == $jour) {
									print('<option selected>'.$j.'</option>');
								} else{
									print('<option>'.$j.'</option>');
								}
							}
						?>
					</select>
					<select name="mois" size="1">
						<?php
							$tabMois = array(
							'01' => 'Janvier',
							'02' => 'Février',
							'03' => 'Mars',
							'04' => 'Avril',
							'05' => 'Mai',
							'06' => 'Juin',
							'07' => 'Juillet',
							'08' => 'Août',
							'09' => 'Septembre',
							'10' => 'Octobre',
							'11' => 'Novembre',
							'12' => 'Décembre' );
								foreach ($tabMois as $mm => $ll) {
								if ($mm == $mois) {
									print('<option selected>'.$ll.'</option>');
								} else {
									print('<option>'.$ll.'</otpion>');
								}
							}
						?>
					</select>
					<select>
						<?php
							$a=2020;
							for ($a=2020; $a >=1900; $a--) {
								if ($a == $annee) {
									print('<option selected>'.$a.'</option>');
								} else{
									print('<option>'.$a.'</option>');
								}
							}
						?>
					</select>
				</div>
				<div>
					<label for="courriel">E-mail* :</label>
					<input type="email" id="courriel" value="<?php print($mail) ?>" />
				</div>
				<div>
					<label for="message">Message :</label>
					<textarea id="message">Entrez votre message</textarea>
				</div>
				<div class="button">
					<button type="submit">Envoyer</button>
					<button type="reset">Annuler</button>
					
				</div>
			</form>
			<br>

		</section>
	</div>
	</body>
	<br>

	<footer>
		<p>Form@Cup Copyright - Tous droits réservés © 2015 - Mentions légales</p>
	</footer>
</html>