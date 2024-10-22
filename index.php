<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO php angularjs</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/angular.js"></script>
    <script src="js/app.js"></script>
</head>

<body>
    
    <div ng-controller="pessoasCtrl">
        <h3>App PHP + AngularJS</h3>
        <div ng-repeat="pessoa in pessoas">
            <b>Matricula:</b> {{pessoa.matricula}} <br />
            <b>Nome:</b> {{pessoa.nome}}
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>