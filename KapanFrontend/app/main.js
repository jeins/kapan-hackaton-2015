require.config({
    paths: {
        'app': './app',

        'angular': '../lib/angular/angular',
        'angular.ui-router': '../lib/angular-ui-router/release/angular-ui-router',
        'jquery': '../lib/jquery/dist/jquery',
        'materialize': '../lib/materialize/bin/materialize',
        'angular.materialize': '../lib/angular-materialize/src/angular-materialize',
        'angular.leaflet': '../lib/angular-leaflet-directive/dist/angular-leaflet-directive.min',
        'leaflet': '../lib/leaflet/dist/leaflet',
        'leaflet.plugins': '../lib/leaflet-plugins/layer/tile/Google',
        'leaflet.markercluster': '../lib/leaflet.markercluster/dist/leaflet.markercluster',
        'satellizer': '../lib/satellizer/satellizer',
        'hammerjs': '../lib/hammerjs/hammer.min'
    },
    shim: {
        'angular' : {exports : 'angular'},
        'jquery': {exports: 'jquery'},
        'leaflet': {exports: 'leaflet'},
        'hammerjs': {exports: 'hammerjs'},
        'materialize': {deps: ['jquery', 'hammerjs'], exports: 'materialize'},
        'angular.materialize': {deps: ['angular', 'materialize']},
        'angular.ui-router': {deps: ['angular']},
        'satellizer': {deps: ['angular']},
        'leaflet.plugins': {deps: ['leaflet']},
        'leaflet.markercluster': {deps: ['leaflet']},
        'angular.leaflet': {deps: ['angular', 'leaflet']}
    }
});

require(['angular', 'app'], function(angular, app){
    // angular.element().ready(function() {
    //     // bootstrap the app manually
    //     angular.bootstrap(document, ['myApp']);
    // }, false);
    angular.bootstrap(document, ['app']);
    // var $html = angular.element(document.getElementsByTagName('html')[0]);console.log($html);
})