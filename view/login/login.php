<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Login</title>
		<link href="login.css" rel="stylesheet" />
	</head>
<?php require '../header/header.php'; ?>	
	<!-- -------------------------------------------- BARRE DE NAVIGATION -------------------------------------------------------------------------------------- -->
	<body>
		<section class="sections home text-center">
			<div class="box">
				<div class="container">
					<form method="POST" class="form">
						<div class="imageForm">
							<img class="img" src="../images/logo.png" alt="" />
						</div>
						<div class="username">
							<label>Username</label>
						</div>
						<div class="textArea">
							<input type="text" />
						</div>
						<div class="mail">
							<label>Email</label>
						</div>
						<div class="textArea">
							<input type="text" />
						</div>
						<div class="password">
							<label>Password</label>
						</div>
						<div class="textArea">
							<input type="password" />
						</div>
						<div>
							<button class="button" type="submit">Connect</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	</body>
<?php require '../footer/footer.php'; ?>
</html>
