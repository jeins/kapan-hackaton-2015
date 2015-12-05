define(['../app.home'], function(app){
    'use strict';

    var name = 'CtrlProject';
    var dependencies = ['$scope' , 'SvcProject'];
    var controller = function($scope, SvcProject){
        $scope.title = "Home";$scope.projects = [];

        this.init = function(){
            SvcProject.getProjects(function(data){
                $scope.projects = data;
            });
        };

        this.init();
    };
    app.controller(name, dependencies.concat(controller));
});