define(['../app.admin'], function(app){
    'use strict';

    var name = 'CtrlDashboard';
    var dependencies = ['$scope', 'SvcProject', 'SvcPermission'];
    var controller = function($scope, SvcProject, SvcPermission){
        $scope.title = "Admin dashboard";
        $scope.projects = [];

        SvcPermission.getPermission(function(result){console.log(result);
           $scope.$emit('idPemerintah', result.user_id);
        });

        $scope.$on('idPemerintah', function(event, mass){
            SvcProject.getProjectByIdPemerintah(mass, function(result){console.log(result);
                $scope.projects = result;
            });
        });
    };
    app.controller(name, dependencies.concat(controller));
});