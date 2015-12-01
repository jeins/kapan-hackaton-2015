angular.module('App')
    .factory('Account', function($http) {
        return {
            getProfile: function() {
                return $http.get('/api/me');
            },
            getProjects: function() {
                return $http.get('/api/projects');
            },
            getProfile: function(id) {
                return $http.get('/api/profile/'+id);
            },
        };
    });
