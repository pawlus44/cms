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