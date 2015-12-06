define(['../app.home'], function(app){
    'use strict';

    var name = 'CtrlMap';
    var dependencies = ['$scope', 'SvcProject'];
    var controller = function($scope, SvcProject){
        $scope.title = "Home";

        $scope.center = {
            //autoDiscover: true,
            lat: -0.789275,
            lng: 113.921327,
            zoom: 5
        };

        $scope.layers =  {
            baselayers: {
                googleTerrain: {
                    name: 'Google Terrain',
                    layerType: 'TERRAIN',
                    type: 'google'
                },
                googleHybrid: {
                    name: 'Google Hybrid',
                    layerType: 'HYBRID',
                    type: 'google'
                },
                googleRoadmap: {
                    name: 'Google Streets',
                    layerType: 'ROADMAP',
                    type: 'google'
                }
            },
            overlays: {
                indonesia: {
                    name: "Indonesia",
                    type: "markercluster",
                    visible: true
                }
            }
        };

        $scope.company = {};

        $scope.events = {
            markers: {
                enable: ['click']
            }
        };

        $scope.$on('leafletDirectiveMarker.click', function(e, args) {
            console.log($scope.center);
            $scope.company.name = args.model.message;
            $scope.company.lat = args.model.lat;
            $scope.company.lng = args.model.lng;
            $scope.company.city = args.model.layer;
        });

        SvcProject.getProjects(function(result){console.log(result);
            var newMarkers = {};

            for(var i in result){
                var tmp = result[i].lokasi.tempat.toLowerCase().replace(" ", "_");

                newMarkers[tmp] = {
                    layer: "indonesia",
                    lat: result[i].lokasi.lat,
                    lng: result[i].lokasi.lng,
                    message: "<div><h5>"+ result[i].nama +"</h5><a class='waves-effect waves-light btn bc_main' style='color: #fff' href='/project/"+ result[i].id +"'>Lihat Detail</a></div>"
                }
            }
            $scope.markers = newMarkers;
        });

    };
    app.controller(name, dependencies.concat(controller));
});