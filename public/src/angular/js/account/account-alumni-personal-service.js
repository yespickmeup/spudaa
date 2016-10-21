





settingsApp.controller('accountAlumniPersonalServicesController', ['$scope', '$http', 'personalService', 'ModalService', function ($scope, $http, personalService, ModalService) {

        $scope.personalServices = [];
        $scope.inputPersonalService = '';
        $scope.itemsByPage = 5;

        $scope.showAddPersonalServiceSuccess = false;
        $scope.showUpdatePersonalServiceSuccess = false;
        $scope.showDeletePersonalServiceSuccess = false;
        $scope.showPersonalServicesAdd = true;
        $scope.showPersonalServicesUpdate = false;

        $scope.personalService = {
            id: '',
            service: ''
        };

        personalService.getPersonalServices($scope.my_id).then(function (resp) {
            var services = JSON.stringify(resp.data['services']);
            $.each(JSON.parse(services), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.service = obj.service;
                $scope.personalServices.push(data);
            });
        });
//
//
        $scope.clearPersonalService = function () {
            $scope.personalService = {
                id: '',
                service: ''
            };
            angular.element('#inputPersonalServiceName').focus();
        };
////
        $scope.addPersonalService2 = function () {

            $scope.data = {
                id: 0,
                user_id: $scope.my_id,
                service: $scope.personalService.service
            };
            personalService.addPerService($scope.data).then(function (resp) {
                var message = JSON.stringify(resp.data['service']);

                if (resp.status === 200) {
                    var id = JSON.parse(message).id;
                    $scope.data.id = id;
                    $scope.personalServices.push($scope.data);
                    $scope.clearPersonalService();
                    $scope.showAddPersonalServiceSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showAddPersonalServiceSuccess = false;
                        });
                    }, 500);
                }
            });


        };
////
        $scope.editPersonalService = function (service) {

            $scope.serviceOnEdit = service;
            $scope.personalService.service = service.service;
            $scope.showPersonalServicesAdd = false;
            $scope.showPersonalServicesUpdate = true;
            angular.element('#inputPersonalServiceName').focus();
        };
////
        $scope.updatePersonalService2 = function () {

            $scope.serviceEdit = {
                id: $scope.serviceOnEdit.id,
                service: $scope.personalService.service
              
            };
          
            personalService.updatePerService($scope.serviceEdit).then(function (resp) {
                var message = JSON.stringify(resp.data['message']);

                if (resp.status === 200) {

                    $scope.serviceOnEdit.service = $scope.personalService.service;
                    $scope.showPersonalServiceAdd = true;
                    $scope.showPersonalServiceUpdate = false;
                    $scope.clearPersonalService();
                    $scope.showUpdatePersonalServiceSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showUpdatePersonalServiceSuccess = false;
                        });
                    }, 500);
                }
            });
        };
////
        $scope.confirmDeletePersonalService = function (service) {

            ModalService.showModal({
                templateUrl: 'modalPersonalService.html',
                controller: "ModalPersonalServiceMemberslController"
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {
                    if (result === 'Yes') {
                        personalService.deletePerService(service.id).then(function (resp) {
                            var message = JSON.stringify(resp.data['message']);
                            if (resp.status === 200) {
                                var index = $scope.personalServices.indexOf(service);
                                if (index !== -1) {
                                    $scope.personalServices.splice(index, 1);
                                    $scope.clearPersonalService();
                                }
                                $scope.showDeletePersonalServiceSuccess = true;
                                setTimeout(function () {
                                    $scope.$apply(function () {
                                        $scope.showDeletePersonalServiceSuccess = false;
                                    });
                                }, 500);
                            }
                        });

                    }
                });
            });


        };





    }]);

settingsApp.controller('ModalPersonalServiceMemberslController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});