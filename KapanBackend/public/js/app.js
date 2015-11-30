angular.module('App', ['ui.router', 'satellizer'])
    .config(function($stateProvider, $urlRouterProvider, $authProvider) {
        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: 'js/home.html',
                controller: 'HomeCtrl'
            });

        $urlRouterProvider.otherwise('/');

        $authProvider.google({
            name: 'google',
            clientId: '735966287704-d97heeq4ouke1oj0ohi38cjc3i0hijh5.apps.googleusercontent.com',
            url: '/auth/google',
            redirectUri: 'http://kapan.127.0.0.1.xip.io/'
        });
    });
