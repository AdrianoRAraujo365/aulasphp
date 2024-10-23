<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 Corrigido </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">




    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label,
        input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .result {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Calculadora de Aumento Salarial</h2>
        <form method="POST" action="">
            <label for="salario">Salário atual:</label>
            <input type="number" step="0.01" id="salario" name="salario" required>

            <input type="submit" value="Calcular novo salário">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $salario = floatval($_POST["salario"]);
            $novo_salario = 0;

            if ($salario < 500) {
                $novo_salario = $salario * 1.15; // Aumento de 15%
            } elseif ($salario <= 1000) {
                $novo_salario = $salario * 1.10; // Aumento de 10%
            } else {
                $novo_salario = $salario * 1.05; // Aumento de 5%
            }

            echo "<div class='result'>Novo salário: R$ " . number_format($novo_salario, 2, ',', '.') . "</div>";
        }
        ?>
    </div>
    <hr>

    <div class="container">
        <h1>Exercicio 02 (corrigido)</h1>
        <hr>
        <h2>Calculadora de Aumento Salarial</h2>

        <?php
        //Entrada de dados, informação do salario atual

        $salario = 1000;

        //Analise das condiçoes, e processamento/calculos

        if ($salario < 500) {
            $novoSalario = $salario * 1.15; //15%
        } elseif ($salario <= 1000) {
            $novoSalario = $salario * 1.10; // 10%
        } else {
            $novoSalario = $salario * 1.05; // 5%
        }

        ?>

        <!-- Saida de dados -->

        <p> Salario antigo: <?= $salario ?></p>
        <p>Salario reajustado: <?= $novoSalario ?></p>

        <hr>

        <p>Salario <antigo:R1></antigo:R1>
            <?= number_format($salario, 2, ",", ".") ?>
        </p>
        <p>Novo salario (reajustado):R$
            <?= number_format($novoSalario, 2, ",", ".") ?>
        </p>

    </div>
</body>

</html>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>