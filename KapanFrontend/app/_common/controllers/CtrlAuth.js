define(['../app.common'], function(app){
    'use strict';

    var name = 'CtrlAuth';
    var dependencies = ['$scope', '$auth'];
    var controller = function($scope, $auth){
        $scope.title = "Auth";
        $scope.fullname="asdas dasd";
        $scope.email = "asd@asd.co";
        $scope.password = "adasd";

        $scope.isLogin = function(){
            return $auth.isAuthenticated();
        };

        $scope.authenticate = function(provider) {
            $auth.authenticate(provider)
                .then(function() {
                    console.log("Succes");
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
                })
                .catch(function(response) {
                    console.log(response.data.message);
                });
        };
    };
    app.controller(name, dependencies.concat(controller));
});