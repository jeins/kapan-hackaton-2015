define(['../app.admin'], function(app){
    'use strict';

    var name = 'CtrlDashboard';
    var dependencies = ['$scope'];
    var controller = function($scope){
        $scope.title = "Admin dashboard";
console.log("OK);");
    };
    app.controller(name, dependencies.concat(controller));
});