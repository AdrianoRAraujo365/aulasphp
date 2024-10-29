<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1>Loops laços de repetiçao</h1>

        <h3>Loop tradicional para acessar Arrays</h3>
        <ol>

            <?php
            $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

            for ($i = 0; $i < count($meses); $i++) {

            ?>
                
                <li>

                    <p class="alert alert-success">
                        <?= $meses[$i] ?>
                </li>
                </p>

            <?php
            }
            ?>

        </ol>

    </div>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>