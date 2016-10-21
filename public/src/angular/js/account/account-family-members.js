





settingsApp.controller('familyMembersController', ['$scope', '$http', 'familyMembersService', 'ModalService', function ($scope, $http, familyMembersService, ModalService) {

        $scope.familys = [];
        $scope.inputFamily = '';
        $scope.itemsByPage = 5;

        $scope.showAddFamilySuccess = false;
        $scope.showUpdateFamilySuccess = false;
        $scope.showDeleteFamilySuccess = false;
        $scope.showFamilyAdd = true;
        $scope.showFamilyUpdate = false;

        $scope.member = {
            name: '',
            relation: '',
            name_before_married: '',
            email: '',
            contact_number: '',
            address: '',
            occupation: '',
            office_address: ''
        };

        familyMembersService.getMembers($scope.my_id).then(function (resp) {
            var members = JSON.stringify(resp.data['members']);
            $.each(JSON.parse(members), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.name = obj.name;
                data.relation = obj.relation;
                data.name_before_married = obj.name_before_married;
                data.email = obj.email;
                data.contact_number = obj.contact_number;
                data.address = obj.address;
                data.occupation = obj.occupation;
                data.office_address = obj.office_address;
                $scope.familys.push(data);
            });
        });


        $scope.clearFamily = function () {
            $scope.member = {
                id: 0,
                user_id: $scope.my_id,
                name: '',
                relation: '',
                name_before_married: '',
                email: '',
                contact_number: '',
                address: '',
                occupation: '',
                office_address: ''
            };
            angular.element('#inputFamilyName').focus();
        };
//
        $scope.addFamily = function () {

            $scope.data = {
                id: 0,
                user_id: $scope.my_id,
                name: $scope.member.name,
                relation: $scope.member.relation,
                name_before_married: $scope.member.name_before_married,
                email: $scope.member.email,
                contact_number: $scope.member.contact_number,
                address: $scope.member.address,
                occupation: $scope.member.occupation,
                office_address: $scope.member.office_address
            };


            familyMembersService.addFamily($scope.data).then(function (resp) {
                var message = JSON.stringify(resp.data['member']);
                if (resp.status === 200) {
                    var id = JSON.parse(message).id;
                    $scope.data.id = id;
                    $scope.familys.push($scope.data);
                    $scope.clearFamily();
                    $scope.showAddFamilySuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showAddFamilySuccess = false;
                        });
                    }, 500);
                }
            });


        };
//
        $scope.editFamily = function (member) {

            $scope.familyOnEdit = member;
            $scope.member.name = member.name;
            $scope.member.relation = member.relation;
            $scope.member.name_before_married = member.name_before_married;
            $scope.member.email = member.email;
            $scope.member.contact_number = member.contact_number;
            $scope.member.address = member.address;
            $scope.member.occupation = member.occupation;
            $scope.member.office_address = member.office_address;


            $scope.showFamilyAdd = false;
            $scope.showFamilyUpdate = true;
            angular.element('#inputFamilyName').focus();
        };
//
        $scope.updateFamily = function () {

            $scope.memberEdit = {
                id: $scope.familyOnEdit.id,
                name: $scope.member.name,
                relation: $scope.member.relation,
                name_before_married: $scope.member.name_before_married,
                email: $scope.member.email,
                contact_number: $scope.member.contact_number,
                address: $scope.member.address,
                occupation: $scope.member.occupation,
                office_address: $scope.member.office_address
            };
            familyMembersService.updateFamily($scope.memberEdit).then(function (resp) {
                var message = JSON.stringify(resp.data['message']);

                if (resp.status === 200) {

                    $scope.familyOnEdit.name = $scope.member.name;
                    $scope.familyOnEdit.relation = $scope.member.relation;
                    $scope.familyOnEdit.name_before_married = $scope.member.name_before_married;
                    $scope.familyOnEdit.email = $scope.member.email;
                    $scope.familyOnEdit.contact_number = $scope.member.contact_number;
                    $scope.familyOnEdit.address = $scope.member.address;
                    $scope.familyOnEdit.occupation = $scope.member.occupation;
                    $scope.familyOnEdit.office_address = $scope.member.office_address;

                    $scope.showFamilyAdd = true;
                    $scope.showFamilyUpdate = false;
                    $scope.clearFamily();
                    $scope.showUpdateFamilySuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showUpdateFamilySuccess = false;
                        });
                    }, 500);
                }
            });
        };
//
        $scope.confirmDeleteFamily = function (member) {

            ModalService.showModal({
                templateUrl: 'modalFamily.html',
                controller: "ModalFamilyMemberslController"
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {
                    if (result === 'Yes') {
                        familyMembersService.deleteFamily(member.id).then(function (resp) {
                            var message = JSON.stringify(resp.data['message']);
                            if (resp.status === 200) {
                                var index = $scope.familys.indexOf(member);
                                if (index !== -1) {
                                    $scope.familys.splice(index, 1);
                                    $scope.clearFamily();
                                }
                                $scope.showDeleteFamilySuccess = true;
                                setTimeout(function () {
                                    $scope.$apply(function () {
                                        $scope.showDeleteFamilySuccess = false;
                                    });
                                }, 500);
                            }
                        });

                    }
                });
            });


        };





    }]);

settingsApp.controller('ModalFamilyMemberslController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});