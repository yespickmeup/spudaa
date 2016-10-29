/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */






/* global baseURL, myToken, photo */


settingsApp.controller('facultyController', ['$scope', '$http', 'ModalService', function ($scope, $htt, ModalService) {

        $scope.director = {
            name: '',
            designation: '',
            details: ''
        };

        $scope.title = 'title';
        $scope.newMember = function () {
            ModalService.showModal({
                templateUrl: 'modalMember.html',
                controller: "ModalBoardlController",
                inputs: {
                    title: 'asdad',
                    director: $scope.director
                }
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {
                });
            });
        };

    }]);


settingsApp.controller('ModalBoardlController', function ($scope, close, title, director) {
    $scope.title = title;
    $scope.director = director;
    $scope.close = function (result) {
        if (result === 'Yes') {
           

            close(result, 500);
        }
//      
    };
});