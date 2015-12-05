define([
    'angular', 'jquery', 'hammerjs', 'materialize', 'app', 'angular.ui-router', 'angular.materialize', 'satellizer',
    './config',
    './_common/app.common', './_common/app.common.req',
    './home/app.home', './home/app.home.req'
], function (angular) {

    var app = angular.module('app', [
        'ui.router', 'ui.materialize', 'satellizer',
        'app.config', 'app.common', 'app.home'
    ]);

    // first route to homepage
    app.config(['$urlRouterProvider', '$locationProvider', function ($urlRouterProvider, $locationProvider) {
        $locationProvider.html5Mode(true);
        $urlRouterProvider.otherwise('/');
    }]);

    app.config(['$authProvider', 'CONFIG', function($authProvider, CONFIG){console.log(CONFIG);
            $authProvider.loginUrl = CONFIG.http.host + '/auth/login';
            $authProvider.signupUrl = CONFIG.http.host + '/auth/signup';

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

    app.run();
    return app;
});