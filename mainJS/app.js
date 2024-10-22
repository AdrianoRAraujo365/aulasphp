/*var app = angular.module("app", []);

app.factory('services', ['$http', function($http) {
    var obj={};
    obj.getPessoas = function() { return $http.get('con-bd.php'); }
    return obj;
}]);

app.controller("pessoasCtrl", function($scope, services) {
    services.getPessoas().then( function(data) {
        $scope.pessoas = data.data;
    } );
});*/

app.run();

var app = angular.module('myApp', ['ngRoute']);
app.factory("services", ['$http', function ($http) {
    var serviceBase = 'services/'
    var obj = {};
    //busca os dados do cliente
    obj.getPessoas = function () {
        return $http.get(serviceBase + 'pessoas');
    }
    return obj;
}]);
//cria a controller
app.controller('lista', function ($scope, services) {
    services.getPessoas().then(function (data) {
        $scope.pessoas = data.data;
    });
});
//Cria as rotas
app.config(['$routeProvider',
    function ($routeProvider) {
        $routeProvider.
            when('/', {
                title: 'Exemplo Angular php',
                templateUrl: 'partials/exemplo.html',
                controller: 'lista'
            })
            .otherwise({
                redirectTo: '/'
            });
    }]);
//roda a app
app.run(['$location', '$rootScope', function ($location, $rootScope) {
    $rootScope.$on('$routeChangeSuccess', function (event, current, previous) {
        $rootScope.title = current.$$route.title;
    });
}]);