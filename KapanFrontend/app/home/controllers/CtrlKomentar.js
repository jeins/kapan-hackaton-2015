define(['../app.home'], function(app){
    'use strict';

    var name = 'CtrlKomentar';
    var dependencies = ['$scope' , 'SvcKomentar', '$stateParams', '$auth', '$window'];
    var controller = function($scope, SvcKomentar, $stateParams, $auth, $window){
        $scope.komentar = {};

        $scope.isLogin = function(){
            return $auth.isAuthenticated();
        };

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

        $scope.submitKomentar = function(){
            var data = {"post": this.post};
            SvcKomentar.addKomentar($stateParams.id, data, function(result){
                $window.location.reload();
            })
        }
    };
    app.controller(name, dependencies.concat(controller));
});