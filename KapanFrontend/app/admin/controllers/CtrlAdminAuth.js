define(['../app.admin'], function(app){
    'use strict';

    var name = 'CtrlAdminAuth';
    var dependencies = ['$scope', '$auth', '$location'];
    var controller = function($scope, $auth, $location){
        $scope.title = "Admin Auth";

        $scope.login = function(){
            $auth.login({ email: this.email, password: this.password })
                .then(function() {
                    console.log("Success Login Admin");
                    $location.url('/admin/dashboard');
                })
                .catch(function(response) {
                    console.log(response.data.message);
                });
        }
    };
    app.controller(name, dependencies.concat(controller));
});