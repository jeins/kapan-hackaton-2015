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

    app.config([
        '$authProvider', function($authProvider){
            $authProvider.loginUrl = 'http://kapan.127.0.0.1.xip.io/auth/login';
            $authProvider.signupUrl = 'http://kapan.127.0.0.1.xip.io/auth/signup';
            $authProvider.google({
                name: 'google',
                clientId: '735966287704-d97heeq4ouke1oj0ohi38cjc3i0hijh5.apps.googleusercontent.com',
                url: 'http://kapan.127.0.0.1.xip.io/auth/rakyat/google',
                redirectUri: 'http://kapan.127.0.0.1.xip.io/'
            });
    }]);

    app.run();
    return app;
});