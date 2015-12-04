define(['angular'], function (angular) {
    'use strict';

    var home = angular.module('app.home', []);

    home.config([
        '$urlRouterProvider', '$stateProvider',
        function($urlRouterProvider, $stateProvider){
            $stateProvider
                .state('home', {
                    url: '/',
                    templateUrl: 'app/home/templates/home.html',
                    controller: 'CtrlHome as CHome'
                })
        }
    ]);

    return home;
});