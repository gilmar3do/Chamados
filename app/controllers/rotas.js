/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


(function (){
    'use restrict';
    
    angular.module('Chamados').config(function ($routeProvider){
        $routeProvider
                .when('/', {
                   controller: 'HomeController',
                   controllerAs: 'vm',
                   templateUrl: 'home/home.php'
                })
                .when('/empresas', {
                   controller: 'EmpresaController',
                   controllerAs: 'vm',
                   templateUrl: 'empresa/ListagemEmpresas.php'
                });
    });
})();