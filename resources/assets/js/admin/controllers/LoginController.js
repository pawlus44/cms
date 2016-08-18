(function () {
    'use strict';

    var app = angular.module('adminApp');

    app.controller('LoginController', function($scope){
        
        $scope.loginAdmin = function(){
            var dataForm = {
                'email' : $scope.email,
                'password' : $scope.password,
            };
        };

        $scope.registration = function(){
            window.location = "admin/registration";
        };
    });
}());