<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constantes</title>
</head>
<body>
    <h1>Variaveis e Constantes</h1>
    <hr>
    <h2>Declaraçao e saida usando echo</h2>

    <?php
    //variaveis
    $curso = "Programador Web";
    $ano = 2024;
    $area = "Back-End";
    $empresa = "Cloud of Pants Tecnologia";

    //Estamos no Programador Web em 2024.

    //Saida interpolada (usando aspas duplas)
    echo "<p>Estamos no $curso em $ano.</p>";

    //Com aspas simples, PHP NAO interpreta variavel

    echo '<p>Estamos no $curso em $ano.</p>';

    //Constantes
    define("AUTOR", "Adriano");// Tradicional, antiga
    const EMPRESA = "CLOUD OF PANTS";//nova, moderna

    //Fulano trabalha na empresa  CLOUD OF PANTS Tecnologia

    //(Usando concatenação [ponto final])
    echo "<p>".AUTOR. " Trabalha na empresa ".EMPRESA."</p>";

    ?>

    <h2>Saida de dados simplificada/direta</h2>
    <p>Estamos no <?= $curso?>   em <?=$ano?>  .</p>

    <p><?=AUTOR?> trabalha no empresa <?=$empresa?> .</p>
    
</body>
</html>