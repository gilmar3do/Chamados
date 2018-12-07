/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function () {
    'use strict';
    angular.module('Chamados').controller('EmpresaController', EmpresaController);

    EmpresaController.$inject = ['$rootScope'];

    function EmpresaController($rootScope) {
        var vm = this;
        vm.empresas = [];

        activate();

        function activate() {
            listarEmpresas();
        }

        function listarEmpresas() {

            vm.empresas = [];
            vm.empresas = $rootScope.empresas;

        }
    };
})();
