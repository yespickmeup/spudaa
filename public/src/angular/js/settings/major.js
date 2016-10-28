





settingsApp.controller('majorController', ['$scope', '$http', 'majorService', 'ModalService', function ($scope, $http, majorService, ModalService) {

        $scope.majors = [];
        $scope.inputMajor = '';
        $scope.itemsByPage = 10;

        $scope.showAddMajorSuccess = false;
        $scope.showUpdateMajorSuccess = false;
        $scope.showDeleteMajorSuccess = false;
        $scope.showMajorAdd = true;
        $scope.showMajorUpdate = false;


        majorService.getMajors().then(function (resp) {
            var majors = JSON.stringify(resp.data['majors']);
            $.each(JSON.parse(majors), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.major = obj.major;
                $scope.majors.push(data);
            });
        });


        $scope.newMajor = function () {
            $scope.inputMajor = '';
            angular.element('#inputMajor').focus();
        };

        $scope.addMajor = function () {
            var data = {};
            data.id = 0;
            data.major = $scope.inputMajor;
            var level_id = 0;
            var year_id = 0;
            var course_id=0;
            majorService.addMajor($scope.inputMajor,level_id,year_id,course_id).then(function (resp) {
                var message = JSON.stringify(resp.data['major']);
                if (resp.status === 200) {
                    var id = JSON.parse(message).id;
                    data.id = id;
                    $scope.majors.push(data);
                    $scope.inputMajor = '';

                    angular.element('#inputMajor').focus();
                    $scope.showAddMajorSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showAddMajorSuccess = false;
                        });
                    }, 500);
                }
            });


        };

        $scope.editMajor = function (major) {

            $scope.majorOnEdit = major;
            $scope.inputMajor = major.major;
            $scope.showMajorAdd = false;
            $scope.showMajorUpdate = true;
            angular.element('#inputMajor').focus();
        };

        $scope.updateMajor = function () {

            majorService.updateMajor($scope.majorOnEdit.id, $scope.inputMajor).then(function (resp) {
                var message = JSON.stringify(resp.data['message']);

                if (resp.status === 200) {
                    $scope.majorOnEdit.major = $scope.inputMajor;
                    $scope.showMajorAdd = true;
                    $scope.showMajorUpdate = false;
                    $scope.inputMajor = '';
                    angular.element('#inputMajor').focus();
                    $scope.showUpdateMajorSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showUpdateMajorSuccess = false;
                        });
                    }, 500);
                }
            });
        };

        $scope.confirmDeleteMajor = function (major) {

            ModalService.showModal({
                templateUrl: 'modalMajor.html',
                controller: "ModalMajorlController"
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {
                    if (result === 'Yes') {
                        majorService.deleteMajor(major.id).then(function (resp) {
                            var message = JSON.stringify(resp.data['message']);
                            if (resp.status === 200) {
                                var index = $scope.majors.indexOf(major);
                                if (index !== -1) {
                                    $scope.majors.splice(index, 1);
                                    angular.element('#inputMajor').focus();
                                }
                                $scope.showDeleteMajorSuccess = true;
                                setTimeout(function () {
                                    $scope.$apply(function () {
                                        $scope.showDeleteMajorSuccess = false;
                                    });
                                }, 500);
                            }
                        });

                    }
                });
            });


        };





    }]);

settingsApp.controller('ModalMajorlController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});