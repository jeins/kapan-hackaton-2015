define([
    'angular', 'jquery', 'hammerjs', 'materialize', 'app', 'angular.ui-router', 'angular.materialize',
    './config',
    './_common/app.common', './_common/app.common.req',
    './home/app.home', './home/app.home.req',
    './admin/app.admin', './admin/app.admin.req'
], function (angular) {

    var app = angular.module('app', [
        'ui.router', 'ui.materialize',
        'app.config', 'app.common', 'app.home', 'app.admin'
    ]);

    // first route to homepage
    app.config(['$urlRouterProvider', '$locationProvider', function ($urlRouterProvider, $locationProvider) {
        $locationProvider.html5Mode(true);
        //$urlRouterProvider.otherwise('/');
    }]);

    app.config(['$httpProvider', function($httpProvider) {
        $httpProvider.defaults.useXDomain = false;
        delete $httpProvider.defaults.headers.common['X-Requested-With'];
    }
    ]);

    app.run();
    return app;
});