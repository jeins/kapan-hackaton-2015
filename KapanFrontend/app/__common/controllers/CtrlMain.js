define(['../app.common'], function(app){
    'use strict';

    var name = 'CtrlMain';
    var dependencies = ['$scope'];
    var controller = function($scope){
        $scope.title = "Home";
    };
    app.controller(name, dependencies.concat(controller));
});