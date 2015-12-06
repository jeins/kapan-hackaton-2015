define(['angular', 'satellizer'], function (angular) {
    'use strict';

    var common = angular.module('app.admin', ['satellizer']);

    common.config([ '$urlRouterProvider', '$stateProvider', 'APP_PERMISSION',
        function($urlRouterProvider, $stateProvider, APP_PERMISSION){
            $stateProvider
                .state('admin-login', {
                    url: '/admin/login',
                    controller: 'CtrlAdminAuth as CAAuth',
                    templateUrl: 'app/admin/templates/admin_login_form.html',
                    permission: APP_PERMISSION.admin
                })
                .state('admin-dashboard', {
                    url: '/admin/dashboard',
                    controller: 'CtrlDashboard as CBoard',
                    templateUrl: 'app/admin/templates/admin_dashboard.html',
                    permission: APP_PERMISSION.admin
                })
        }
    ]);

    common.config(['$authProvider', 'CONFIG', function($authProvider, CONFIG){
        $authProvider.loginUrl = CONFIG.http.host + '/auth/admin/login';
    }]);

    return common;
});