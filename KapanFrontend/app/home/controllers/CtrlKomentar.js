define(['../app.home'], function(app){
    'use strict';

    var name = 'CtrlKomentar';
    var dependencies = ['$scope' , 'SvcKomentar', '$stateParams'];
    var controller = function($scope, SvcKomentar, $stateParams){
        $scope.komentar = {};

        SvcKomentar.getKomentar($stateParams.id, function(result){
            $scope.komentar = result;
            $scope.$emit('totalVote', result.length);

            var totalKomentar = result.length;
            for(var res in result){
                if(result[res].comments){
                    totalKomentar += result[res].comments.length;
                }
            }
            $scope.$emit('totalKomentar', totalKomentar);
        });
    };
    app.controller(name, dependencies.concat(controller));
});