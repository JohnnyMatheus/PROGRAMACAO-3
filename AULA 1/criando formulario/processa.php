<?php
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

if (empty($nome) || empty($email)) {
    echo "Todfos os campos são de preenchimento obrigatório";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail inválido";
} else {
    echo "Obrigado, $nome. Seu e-mail $email foi recebido com sucesso";
}
