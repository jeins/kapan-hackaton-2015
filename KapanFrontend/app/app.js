define([
    'angular', 'app', 'angular.ui-router', 'angular.materialize',
    './config',
    './__common/app.common', './__common/app.common.req',
    './home/app.home', './home/app.home.req'
], function (angular) {

    var app = angular.module('app', [
        'ui.router', 'ui.materialize',
        'app.config', 'app.common', 'app.home'
    ]);

    // first route to homepage
    app.config(['$urlRouterProvider', '$locationProvider', function ($urlRouterProvider, $locationProvider) {console.log("OK");
        $locationProvider.html5Mode(true).hashPrefix('!');
        $urlRouterProvider.otherwise('/');
    }]);

    app.run();
    return app;
});