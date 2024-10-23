<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h1>Comandos Condicionais no PHP</h1>
        <hr>
        <h2>Condicional SIMPLES</h2>

        <?php

        $numero = 500;
        if($numero >=100){
             echo "<p> O valor da variavel é $numero</p>";
        }

        ?>
        <hr>
        <h2>Condicional COMPOSTA</h2>

        <?php
        /*Controle de Estoque */

        $produto = "Geladeira";
        $qtdEmEstoque = 5; //o que temos no momento
        $qtdCritica = 2; //minimo necessário

        ?>

        <h3>Produto: <?$produto?></h3>
        <p><b>Estoque:</b> <?=$qtdEmEstoque?></p>
        <hr>

        <?php
        /* Se a quantidade em estoque for abaixo da quantidade critica, o sistema deve avisar e pedir para repor.  */

       

        if(){

        }else{
             /* Caso contrário, simplesmente avisar que o estoque está normal.  */


        }

        ?>







    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>