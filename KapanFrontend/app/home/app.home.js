define(['angular'], function (angular) {
    'use strict';

    var home = angular.module('app.home', []);

    home.config([
        '$urlRouterProvider', '$stateProvider',
        function($urlRouterProvider, $stateProvider){
            $stateProvider
                .state('home', {
                    url: '/',
                    templateUrl: 'app/home/templates/project_home_page.html',
                    controller: 'CtrlProject as CHome'
                })
                .state('homes', {
                    url: '/homes',
                    templateUrl: 'app/home/templates/Tes.html',
                    controller: 'CtrlMap as CMap'
                })
        }
    ]);

    return home;
});