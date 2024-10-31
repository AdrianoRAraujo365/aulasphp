<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario com PHP</title>
</head>

<body>
    <h1>Formulário e processamento juntos</h1>
    <hr>

    <?php
    /*Se o botao continuar foi acionado */
    if (isset($_POST['continuar'])) {
        //Pegamos o nome digitado
        $nome = $_POST['nome']
    ?>

        <h2>Bem-vindo(a) <?= $nome ?> @ </h2>

    <?php
    } else {
    ?>





        <!-- Mantenha o action vazio ao programar o PHP junto com o formulário -->

        <form action="" method="post" autocomplete="off">
            <label for="nome">Qual o seu nome</label>
            <input required type="text" name="nome" id="nome">
            <button name="continuar" type="submit">Continuar</button>
        </form>

    <?php
    }
    ?>
</body>

</html>