<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $destinatario = "analaurap881@gmail.com";
    $assunto = "Novo formulário de contato do seu site";

    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "Email: $email\n";
    $mensagem_email .= "Telefone: $telefone\n";
    $mensagem_email .= "Mensagem:\n$mensagem";

    // Enviar o email
    mail($destinatario, $assunto, $mensagem_email);

    // Redirecionar de volta para a página do formulário após o envio
    header('Location: obrigado.html');
    exit;
}
?>