(function () {
    'use strict';

    var app = angular.module('adminApp');

    app.controller('RegistrationController', ['$scope','auth',function($scope,auth){

        var messageSended = function(response){
            helpers.clearErrors().clearForm();
            if(response.status === 'success'){
               console.log(response);      
            } 
        };

        // Show error
        var messageSendError = function (reason) {
            if(reason.status === 422){
                helpers.addErrorsForm(reason.responseJSON);
            }
            
        }; 
        
        $scope.registrationAdmin = function(){
            var dataForm = {
                'email' : $scope.email,
                'password' : $scope.password,
                'password_confirmation' : $scope.password_confirmation,
                'firstname' : $scope.firstname,
                'lastname' : $scope.lastname,
            };

            $.when( auth.registration(dataForm) ).then(messageSended,messageSendError);
        }; 

    }]);
}());