/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

(function (){
    'use restrict';
    
    angular.module('Chamados').constant('SETTINGS', {
       "SERVICE_URL": "/",
       "EMPRESAS": "empresas"
    });
    
    angular.module('Chamados').run(function ($rootScope, $location, $injector, SETTINGS){
       var empresas = localStorage.getItem(SETTING.EMPRESAS);
       
       $rootScope.empresas = [];
       
       if(empresas){
           var items = angular.fromJson(empresas);
           angular.forEach(items, function(value){
              $rootScope.empresas.push(item); 
           });
       }
    });
})();

