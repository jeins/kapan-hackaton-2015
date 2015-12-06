define(['../app.home'], function(app){
    'use strict';

    var name = 'CtrlKomentar';
    var dependencies = ['$scope' , 'SvcKomentar', '$stateParams', '$auth', '$window'];
    var controller = function($scope, SvcKomentar, $stateParams, $auth, $window){
        $scope.komentar = {};this.komentar_like_toggle = true;

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
          console.log(this.komentar_like_toggle);
            var data = {"post": this.post, "like": this.komentar_like_toggle};
            SvcKomentar.addKomentar($stateParams.id, data, function(result){
                $window.location.reload();
            })
        }

        $scope.submitKomentarPositif = function(){

            var data = {"post": this.post, "like":true};
            console.log(data);
            SvcKomentar.addKomentar($stateParams.id, data, function(result){
                $window.location.reload();
            })
        }

        $scope.submitKomentarNegatif = function(){

            var data = {"post": this.post, "like":false};
            console.log(data);
            SvcKomentar.addKomentar($stateParams.id, data, function(result){
                $window.location.reload();
            })
        }


    };
    app.controller(name, dependencies.concat(controller));
});
