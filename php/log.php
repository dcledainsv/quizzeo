<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<?php include("../include/head.php"); ?>

	<body>
		<!-- if diconnect -->
		<div class="container">
			<a href="?sign-in">Se connecter</a>
			<a href="?sign-up">S'inscrire</a>
		</div>

		<?php
			if(isset($_GET['sign-in']))
			{
				include('../include/sign-in.php');
			}
			else if(isset($_GET['sign-up']))
			{
				include('../include/sign-up.php');
			}
			else
			{
				header('Location: ?sign-in');
			}
		?>

		<?php include("../include/footer.php"); ?>

	</body>
</html>