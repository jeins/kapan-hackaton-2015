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

            if(typeof $stateParams.id !== 'undefined'){
                SvcProject.getProjectById($stateParams.id, function(data){
                    $scope.project = data;console.log(data);
                })
            }
        };

        $scope.$on('totalVote', function(event, mass){
            $scope.totalVote = mass;
        });
        $scope.$on('totalKomentar', function(event, mass){
            $scope.totalKomentar = mass;
        });

        this.init();
    };
    app.controller(name, dependencies.concat(controller));
});