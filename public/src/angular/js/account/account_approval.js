







/* global myToken */

settingsApp.controller('accountApprovalController', ['$scope', '$http', 'accountApprovalService', 'ModalService', function ($scope, $http, accountApprovalService, ModalService) {


        $scope.users = [];
        $scope.itemsUsers = 20;
        $scope.account_name = '';
        $scope.showAccountApprovedSuccess = false;

        accountApprovalService.getUsers().then(function (resp) {
            var majors = JSON.stringify(resp.data['users']);
            $.each(JSON.parse(majors), function (idx, obj) {
/*                console.log('user: '+JSON.stringify(obj));*/
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
                data.student_no = obj.student_no;
                data.civil_status =obj.civil_status;
                data.gender = obj.gender;
                data.date_of_birth =obj.date_of_birth;
                data.home_address = obj.home_address;
                data.level = obj.level;
                data.year = obj.year;
                data.course = obj.course;
                var ext = obj.image;
                if(ext==''){
                    ext = 'user2-160x160.jpg';
                }

                data.image =photo+'/'+ext;

                /*console.log('data.image: '+data.image);*/
               /* console.log('data.name: '+data.name+ ' = '+'activated: '+data.status);*/
                $scope.users.push(data);

            });
        });

        $scope.approveAccount = function (my_user) {
           /*  console.log('my_user.image: '+my_user.image);*/
            $data = {
                '_token': myToken,
                'user': $scope.user,
                'user_id': my_user.id
            };

            ModalService.showModal({
                templateUrl: 'modalApprove2.html',
                controller: "ModalAccountApprovallController2",
                inputs: {
                    title: 'my title',
                    user : my_user
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
                                   /* console.log('user: ' + JSON.stringify(user));*/
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
           
            $data = {
                '_token': myToken,
                'user': $scope.user,
                'user_id': my_user.id

            };

            ModalService.showModal({
                templateUrl: 'modalActivate.html',
                controller: "ModalAccountApprovallController2",
                inputs: {
                    title: 'my title',
                    user : my_user
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
        $scope.infoAccount = function (my_user) {

            $data = {
                '_token': myToken,
                'user': $scope.user,
                'user_id': my_user.id

            };

            ModalService.showModal({
                templateUrl: 'modalAccountInfo.html',
                controller: "ModalAccountApprovallController2",
                inputs: {
                    title: 'my title',
                    user : my_user
                }
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {
                });
            });

        };
    }]);

settingsApp.controller('ModalAccountApprovallController2', function ($scope,close, title,user) {
    $scope.title = title;
    $scope.user = user;

    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});
