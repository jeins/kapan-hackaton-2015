define(['../app.home'], function(app){
    'use strict';

    var name = 'CtrlMap';
    var dependencies = ['$scope'];
    var controller = function($scope){
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
                deutschland: {
                    name: "Deutschland",
                    type: "markercluster",
                    visible: true
                },
                taiwan: {
                    name: "Taiwan",
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

        $scope.markers = {
            taipei: {layer: "taiwan",lat: 25.0391667,lng: 121.525},
            yangmei: {layer: "taiwan",lat: 24.9166667,lng: 121.1333333},
            hsinchu: {layer: "taiwan",lat: 24.8047222,lng: 120.9713889},
            miaoli: {layer: "taiwan",lat: 24.5588889,lng: 120.8219444},
            tainan: {layer: "taiwan",lat: 22.9933333,lng: 120.2036111},
            puzi: {layer: "taiwan",lat: 23.4611,lng: 120.242},
            kaohsiung: {layer: "taiwan",lat: 22.6252777778,lng: 120.3088888889},
            taitun: {layer: "taiwan",lat: 22.75,lng: 121.15},

            abc: {layer: 'deutschland',lat: 52.520085797742546,lng: 13.468637466430664,message: "ABC GmbH", focus: true},
            ber123: {layer: 'deutschland',lat: 52.521443666747615,lng: 13.35062026977539,message: "BER 123 GmbH"},
            ber456: {layer: 'deutschland',lat: 52.595540478713865,lng: 13.596954345703125,message: "BER 456 AG"},
            ber789: {layer: 'deutschland',lat: 52.28916260406677,lng: 13.6175537109375,message: "Ber 789 KG"},
            qwe: {layer: 'deutschland', lat: 51.63847621195153,lng: 9.84375,message: "Tester Master AG"},
            asd: {layer: 'deutschland',lat: 52.50953477032729,lng: 8.26171875,message: "Maju Mundur KG"},
            yxc: {layer: 'deutschland',lat: 51.00684227163969,lng: 10.975341796875,message: "Rails GmbH"},
            tzu: {layer: 'deutschland',lat: 50.11683574775231,lng: 8.67919921875,message: "PHP Co.KG"},
            ghj: {layer: 'deutschland',lat: 50.11727603943097,lng: 8.6572265625,message: "Java GmbH"},
            bnm: {layer: 'deutschland',lat: 50.15490600646736,lng: 8.660316467285156,message: "Test AG"},
            iop: {layer: 'deutschland',lat: 48.22284281261851,lng: 11.64276123046875,message: "World GmbH"},
            klm: {layer: 'deutschland',lat: 52.53282722492755,lng: 13.642101287841797,message: "Hello GmbH"}
        };
    };
    app.controller(name, dependencies.concat(controller));
});