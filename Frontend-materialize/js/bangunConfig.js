//---------------------------------------------------------------------------------------------------
//------------------------ Angular JS Untuk BangunIndonesiaApp !! ------------------------------------
//---------------------------------------------------------------------------------------------------

var bangunApp = angular.module('App', ['ngRoute','ngResource']);
var _URL = "http://localhost:9999";

// use the HTML5 History API
bangunApp.config(function($routeProvider, $locationProvider) {
  $locationProvider.html5Mode({
    enabled: true,
    requireBase: false,
    rewriteLinks: false
  });
});
