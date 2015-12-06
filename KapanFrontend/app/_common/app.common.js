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

    common.config(['$authProvider', 'CONFIG', function($authProvider, CONFIG){
        $authProvider.signupUrl = CONFIG.http.host + '/auth/rakyat/signup';
        $authProvider.loginUrl = CONFIG.http.host + '/auth/rakyat/login';

        $authProvider.google({
            name: 'google',
            clientId: '735966287704-d97heeq4ouke1oj0ohi38cjc3i0hijh5.apps.googleusercontent.com',
            url: CONFIG.http.host + '/auth/rakyat/google',
            redirectUri: CONFIG.http.redirectUri
        });


        $authProvider.facebook({
            'name': 'facebook',
            clientId: '423629411165045',
            url: CONFIG.http.host + '/auth/rakyat/facebook',
            redirectUri: CONFIG.http.redirectUri
        });
    }]);

    return common;
});