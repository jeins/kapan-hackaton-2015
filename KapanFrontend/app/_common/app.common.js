define(['angular', 'satellizer'], function (angular) {
    'use strict';

    var common = angular.module('app.common', ['satellizer']);

    common.config([ '$urlRouterProvider', '$stateProvider',
        function($urlRouterProvider, $stateProvider){
            $stateProvider
                .state('login', {
                    url: '/login',
                    controller: 'CtrlAuth as CAuth'
                })
                .state('signup', {
                    url: '/signup',
                    controller: 'CtrlAuth as CAuth'
                })
        }
    ]);

    return common;
});