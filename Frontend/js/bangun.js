angular.module('App', [])
 .controller('testing', function($scope, $http){

   $http.get('http://localhost:9999/api/profiles').
       success(function(data) {
           $scope.test = data;
           console.log(data);
       }).
     error(function (data) {
       $scope.data = "Request failed";
     });

 });
