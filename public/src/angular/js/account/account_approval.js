







/* global myToken */

settingsApp.controller('accountApprovalController', ['$scope', '$http', 'accountApprovalService', 'ModalService', function ($scope, $http, accountApprovalService, ModalService) {


        $scope.users = [];

        $scope.itemsUsers = 20;
        $scope.account_name = '';
        $scope.showAccountApprovedSuccess = false;

        accountApprovalService.getUsers().then(function (resp) {
            var majors = JSON.stringify(resp.data['users']);
            $.each(JSON.parse(majors), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.name = obj.name;
                data.email = obj.email;
                data.activated = obj.activated;
                data.approved = obj.approved;
                data.first_name = obj.first_name;
                data.middle_name = obj.middle_name;
                data.last_name = obj.last_name;
                data.role_id = obj.role_id;
                data.role = obj.role;
                data.status = obj.status;
                $scope.users.push(data);

            });
        });

        $scope.approveAccount = function (my_user) {

            $data = {
                '_token': myToken,
                'user': $scope.user,
                'user_id': my_user.id

            };

            ModalService.showModal({
                templateUrl: 'modalApprove.html',
                controller: "ModalAccountApprovallController",
                inputs: {
                    title: 'my title'

                }
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {

                    if (result === 'Yes') {

                        $http.post('/api/approve_account', $data)
                                .success(function (data, status, headers, config) {
                                    var user = data['user'];
                                    my_user.approved = '' + 1;
                                    my_user.activated = '' + 1;
                                    $scope.account_name = my_user.last_name + ', ' + my_user.first_name + ' ' + my_user.middle_name;
                                    $scope.showAccountApprovedSuccess = true;
//                        console.log('user: ' + JSON.stringify(user));
                                    setTimeout(function () {
                                        $scope.$apply(function () {

                                            $scope.showAccountApprovedSuccess = false;
                                        });
                                    }, 1000);

                                })
                                .error(function (data, status, headers, config) {

                                })
                                ;
                    }
                });
            });

        };

        $scope.activateAccount = function (my_user) {
            console.log('asdad');
            $data = {
                '_token': myToken,
                'user': $scope.user,
                'user_id': my_user.id

            };

            ModalService.showModal({
                templateUrl: 'modalActivate.html',
                controller: "ModalAccountApprovallController",
                inputs: {
                    title: 'my title'

                }
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {

                    if (result === 'Yes') {

                        $http.post('/api/activate_account', $data)
                                .success(function (data, status, headers, config) {
                                    var user = data['user'];
                                  
                                    my_user.activated = '' + 1;
                                   
                                    $scope.showAccountApprovedSuccess = true;

                                    setTimeout(function () {
                                        $scope.$apply(function () {

                                            $scope.showAccountApprovedSuccess = false;
                                        });
                                    }, 1000);

                                })
                                .error(function (data, status, headers, config) {

                                })
                                ;
                    }
                });
            });

        };




    }]);

settingsApp.controller('ModalAccountApprovallController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});