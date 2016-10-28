/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */






/* global baseURL, myToken, photo */


settingsApp.controller('facultyController', ['$scope', '$http','ModalService', function ($scope, $htt,ModalService) {

        $scope.newMember = function () {
            ModalService.showModal({
                templateUrl: 'modalMember.html',
                controller: "ModalBoardlController",
                
                inputs: {
                    title: 'my title'

                }
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {

                    if (result === 'Yes') {


                    }
                });
            });
        };

    }]);


settingsApp.controller('ModalBoardlController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});