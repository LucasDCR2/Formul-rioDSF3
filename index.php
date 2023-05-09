<?php
    include_once ('dados.php'); 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário em PHP</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section class = "section">
		<div class = "divisao">
			<form id = "form" action="dados.php" method="POST">
				<label for="nome">Nome:</label>
				<input type="text" id="nome" placeholder = "Digite seu Nome" name="nome" >

				<label for="email">E-mail:</label>
				<input type="email" id="email" placeholder = "Digite seu E-mail" name="email" >

				<label for="cpf">CPF:</label>
				<input type="text" id="cpf" placeholder = "Digite seu CPF" name="cpf" size="14" maxlength="14" oninput="this.value = this.value.replace(/[^-,0-9,.]/g, '');">

				<label for="genero">Gênero:</label>
				<select id="genero" name="genero" >
					<option value="">Selecione</option>
					<option value="masculino">Masculino</option>
					<option value="feminino">Feminino</option>
					<option value="outro">Outro</option>
				</select>

				<button type="submit">Enviar</button>
				
			</form>
		</div>
	</section>
	<script src="js/sweetAlert2.js"></script>
	<script src="js/backend.js"></script>
</body>
