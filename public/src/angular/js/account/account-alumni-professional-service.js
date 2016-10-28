





settingsApp.controller('accountAlumniProfessionalServicesController', ['$scope', '$http', 'professionalService', 'ModalService', function ($scope, $http, professionalService, ModalService) {

        $scope.professionalServices = [];
        $scope.inputProfessionalService = '';
        $scope.itemsByPage = 5;

        $scope.showAddProfessionalServiceSuccess = false;
        $scope.showUpdateProfessionalServiceSuccess = false;
        $scope.showDeleteProfessionalServiceSuccess = false;
        $scope.showProfessionalServicesAdd = true;
        $scope.showProfessionalServicesUpdate = false;

        $scope.professionalService = {
            id: '',
            service: ''
        };

        professionalService.getProfessionalServices($scope.my_id).then(function (resp) {
            var services = JSON.stringify(resp.data['services']);
            $.each(JSON.parse(services), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.service = obj.service;
                $scope.professionalServices.push(data);
            });
        });
//
//
        $scope.clearProfessionalService = function () {
            $scope.professionalService = {
                id: '',
                service: ''
            };
            angular.element('#inputProfessionalServiceName').focus();
        };
////
        $scope.addProfessionalService2 = function () {

            $scope.data = {
                id: 0,
                user_id: $scope.my_id,
                service: $scope.professionalService.service
            };
            professionalService.addProService($scope.data).then(function (resp) {
                var message = JSON.stringify(resp.data['service']);

                if (resp.status === 200) {
                    var id = JSON.parse(message).id;
                    $scope.data.id = id;
                    $scope.professionalServices.push($scope.data);
                    $scope.clearProfessionalService();
                    $scope.showAddProfessionalServiceSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showAddProfessionalServiceSuccess = false;
                        });
                    }, 500);
                }
            });


        };
////
        $scope.editProfessionalService = function (service) {

            $scope.serviceOnEdit = service;
            $scope.professionalService.service = service.service;
            $scope.showProfessionalServiceAdd = false;
            $scope.showProfessionalServiceUpdate = true;
            angular.element('#inputProfessionalServiceName').focus();
        };
////
        $scope.updateProfessionalService2 = function () {

            $scope.serviceEdit = {
                id: $scope.serviceOnEdit.id,
                service: $scope.professionalService.service
              
            };
          
            professionalService.updateProService($scope.serviceEdit).then(function (resp) {
                var message = JSON.stringify(resp.data['message']);

                if (resp.status === 200) {

                    $scope.serviceOnEdit.service = $scope.professionalService.service;
                    $scope.showProfessionalServiceAdd = true;
                    $scope.showProfessionalServiceUpdate = false;
                    $scope.clearProfessionalService();
                    $scope.showUpdateProfessionalServiceSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showUpdateProfessionalServiceSuccess = false;
                        });
                    }, 500);
                }
            });
        };
////
        $scope.confirmDeleteProfessionalService = function (service) {

            ModalService.showModal({
                templateUrl: 'modalProfessionalService.html',
                controller: "ModalProfessionalServiceMemberslController"
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {
                    if (result === 'Yes') {
                        professionalService.deleteProService(service.id).then(function (resp) {
                            var message = JSON.stringify(resp.data['message']);
                            if (resp.status === 200) {
                                var index = $scope.professionalServices.indexOf(service);
                                if (index !== -1) {
                                    $scope.professionalServices.splice(index, 1);
                                    $scope.clearProfessionalService();
                                }
                                $scope.showDeleteProfessionalServiceSuccess = true;
                                setTimeout(function () {
                                    $scope.$apply(function () {
                                        $scope.showDeleteProfessionalServiceSuccess = false;
                                    });
                                }, 500);
                            }
                        });

                    }
                });
            });


        };





    }]);

settingsApp.controller('ModalProfessionalServiceMemberslController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});