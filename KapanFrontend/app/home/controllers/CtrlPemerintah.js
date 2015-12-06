define(['../app.home'], function(app){
    'use strict';

    var name = 'CtrlPemerintah';
    var dependencies = ['$scope', 'SvcProfilePemerintah', '$stateParams'];
    var controller = function($scope, SvcProfilePemerintah, $stateParams){
        $scope.title = "Home";

        this.init = function(){
            SvcProfilePemerintah.getProfileById($stateParams.id, function(result){
                $scope.profil_infos = result;
            })
        }

        this.init();

    };
    app.controller(name, dependencies.concat(controller));
});