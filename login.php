<?php
session_start();
require_once('Connexion.php');
require_once('database.php');

$user = new Connexion();
?>
<!DOCTYPE html>
<html>
    
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<title>Connexion</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="login.css">
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="images/logo_admin.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
                    <?php
                   if (isset($_POST['name']) && isset($_POST['password'])) {

                    $query = $user->selectUser();
                
                    if ($query->fetch()) {

                        // l'utilisateur existe dans la table
                        // on ajoute ses infos en tant que variables de session
                        $_SESSION['name'] = $name;
                        $_SESSION['password'] = MD5($password);
                        header("location: admin.php");
                    }
                    else {
                      echo "<h5>Identifiant incorrect, veuillez réessayer.</h5>";
                    } 
                }
                ?>
					<form method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="name" class="form-control input_user" value="" placeholder="Nom">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Mot de passe">
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<input type="submit" name="button" class="btn login_btn" value="Se connecter">
				   </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
