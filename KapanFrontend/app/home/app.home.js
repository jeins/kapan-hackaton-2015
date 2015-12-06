define(['angular'], function (angular) {
    'use strict';

    var home = angular.module('app.home', []);

    home.config([ '$urlRouterProvider', '$stateProvider',
        function($urlRouterProvider, $stateProvider){
            $stateProvider
                .state('home', {
                    url: '/',
                    templateUrl: 'app/home/templates/project_home_page.html',
                    controller: 'CtrlProject as CProject'
                })
                .state('projectDetail', {
                    url: '/project/:id',
                    templateUrl: 'app/home/templates/project_detail.html',
                    controller: 'CtrlProject as CProject'
                })
        }
    ]);

    return home;
});