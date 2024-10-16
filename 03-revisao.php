<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisao HTML e PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Revisando o básico</h1>
    <hr>

    <?php
    /* Criar duas variaveis e/ou constantes */
    const NOME = "Chapolin Colorado";
    $idade = 25;

    /*Exibir no HTML uma frase da seguinte forma: */
    // Olá! Meu nome é Chapolin Colorado e tenho 25 anos.
    /* Desafio:
     -o nome dever aparecer em italico e com cor diferente no texto , -a idade dever aparecer apenas com cor de fundo diferente. */

     
    ?>
    <p>Olá ! Meu nome é <i class="text-danger"> <?=NOME?> </i> e tenho <span class="bg-warning"> <?=$idade?> </span> anos. </p>
    
</body>
</html>