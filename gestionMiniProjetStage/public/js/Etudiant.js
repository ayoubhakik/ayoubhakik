document.querySelector(".img__btn").addEventListener("click", function () {
    document.querySelector(".cont").classList.toggle("s--signup");
});
angular
    .module("myApp", ["dataGrid", "pagination", "ngMaterial"])
    .controller("myAppController", [
        "$scope",
        "myAppFactory",
        function ($scope, myAppFactory) {
            $scope.gridOptions = {
                data: [],
                urlSync: false,
            };
            myAppFactory.getData().then(function (responseData) {
                $scope.gridOptions.data = responseData.data;
            });
        },
    ])
    .factory("myAppFactory", function ($http) {
        return {
            getData: function () {
                return $http({
                    method: "GET",
                    url: "https://angular-data-grid.github.io/demo/data.json",
                });
            },
        };
    });
