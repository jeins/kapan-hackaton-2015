define(['../app.home'], function(app){
    'use strict';

    var name = 'CtrlKomentar';
    var dependencies = ['$scope' , 'SvcKomentar', '$stateParams'];
    var controller = function($scope, SvcKomentar, $stateParams){
        $scope.komentar = {};

        SvcKomentar.getKomentar($stateParams.id, function(result){
            $scope.komentar = result;
        });
    };
    app.controller(name, dependencies.concat(controller));
});