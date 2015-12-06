define(['../app.common'], function(app){
    'use strict';

    var name = 'CtrlAuth';
    var dependencies = ['$scope', '$auth', '$window'];
    var controller = function($scope, $auth, $window){
        $scope.title = "Auth";

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
            var data = {
                fullname: this.fullname,
                email: this.email,
                password: this.password
            };
            $auth.signup(data)
                .then(function() {
                    console.log("Success Signup Manual");
                    $window.location.reload();
                })
                .catch(function(response) {
                    console.log(response.data.message);
                });
        };

        $scope.login = function() {
            $auth.login({ email: this.email, password: this.password })
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