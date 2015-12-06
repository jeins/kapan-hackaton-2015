define(['../app.home'], function(app){
    'use strict';

    var name = 'SvcKomentar';
    var dependencies = ['$http', '$q', 'CONFIG'];
    var service = function($http, $q, CONFIG){

        function getKomentar(idProject, doneCallback){
            var request = {
                url: CONFIG.http.host + '/api/project/'+ idProject +'/post',
                method: 'GET',
                data: ''
            };

            $http(request)
                .then(function (resp) {
                    doneCallback(resp.data);
                });
        }

        function addKomentar(idProject, data, doneCallback){
            var request = {
                url: CONFIG.http.host + '/rakyat/post/project/' + idProject,
                method: 'POST',
                data: data
            }

            $http(request)
                .then(function (resp){
                   doneCallback(resp.data);
                });
        }

        return {
            getKomentar: getKomentar,
            addKomentar: addKomentar
        };

    };
    app.factory(name, dependencies.concat(service));
});
