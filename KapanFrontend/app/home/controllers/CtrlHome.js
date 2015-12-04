define(['../app.home'], function(app){
    'use strict';

    var name = 'CtrlHome';
    var dependencies = ['$scope'];
    var controller = function($scope){
        $scope.title = "Home";
    };
    app.controller(name, dependencies.concat(controller));
});