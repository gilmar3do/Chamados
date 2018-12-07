<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="Chamados">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
        
    </head>
    <body >
        <div ng-include="'padrao/headbar.php'"></div>
        <div class="container" ng-view></div>
        
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/angular.js"></script>
        <script src="../js/angular-route.js"></script>
        
        
        <script src="../app/controllers/app.js"></script>
        <script src="../app/controllers/rotas.js"></script>
        <script src="../app/controllers/config.js"></script>
        
        <script src="../app/controllers/home/HomeController.js"></script>
        <script src="../app/controllers/empresa/EmpresaController.js"></script>
    </body>
</html>
