





settingsApp.controller('levelController', ['$scope', '$http', 'levelService', 'ModalService', function ($scope, $http, levelService, ModalService) {

        $scope.levels = [];
        $scope.inputLevel = '';
        $scope.itemsByPage = 10;

        $scope.showAddLevelSuccess = false;
        $scope.showUpdateLevelSuccess = false;
        $scope.showDeleteLevelSuccess = false;
        $scope.showLevelAdd = true;
        $scope.showLevelUpdate = false;

        levelService.getLevels().then(function (resp) {
            var levels = JSON.stringify(resp.data['levels']);
            $.each(JSON.parse(levels), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.level = obj.level;
                $scope.levels.push(data);
            });
        });


        $scope.newLevel = function () {
            $scope.inputLevel = '';
            angular.element('#inputLevel').focus();
        };

        $scope.addLevel = function () {
            var data = {};
            data.id = 0;
            data.level = $scope.inputLevel;

            levelService.addLevel($scope.inputLevel).then(function (resp) {
                var message = JSON.stringify(resp.data['level']);
                if (resp.status === 200) {
                    var id = JSON.parse(message).id;
                    data.id = id;
                    $scope.levels.push(data);
                    $scope.inputLevel = '';
                    angular.element('#inputLevel').focus();

                    $scope.showAddLevelSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showAddLevelSuccess = false;
                        });
                    }, 500);
                }
            });
        };
        $scope.editLevel = function (level) {

            $scope.levelOnEdit = level;
            $scope.inputLevel = level.level;
            $scope.showLevelAdd = false;
            $scope.showLevelUpdate = true;
            angular.element('#inputLevel').focus();
        };
        $scope.updateLevel = function () {
            levelService.updateLevel($scope.levelOnEdit.id, $scope.inputLevel).then(function (resp) {
                if (resp.status === 200) {
                    $scope.levelOnEdit.level = $scope.inputLevel;
                    $scope.showLevelAdd = true;
                    $scope.showLevelUpdate = false;
                    $scope.inputLevel = '';
                    angular.element('#inputLevel').focus();
                    $scope.showUpdateLevelSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showUpdateLevelSuccess = false;
                        });
                    }, 500);
                }
            });
        };

        $scope.confirmDeleteLevel = function (level) {

            ModalService.showModal({
                templateUrl: 'modal.html',
                controller: "ModalLevelController"
            }).then(function (modal) {
                modal.element.modal();

                modal.close.then(function (result) {
                    if (result === 'Yes') {
                        levelService.deleteLevel(level.id).then(function (resp) {
                            var message = JSON.stringify(resp.data['message']);
                            if (resp.status === 200) {
                                var index = $scope.levels.indexOf(level);
                                if (index !== -1) {
                                    $scope.levels.splice(index, 1);
                                    angular.element('#inputLevel').focus();
                                }
                                $scope.showDeleteLevelSuccess = true;
                                setTimeout(function () {
                                    $scope.$apply(function () {
                                        $scope.showDeleteLevelSuccess = false;
                                    });
                                }, 500);

                            }
                        });

                    }
                });
            });


        };
    }]);

settingsApp.controller('ModalLevelController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});