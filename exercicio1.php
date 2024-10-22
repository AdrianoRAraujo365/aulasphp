<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Arrays no PHP</h1>
        <hr>

        <?php
        // Array numérico/indexado
        /*$nome = ["Luizinho", "Zezinho", "Huguinho", "Patinhas"];
        $senha = array("123teste")
        ?>

        <h2>Acessando os dados do array</h2>
        <p>Nome personagem: <?= $nome[2] ?> </p>

        <p>Vamos ler mais quadrinhos <?= $nome[4] ?></p>
        <hr>*/
        ?>

        <?php

        // Array associativo
        $dados = [
            //Chave associativa
            "nome" => "Chapolin Colorado",
            "senha" => "123teste",
            "idade" => 30,
            "cidade" => "São Paulo",
            "telefone" => ["11-2135-0300","11-91234-5678"]

        ];

        ?>
        <h2>Acessando os dados do array associativo</h2>

        

        <ol>
            <li>
                nome do usuario: <?= $dados["nome"] ?>
            </li>
            <li>senha: <?= $dados["senha"] ?> </li>

            <li>idade: <?= $dados["idade"] ?> anos </li>
            <li>cidade: <?= $dados["cidade"] ?> </li>
            <li>telefone fixo: <?= $dados["telefone"][0] ?> </li>
            <li>telefone celular: <?= $dados["telefone"][1] ?> </li>



            </0l>



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>