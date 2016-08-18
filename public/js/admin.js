(function () {
    'use strict';
    
    var app = angular.module('adminApp', []);

    app.config(function($interpolateProvider){
        $interpolateProvider.startSymbol('[[').endSymbol(']]');
    });

    var csrf_token = $('meta[name="csrf-token"]').attr('content');

    $.ajaxPrefilter(function(options){
        if (options.type.toLowerCase() === "post") {
            options.data += options.data?"&":"";
            options.data += "_token=" + csrf_token;
        }
    });

}());
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
var helpers = {

    addErrorsForm: function(errors){
        helpers.clearErrors();

        $.each(errors, function(field, error){
            
            $.each(error,function(index, error_text){
                    $('.form-group-container-' + field + ' .form-control-error').append('<span>' + error_text + '</span>');
            });

        });

        return this;
    },

    clearErrors: function(){
        $('.form-control-error').html('');

        return this;
    },

    clearForm: function(){
        $('input', '.form-app').val('').removeAttr('checked').removeAttr('selected');

        return this;
    }

};
(function() {
    var auth = function(){

        var registration = function(dataForm){
            var deffered = $.Deferred();

            $.ajax({
                method: 'POST',
                data: dataForm,
                url: '/admin/registration'
            })
            .success(function (response) {
                deffered.resolve(response);
            })
            .error(function (reason) {
                deffered.reject(reason);
            });
                
            return deffered.promise();

        };

        return {
            registration : registration,
        };
    }

    /**
    * Register service
    */
    var module = angular.module('adminApp');
        module.factory('auth', auth);

}());
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});

//# sourceMappingURL=admin.js.map
