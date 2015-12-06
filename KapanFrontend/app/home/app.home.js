define(['angular', 'leaflet', 'leaflet.plugins', 'leaflet.markercluster','angular.leaflet'], function (angular) {
    'use strict';

    var home = angular.module('app.home', ['leaflet-directive']);

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
                .state('profilePemerintah', {
                    url: '/profile/pemerintah/:id',
                    templateUrl: 'app/home/templates/profile_pemerintah.html',
                    controller: 'CtrlPemerintah as CPemerintah'
                })
                .state('map', {
                    url: '/home/map',
                    templateUrl: 'app/home/templates/project_home_map.html',
                    controller: 'CtrlMap as CMap'
                })
        }
    ]);

    return home;
});