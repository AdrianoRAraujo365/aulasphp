<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">



</head>

<body>
    <div class="container">
        <h1>Loops (ou laços de repetição)</h1>
        <hr>

        <h2>
            Tradicionais: while , for, do/while
        </h2>

        <h3>while</h3>
        <?php
        //variavel de controle da repetiçao

        $i = 1;

        while ($i <= 3) {
        ?>

            <p>Senac Penha - <?= $i ?></p>

        <?php
            //Atuaizando/incrementando a variavel

            $i++;
        }

        ?>
        <h3>for</h3>

        <?php
        for ($i = 1; $i <= 5; $i++) {

        ?>

            <div>
                <h4>Foto<?= $i ?> </h4>
                <img src="https://picsum.photos/id/1/300/200" alt="">
            </div>

        <?php
        }
        ?>

        <hr>

        <h3>Loop tradicional para acessar Arrays</h3>
        <?php
        $alunos = ["Roney", "Adriano", "Maria", "Silas", "Kauni", "Malaquias"];

        for ($i = 0; $i < count($alunos); $i++) {

        ?>

            <p class="alert alert-success">
                <?= $alunos[$i] ?>
            </p>

        <?php
        }
        ?>

        <h2>Específico: foreach</h2>

        <?php
        foreach ($alunos as $aluno) {

        ?>
            <p class="alert alert-danger">
                <?= $aluno ?>
            </p>

        <?php
        }
        ?>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>