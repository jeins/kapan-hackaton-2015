define(['angular'], function (angular) {
    'use strict';

    var config = angular.module('app.config', []);

    config.constant('CONFIG', {
        'init': {
            'appPath': 'app/'
        },
        'http': {
            'host': 'http://kapans.127.0.0.1.xip.io'
        }
    });

    config.constant('APP_PERMISSION', {
        'everybody': 'everybody',
        'rakyat': 'rakyat',
        'admin': 'admin'
    });

    return config;
});