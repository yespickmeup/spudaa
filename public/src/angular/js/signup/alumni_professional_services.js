/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


signupApp.controller('alumniProfessionalServicesController', ['$scope', '$http', function ($scope, $http) {


        var alumniProfessionalId = 0;
       
        $scope.showServicesAdd = true;
        $scope.showServicesUpdate = false;
       




        $scope.itemsByPage2 = 5;

        $scope.clearProfessionalService = function () {
            $scope.inputProfessionalService = '';
            $scope.showServicesAdd = true;
            $scope.showServicesUpdate = false;
        };
        
        $scope.addProfessionalService = function () {

            var data = {};
            data.id = alumniProfessionalId;
            data.service = $scope.inputProfessionalService;

            if (data.service !== '') {
                $scope.$parent.alumni_professional_services.push(data);
                alumniProfessionalId++;
                $scope.inputProfessionalService = '';

            }

        };

        $scope.editProfessionalService = function (professionalService) {
            $scope.professionalServiceOnEdit = professionalService;
            $scope.inputProfessionalService = professionalService.service;


            $scope.showServicesAdd = false;
            $scope.showServicesUpdate = true;
        };
        $scope.updateProfessionalService = function () {
            if ($scope.inputProfessionalService !== '') {
                $scope.professionalServiceOnEdit.service = $scope.inputProfessionalService;


                $scope.inputProfessionalService = '';


                $scope.showServicesAdd = true;
                $scope.showServicesUpdate = false;
            }

        };
        $scope.removeProfessionalService = function (row) {
            var index = $scope.$parent.alumni_professional_services.indexOf(row);
            if (index !== -1) {
                $scope.$parent.alumni_professional_services.splice(index, 1);
            }
        };

        



    }]);