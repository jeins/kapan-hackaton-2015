//---------------------------------------------------------------------------------------------------
//---------------------  Service Angular bangunApp ---------------------------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.service('bangunService', function($http, $location){

  this.getProjects = function(callback){
    $http.get(_URL + '/api/projects').then(callback)
  };

  var hash_projectId = $location.hash();
  this.getProjectDetail = function(callback){
    $http.get(_URL + '/api/project/' + hash_projectId).then(callback)
  };

  this.getProfile = function(callback){
    $http.get(_URL + '/api/profile/' + hash_projectId).then(callback)
  };

  this.getProjectEach = function(callback){
    $http.get(_URL + '/api/projects').then(callback)
  };

});
