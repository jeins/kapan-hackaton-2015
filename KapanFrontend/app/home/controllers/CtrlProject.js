define(['../app.home'], function(app){
    'use strict';

    var name = 'CtrlProject';
    var dependencies = ['$scope' , 'SvcProject', '$stateParams'];
    var controller = function($scope, SvcProject, $stateParams){
        $scope.title = "Home";
        $scope.projects = {};
        $scope.project = {};

        this.init = function(){
            SvcProject.getProjects(function(data){
                $scope.projects = data;
            });

            SvcProject.getProjectById($stateParams.id, function(data){
                $scope.project = data;console.log(data);
            })
        };

        this.init();
    };
    app.controller(name, dependencies.concat(controller));
});