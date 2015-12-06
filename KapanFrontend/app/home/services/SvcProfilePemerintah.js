define(['../app.home'], function(app){
    'use strict';

    var name = 'SvcProfilePemerintah';
    var dependencies = ['$http', '$q', 'CONFIG'];
    var service = function($http, $q, CONFIG){

        function getProfileById(idPemerintah, doneCallback){
            var request = {
                url: CONFIG.http.host + '/api/profile/'+ idPemerintah,
                method: 'GET',
                data: ''
            };

            $http(request)
                .then(function (resp) {
                    doneCallback(resp.data);
                });
        }

        return {
            getProfileById:getProfileById
        }

    };
    app.factory(name, dependencies.concat(service));
});