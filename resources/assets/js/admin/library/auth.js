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