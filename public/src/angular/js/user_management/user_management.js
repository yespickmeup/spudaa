







/* global myToken */

settingsApp.controller('userManagementController', ['$scope', '$http', 'userManagementService', 'ModalService', function($scope, $http, userManagementService, ModalService) {



        $scope.users = [];
        $scope.roles = [];
        $scope.country = {
        };
        $scope.itemsUsers = 20;
        $scope.account_name = '';
        $scope.showUserManagementSuccess = false;


        userManagementService.getUsersAll().then(function(resp) {
            var majors = JSON.stringify(resp.data['users']);
            $.each(JSON.parse(majors), function(idx, obj) {
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
                data.active = obj.active;
                data.status = obj.status;
                data.student_no = obj.student_no;
                data.civil_status =obj.civil_status;
                data.gender = obj.gender;
                data.date_of_birth =obj.date_of_birth;
                data.home_address = obj.home_address;
                data.level = obj.level;
                data.year = obj.year;
                data.course = obj.course;
                data.active = obj.active;

                var ext = obj.image;
                if(ext==''){
                    ext = 'user2-160x160.jpg';
                }

                data.image =photo+'/'+ext;
               /* console.log('status: ' + obj.status);*/
                $scope.users.push(data);


            });
        });

        $scope.my_roles = {
            availableOptions: [],
            selectedOption: {"id": 3, "name": "user"}
        };





        userManagementService.getRoles().then(function(resp) {
            var roles = JSON.stringify(resp.data['roles']);

            $.each(JSON.parse(roles), function(idx, obj) {
                var data = {};
                data.id = obj.id;
                data.name = obj.name;
                $scope.roles.push(data);
                $scope.my_roles.availableOptions.push(data);
            });
        });


        /*Change Role*/

        $scope.changeRole = function(my_user) {

            $scope.my_roles.selectedOption = {"id": my_user.role_id, "name": my_user.role};

            ModalService.showModal({
                templateUrl: 'userManagement.html',
                controller: "ModalUserManagementController",
                inputs: {
                    title: 'my title',
                    roles: $scope.roles,
                    my_roles: $scope.my_roles,
                    user: my_user
                }
            }).then(function(modal) {
                modal.element.modal();
                modal.close.then(function(result) {
                    if (result === 'Yes') {
                        if (my_user.role_id !== $scope.my_roles.selectedOption.id) {
                            $data = {
                                '_token': myToken,
                                'user_id': my_user.id,
                                'role_id': $scope.my_roles.selectedOption.id,
                                'old_role': my_user.role_id
                            };
                            $http.post('/api/change_role', $data).success(function(data, status, headers, config) {
                                        var message = data['message'];
                                        my_user.role = $scope.my_roles.selectedOption.name;
                                        $scope.showUserManagementSuccess = true;
                                        setTimeout(function() {
                                            $scope.$apply(function() {
                                                $scope.showUserManagementSuccess = false;
                                            });
                                        }, 1000);
                                    }).error(function(data, status, headers, config) {}) ;
                        }
                    }
                });
            });

        };

        /*End of Change Role*/

        /*Account Info*/
        $scope.infoAccount = function (my_user) {

            $data = {
                '_token': myToken,
                'user': $scope.user,
                'user_id': my_user.id

            };

            ModalService.showModal({
                templateUrl: 'modalAccountInfo2.html',
                controller: "ModalUserManagementController",
                inputs: {
                    title: 'my title',
                    roles: $scope.roles,
                    my_roles: $scope.my_roles,
                    user: my_user
                }
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {
                });
            });

        };
        /*End of Account Info*/



        /*Change Active*/
        $active = 0;
        $scope.changeActive = function(my_user) {

            if (my_user.role_id === '1') {
                return;
            }
            $active = (my_user.active == 1) ? 0 : 1;


            $data = {
                '_token': myToken,
                'user': $scope.user,
                'user_id': my_user.id,
                'active': $active,
                 user: my_user
            };

            ModalService.showModal({
                templateUrl: 'userManagement2.html',
                controller: "ModalUserManagementController",
                inputs: {
                    title: 'my title',
                    roles: $scope.roles,
                    my_roles: $scope.my_roles,
                    user: my_user
                }
            }).then(function(modal) {
                modal.element.modal();
                modal.close.then(function(result) {
                    if (result === 'Yes') {
                        $http.post('/api/active_account', $data).success(function(data, status, headers, config) {
                                    var user = data['user'];
                                    my_user.active = '' + $active;
                                    $scope.account_name = my_user.last_name + ', ' + my_user.first_name + ' ' + my_user.middle_name;
                                    $scope.showUserManagementSuccess = true;
                                    my_user.active = $active;
                                    setTimeout(function() {
                                        $scope.$apply(function() {
                                            $scope.showUserManagementSuccess = false;
                                        });
                                    }, 1000);
                                }).error(function(data, status, headers, config) {}); 
                    }
                });
            });
        };
        /*End of Change Active*/


}]);





