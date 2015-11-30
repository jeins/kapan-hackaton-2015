angular.module('App')
    .controller('HomeCtrl', function($scope, $auth, Account, $window) {
        $scope.login = function() {
            $auth.login({ email: $scope.email, password: $scope.password })
                .then(function() {
                    console.log("HELLOW");
                })
                .catch(function(response) {
                    console.log(response.data.message);
                });
        };
        $scope.authenticate = function(provider) {
            $auth.authenticate(provider)
                .then(function() {
                    console.log("Sukses Login");
                    $window.location.reload();
                })
                .catch(function(response) {
                    console.log(response.data.message);
                });
        };

        $scope.getProfile = function() {
            Account.getProfile()
                .success(function(data) {
                    $scope.user = data;
                })
                .error(function(error) {
                    console.log(error);
                });

            Account.getProjects()
                .success(function(data) {
                    console.log("Projects");
                    console.log(data);
                })
                .error(function(error) {
                    console.log(error);
                });
        };
        $scope.getProfile();
    });