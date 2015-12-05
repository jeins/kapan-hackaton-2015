define(['../app.home'], function(app){
    'use strict';

    var name = 'SvcProject';
    var dependencies = ['$http', '$q', 'CONFIG'];
    var service = function($http, $q, CONFIG){

        function getProjects(doneCallback){
            var request = {
                url: CONFIG.http.host + '/api/projects',
                method: 'GET',
                data: ''
            };

            $http(request)
                .then(function (resp) {
                    doneCallback(resp.data);
                });
        }

        function getProjectById(idProject, doneCallBack){
            var request = {
                url: CONFIG.http.host + '/api/project/' + idProject,
                method: 'GET',
                data: ''
            };

            $http(request)
                .then(function (resp) {
                    doneCallBack(resp.data);
                });
        }

        return {
            getProjects: getProjects,
            getProjectById: getProjectById
        };

    };
    app.factory(name, dependencies.concat(service));
});