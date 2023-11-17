<!DOCTYPE html>
<html lang="pt-BR">


<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Login</title>
	<link rel="stylesheet" href="../../../../public/css/login.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Amethysta&display=swap" rel="stylesheet">
</head>


<body>

	<div class="esquerda">

		<div class="welcome">
			<h>Bem Vindo!</h>
		</div>

		<img src="../../../../public/assets/logo.png" alt="Logo">

	</div>


	<div class="direita">

		<div class="login">
			<h>Login</h>
		</div>

		<form action="login" method="post">
			<div class="dados1">
				<input type="text" name="email" id="email" placeholder="Email">
			</div>

			<div class="dados2">
				<input type="password" name="password" id="password" placeholder="Senha">
			</div>

			
			<div class="senha">
				
			<p style="color: red">
                     <?php 
                        if(isset($error)){
                        echo $error;
                        } 
                     ?> 
            </p>
				<h><a href="#">Esqueceu sua senha?</a></h>
			</div>

			<div class="enter">
				<h2><button type="submit">Entrar</button></h2>
			</div>
		</form>
		<div class="sombra">
		</div>

	</div>




</body>




</html>