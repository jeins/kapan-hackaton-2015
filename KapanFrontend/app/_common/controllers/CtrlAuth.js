define(['../app.common'], function(app){
    'use strict';

    var name = 'CtrlAuth';
    var dependencies = ['$scope', '$auth', '$window'];
    var controller = function($scope, $auth, $window){
        $scope.title = "Auth";
        $scope.fullname="asdas dasd";
        $scope.email = "sebastian@gmail.com";
        $scope.password = "mautauaja";

        $scope.isLogin = function(){
            return $auth.isAuthenticated();
        };

        $scope.authenticate = function(provider) {
            $auth.authenticate(provider)
                .then(function() {
                    console.log("Succes");
                    $window.location.reload();
                })
        };

        $scope.signup = function() {
            $auth.signup({
                fullname: $scope.fullname,
                email: $scope.email,
                password: $scope.password
            }).catch(function(response) {
                if (typeof response.data.message === 'object') {
                    console.log(response.data.message);
                } else {
                    console.log(response.data.message);
                }
            });
        };

        $scope.login = function() {
            $auth.login({ email: $scope.email, password: $scope.password })
                .then(function() {
                    console.log("Success Login Manual");
                    $window.location.reload();
                })
                .catch(function(response) {
                    console.log(response.data.message);
                });
        };

        $scope.logout = function(){
            if (!$auth.isAuthenticated()) {
                return;
            }
            $auth.logout()
                .then(function() {
                    console.log("Logout");
                });
        }
    };
    app.controller(name, dependencies.concat(controller));
});