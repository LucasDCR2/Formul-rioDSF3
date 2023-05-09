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
	<script src="backend.js"></script>
</head>
<body>
	<form action="dados.php" method="POST">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" placeholder = "Digite seu Nome" name="nome" required>

		<label for="email">E-mail:</label>
		<input type="email" id="email" placeholder = "Digite seu E-mail" name="email" required>

		<label for="cpf">CPF:</label>
		<input type="text" id="cpf" placeholder = "Digite seu CPF" name="cpf" size="14" maxlength="14" oninput="this.value = this.value.replace(/[^-,0-9,.]/g, '');"required>

		<label for="genero">Gênero:</label>
		<select id="genero" name="genero" required>
			<option value="">Selecione</option>
			<option value="masculino">Masculino</option>
			<option value="feminino">Feminino</option>
			<option value="outro">Outro</option>
		</select>

		<button type="submit">Enviar</button>
		<div id="alerta" class="alert"></div>
	</form>

	