<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>

<body>

    <h1>Processamento dos dados vindos do formulario HTML</h1>
    <hr>

    <?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];
    $mensagem = $_POST["mensagem"];


    ?>

    <h2>Dados recebidos</h2>
    <ul>
        <li>Nome: <?= $nome ?></li>
        <li>E-mail: <?= $email ?></li>
        <li>Data de Nascimento: <?= $nascimento ?></li>
        <li>Mensagem: <?= $mensagem ?></li>
    </ul>
</body>

</html>