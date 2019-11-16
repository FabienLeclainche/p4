<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Billet simple pour l'Alaska</title>
</head>
<body>
	<header>Billet simple pour l'Alaska</header>

    <h1>Accueil</h1>
    <p>	Bonjour tout le monde !
		Bienvenue ! Je suis Jean Forteroche, écrivain. Vous êtes actuellement sur mon Blog où je poste au fur et à mesure un nouveau chapitre de mon dernier roman intitulé "Billet simple pour l'Alaska". N'hésitez pas à y laisser des commentaires !
	</p>

	<?php
	foreach($posts as $post){
		?>
		<div><a href="?action=post_detail&post_id=1"><?php echo $post->getTitle();?></a></div> 
		<div><?php echo $post->getContent();?></div>
		<?php
	}
	?>

	<footer>
		<p>2019 Jean Forteroche - 
			<a href="index.php?action=ml">Mentions légales </a> 
			- 
			<a href="index.php?action=login">Espace Administrateur</a>
		</p>
	</footer>
</body>
</html>
