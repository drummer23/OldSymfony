app.controller('DogCtrl', function($scope, $http) {

    //init data
    $scope.dogs = [];

    $http.get('list').
        success(function(data, status, headers, config) {
            $scope.dogs = data;
        }).
        error(function(data, status, headers, config) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });

});
