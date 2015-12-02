//---------------------------------------------------------------------------------------------------
//------------------------ Angular JS Untuk BangunIndonesiaApp !! ------------------------------------
//---------------------------------------------------------------------------------------------------

var kapanApp = angular.module('App', ['ngRoute','ngResource']);
var _URL = "http://localhost:9999";

// use the HTML5 History API
kapanApp.config(function($routeProvider, $locationProvider) {
  $locationProvider.html5Mode({
    enabled: true,
    requireBase: false,
    rewriteLinks: false
  });
});

//---------------------------------------------------------------------------------------------------
//----------------------- DIRECTIVE UNTUK TEMPLATE -------------------------------------------------
//---------------------------------------------------------------------------------------------------
kapanApp.directive('footer', function () {
    return {
        restrict: 'A',
        replace: true,
        templateUrl: "templates/footer.html"
      }
});

kapanApp.directive('navigation', function () {
    return {
        restrict: 'A',
        replace: true,
        templateUrl: "templates/navigation.html"
      }
});

//---------------------------------------------------------------------------------------------------
//---------------------  get All projects   ---------------------------------------------------------
//---------------------------------------------------------------------------------------------------
kapanApp.controller('getProjects', function($scope, $http){

   $http.get(_URL + '/api/projects').
       success(function(data) {
           $scope.projects = data;

           for(var i=0; i<Object.keys(data).length; i++){

               $http.get(_URL + '/api/profile/' + data[i].profile_pemerintah_id)
               .success(function(dataP) {
                    push_nama(dataP.fullname, dataP.id);
               });

           } //end forloop

          //add nama pemerintah ke view kartu
          function push_nama(nama, id){
             $('#oleh_id_'+id).text("Oleh: " + nama);
          }

       }).
     error(function (data) {
       console.log("getproject Request failed");
     });

});

//---------------------------------------------------------------------------------------------------
//---------------------------------- Get Project Detail----------------------------------------------
//---------------------------------------------------------------------------------------------------
kapanApp.controller('getProjectDetail', function($scope, $http, $location){
  var hash_projectId = $location.hash();

   $http.get(_URL + '/api/project/' + hash_projectId)
       .success(function(data) {
           $scope.project = data;

           //get info pemilik proyek
           $http.get(_URL + '/api/profile/' + data.profile_pemerintah_id)
           .success(function(dataP) {
                console.log(dataP);
           });

       })
      .error(function (data) {
        console.log("getproject detail Request failed");
      });

});
//---------------------------------------------------------------------------------------------------
