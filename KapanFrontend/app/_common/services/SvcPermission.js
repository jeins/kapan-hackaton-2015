define(['../app.common'], function(app){
    'use strict';

    var name = 'SvcPermission';
    var dependencies = ['$http', '$q', 'CONFIG'];
    var service = function($http, $q, CONFIG){

        function getPermission(doneCallback){
            var request = {
                url: CONFIG.http.host + '/auth/currentuser',
                method: 'POST',
                data: ''
            };

            $http(request)
                .then(function (resp) {
                    doneCallback(resp.data);
                });
        }

        return {
            getPermission: getPermission
        };

    };
    app.factory(name, dependencies.concat(service));
});