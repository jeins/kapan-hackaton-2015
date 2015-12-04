//---------------------------------------------------------------------------------------------------
//---------------------  Service Angular bangunApp ---------------------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.service('bangunService', function($http, $location, $q){

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


  this.getProfilePemerintah = function($id){
    var deferred = $q.defer();
    $http
        .get(_URL + "/api/profile/" + $id)
        .then(function(result){
            deferred.resolve(result.data);
        })
        .catch(function(error){
            deferred.reject(error);
        });
    return deferred.promise;
  };

});
