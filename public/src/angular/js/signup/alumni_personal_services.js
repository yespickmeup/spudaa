/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


signupApp.controller('alumniPersonalServicesController', ['$scope', '$http', function ($scope, $http) {


       
        var alumniPersonalId = 0;
       
        $scope.showPersonalAdd = true;
        $scope.showPersonalUpdate = false;




        $scope.itemsByPage2 = 5;

       
        $scope.clearPersonalService = function () {
            $scope.inputPersonalService = '';
            $scope.showPersonalAdd = true;
            $scope.showPersonalUpdate = false;
        };

        $scope.addPersonalService = function () {

            var data = {};
            data.id = alumniPersonalId;
            data.service = $scope.inputPersonalService;

            if (data.service !== '') {
                $scope.$parent.alumni_personal_services.push(data);
                alumniPersonalId++;
                $scope.inputPersonalService = '';

            }

        };

        $scope.editPersonalService = function (personalService) {
            $scope.personalServiceOnEdit = personalService;
            $scope.inputPersonalService = personalService.service;


            $scope.showPersonalAdd = false;
            $scope.showPersonalUpdate = true;
        };
        $scope.updatePersonalService = function () {
            if ($scope.inputPersonalService !== '') {
                $scope.personalServiceOnEdit.service = $scope.inputPersonalService;


                $scope.inputPersonalService = '';


                $scope.showPersonalAdd = true;
                $scope.showPersonalUpdate = false;
            }

        };
        $scope.removePersonalService = function (row) {
            var index = $scope.$parent.alumni_personal_services.indexOf(row);
            if (index !== -1) {
                $scope.$parent.alumni_personal_services.splice(index, 1);
            }
        };




    }]);