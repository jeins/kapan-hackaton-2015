define(['../app.common'], function(app){
    'use strict';

    var name = 'CtrlMain';
    var dependencies = ['$scope', 'SvcPermission', '$auth'];
    var controller = function($scope, SvcPermission, $auth){
        $scope.title = "Home";

        this.init = function(){
            if($auth.isAuthenticated()){
                SvcPermission.getPermission(function(result){
                    //console.log(result);
                });
            }
        };

        this.init();
    };
    app.controller(name, dependencies.concat(controller));
});