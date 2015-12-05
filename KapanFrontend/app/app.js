define([
    'angular', 'app', 'angular.ui-router', 'angular.materialize',
    './config',
    './_common/app.common', './_common/app.common.req',
    './home/app.home', './home/app.home.req'
], function (angular) {

    var app = angular.module('app', [
        'ui.router', 'ui.materialize',
        'app.config', 'app.common', 'app.home'
    ]);

    // first route to homepage
    app.config(['$urlRouterProvider', '$locationProvider', function ($urlRouterProvider, $locationProvider) {
        $locationProvider.html5Mode(true);
        $urlRouterProvider.otherwise('/');
    }]);

    app.run();
    return app;
});