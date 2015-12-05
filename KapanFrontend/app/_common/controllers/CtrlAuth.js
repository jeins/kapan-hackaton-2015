define(['../app.common'], function(app){
    'use strict';

    var name = 'CtrlAuth';
    var dependencies = ['$scope', '$auth'];
    var controller = function($scope, $auth){
        $scope.title = "Auth";

        $scope.authenticate = function(provider) {console.log(provider);
            $auth.authenticate(provider)
                .then(function() {
                    console.log("Succes");
                })
        };
    };
    app.controller(name, dependencies.concat(controller));
});