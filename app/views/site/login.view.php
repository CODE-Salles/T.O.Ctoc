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
	<script src="../../../../public/js/listausuarios.js" defer></script>
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
				<input type="email" name="email" id="email" placeholder="Email" required>
			</div>

			<div class="dados2">
    		<input type="password" name="password" id="password" placeholder="Senha" required>
   		    <img src="../../../../public/assets/olho.png" alt="Mostrar Senha" id="eye-icon" onclick="togglePassword()">
			</div>


			
			<div class="senha">
				
			<p style="color: red">
                     <?php 
                        if(isset($error)){
                        echo $error;
                        } 
                     ?> 
            </p>
			</div>

			<div class="enter">
				<h2><button type="submit">Entrar</button></h2>
			</div>
		</form>
		<div class="sombra">
		</div>

	</div>
	
	<script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var eyeIcon = document.getElementById("eye-icon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.src = "../../../../public/assets/olho.png"; 
        } else {
            passwordInput.type = "password";
            eyeIcon.src = "../../../../public/assets/olho (fechado).png";
        }
    }
	</script>




</body>




</html>