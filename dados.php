<?php

// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$genero = $_POST['genero'];

// Valida os dados do formulário
if (empty($nome) || empty($email) || empty($cpf) || empty($genero)) {
    echo 'Por favor, preencha todos os campos.';

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Por favor, informe um endereço de e-mail válido.';

} elseif (!preg_match('/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/', $cpf)) {
    echo 'Por favor, informe um CPF válido.';

} else {
    // Cria uma nova string com os dados do formulário
    $newData = "Nome: $nome\nEmail: $email\nCPF: $cpf\nGênero: $genero\n\n";

    // Salva a string no arquivo de texto
    file_put_contents('data.txt', $newData, FILE_APPEND);

    echo 'Dados enviados com sucesso!';
}

