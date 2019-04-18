<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Quizzeo</title>
	</head>

	<body>
		<div>
			<nav class="container">
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="php/quizz.php">Quizz</a></li>
					<li><a href="">Paramètres</a></li>
					<li><a href="">A propos</a></li>
					<li><a href="">Se connecter / S'enregistrer / Se déconnecter</a></li> <!-- Modifier selon si l'utilisateur se trouve connecté sur le moment -->
				</ul>
			</nav>
		</div>

		<div class="container">
			<h2 class="text-center">Les 5 derniers articles postés</h2>

			<!-- Script php/sql affiche les 5 derniers articles, l'auteur et la date -->
			<div class="container">
				<h3>Titre article</h3>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<div class="text-right">
					<span>Pseudo - date</span>
				</div>
			</div>

			<div class="container">
				<h3>Titre article</h3>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<div class="text-right">
					<span>Pseudo - date</span>
				</div>
			</div>

			<div class="container">
				<h3>Titre article</h3>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<div class="text-right">
					<span>Pseudo - date</span>
				</div>
			</div>

			<div class="container">
				<h3>Titre article</h3>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<div class="text-right">
					<span>Pseudo - date</span>
				</div>
			</div>

			<div class="container">
				<h3>Titre article</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<div class="text-right">
					<span>Pseudo - date</span>
				</div>
			</div>
		</div>


		<footer class="container page-footer font-small blue fixed-bottom">
			<div class="footer-copyright text-center py-3">&copy; 2019 Copyright:
				<a href="../quizzeo">Quizzeo.fr</a>
			</div>
		</footer>
	
	</body>
</html>