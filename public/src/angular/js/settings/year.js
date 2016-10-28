





settingsApp.controller('yearController', ['$scope', '$http', 'yearService', 'ModalService', function ($scope, $http, yearService, ModalService) {

        $scope.years = [];
        $scope.inputYear = '';
        $scope.itemsByPage = 5;

        $scope.showAddYearSuccess = false;
        $scope.showUpdateYearSuccess = false;
        $scope.showDeleteYearSuccess = false;
        $scope.showYearAdd = true;
        $scope.showYearUpdate = false;


        yearService.getYears().then(function (resp) {
            var years = JSON.stringify(resp.data['years']);
            $.each(JSON.parse(years), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.year = obj.year;
                $scope.years.push(data);
            });
        });


        $scope.newYear = function () {
            $scope.inputYear = '';
            angular.element('#inputYear').focus();
        };

        $scope.addYear = function () {
            var data = {};
            data.id = 0;
            data.year = $scope.inputYear;

            yearService.addYear($scope.inputYear).then(function (resp) {
                var message = JSON.stringify(resp.data['year']);
                if (resp.status === 200) {
                    var id = JSON.parse(message).id;
                    data.id = id;
                    $scope.years.push(data);
                    $scope.inputYear = '';
                  
                    angular.element('#inputYear').focus();
                    $scope.showAddYearSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showAddYearSuccess = false;
                        });
                    }, 500);

                }
            });
            

        };

        $scope.editYear = function (year) {
          
            $scope.yearOnEdit = year;
            $scope.inputYear = year.year;
            $scope.showYearAdd = false;
            $scope.showYearUpdate = true;
            angular.element('#inputYear').focus();
        };

        $scope.updateYear = function () {
            yearService.updateYear($scope.yearOnEdit.id, $scope.inputYear).then(function (resp) {
                var message = JSON.stringify(resp.data['message']);
                console.log('message: ' + message);
                if (resp.status === 200) {
                    $scope.yearOnEdit.year = $scope.inputYear;
                    $scope.showYearAdd = true;
                    $scope.showYearUpdate = false;
                    $scope.inputYear = '';
                    angular.element('#inputYear').focus();


                    $scope.showUpdateYearSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showUpdateYearSuccess = false;
                        });
                    }, 500);
                }
            });
        };

        $scope.confirmDeleteYear = function (year) {


            ModalService.showModal({
                templateUrl: 'modalYear.html',
                controller: "ModalYearlController"
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {
                    if (result === 'Yes') {
                        yearService.deleteYear(year.id).then(function (resp) {
                            var message = JSON.stringify(resp.data['message']);
                            if (resp.status === 200) {
                                var index = $scope.years.indexOf(year);
                                if (index !== -1) {
                                    $scope.years.splice(index, 1);
                                    angular.element('#inputYear').focus();
                                }
                                $scope.showDeleteYearSuccess = true;
                                setTimeout(function () {
                                    $scope.$apply(function () {
                                        $scope.showDeleteYearSuccess = false;
                                    });
                                }, 500);

                            }
                        });

                    }
                });
            });


        };





    }]);

settingsApp.controller('ModalYearlController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});