//---------------------------------------------------------------------------------------------------
//------------------------ Angular JS Untuk BangunIndonesiaApp !! ------------------------------------
//---------------------------------------------------------------------------------------------------

var bangunApp = angular.module('App', ['ngRoute','ngResource', 'ui.materialize']);
var _URL = "http://kapan.127.0.0.1.xip.io";

// use the HTML5 History API
bangunApp.config(function($routeProvider, $locationProvider) {
  $locationProvider.html5Mode({
    enabled: true,
    requireBase: false,
    rewriteLinks: false
  });
});
