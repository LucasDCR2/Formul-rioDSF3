<?php 

	// Recebe os dados do formulário
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$genero = $_POST['genero'];

	// Validação dos dados
	$erros = array();

	if (empty($nome)) {
		$erros[] = "O campo nome é obrigatório.";
	}

	if (empty($email)) {
		$erros[] = "O campo e-mail é obrigatório.";
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$erros[] = "O e-mail informado é inválido.";
	}

	if (empty($cpf)) {
		$erros[] = "O campo CPF é obrigatório.";
	} else if (!preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/', $cpf)) {
		$erros[] = "O CPF informado é inválido.";
	}

	// Se houver erros, mostra alerta personalizado
	if (!empty($erros)) {
		echo "<div class='alert alert-danger'>";
		foreach ($erros as $erro) {
			echo "<p>$erro</p>";
		}
		echo "</div>";
	} else {
		// Grava os dados em um arquivo
		$dados = array(
			'nome' => $nome,
			'email' => $email,
			'cpf' => $cpf,
			'genero' => $genero
		);
		$json = json_encode($dados);
		file_put_contents('dados.json', $json);

		// Mostra alerta de sucesso
		echo "<div class='alert alert-success'>Dados enviados com sucesso!</div>";
	}

    
?>

