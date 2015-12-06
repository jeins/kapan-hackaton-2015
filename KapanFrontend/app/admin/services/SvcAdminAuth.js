define(['../app.admin'], function(app){
    'use strict';

    var name = 'SvcAdminAuth';
    var dependencies = ['$http', '$q', 'CONFIG'];
    var service = function($http, $q, CONFIG){

    };
    app.factory(name, dependencies.concat(service));
});