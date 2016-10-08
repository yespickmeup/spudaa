/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


signupApp.controller('alumniFamilyMemberController', ['$scope', '$http', function ($scope, $http) {


        var memberId = 0;
        $scope.showMemberAdd = true;
        $scope.showMemberUpdate = false;

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


        $scope.itemsByPage2 = 5;

        $scope.clearMember = function () {
            $scope.member.name = '';
            $scope.member.relation = '';
            $scope.member.name_before_married = '';
            $scope.member.email = '';
            $scope.member.contact_number = '';
            $scope.member.address = '';
            $scope.member.occupation = '';
            $scope.member.office_address = '';
            
            $scope.showMemberAdd = true;
            $scope.showMemberUpdate = false;
        };
        $scope.addMember = function () {
          
            var data = {};
            data.id = memberId;
            data.name = $scope.member.name;
            data.relation = $scope.member.relation;
            data.name_before_married = $scope.member.name_before_married;
            data.email = $scope.member.email;
            data.contact_number = $scope.member.contact_number;
            data.address = $scope.member.address;
            data.occupation = $scope.member.occupation;
            data.office_address = $scope.member.office_address;
            if (data.name !== '') {
                $scope.$parent.alumni_family_members.push(data);
                memberId++;
                $scope.member.name = '';
                $scope.member.relation = '';
                $scope.member.name_before_married = '';
                $scope.member.email = '';
                $scope.member.contact_number = '';
                $scope.member.address = '';
                $scope.member.occupation = '';
                $scope.member.office_address = '';
            }

        };

        $scope.editMember = function (member) {
            $scope.memberOnEdit = member;
            $scope.member.name = member.name;
            $scope.member.relation = member.relation;
            $scope.member.name_before_married = member.name_before_married;
            $scope.member.email = member.email;
            $scope.member.contact_number = member.contact_number;
            $scope.member.address = member.address;
            $scope.member.occupation = member.occupation;
            $scope.member.office_address = member.office_address;

            $scope.showMemberAdd = false;
            $scope.showMemberUpdate = true;
        };
        $scope.updateMember = function () {
            if ($scope.member.name !== '') {
                $scope.memberOnEdit.name = $scope.member.name;
                $scope.memberOnEdit.name = $scope.member.name;
                $scope.memberOnEdit.relation = $scope.member.relation;
                $scope.memberOnEdit.name_before_married = $scope.member.name_before_married;
                $scope.memberOnEdit.email = $scope.member.email;
                $scope.memberOnEdit.contact_number = $scope.member.contact_number;
                $scope.memberOnEdit.address = $scope.member.address;
                $scope.memberOnEdit.occupation = $scope.member.occupation;
                $scope.memberOnEdit.office_address = $scope.member.office_address;

                $scope.member.name = '';
                $scope.member.relation = '';
                $scope.member.name_before_married = '';
                $scope.member.email = '';
                $scope.member.contact_number = '';
                $scope.member.address = '';
                $scope.member.occupation = '';
                $scope.member.office_address = '';

                $scope.showMemberAdd = true;
                $scope.showMemberUpdate = false;
            }

        };
        $scope.removeMember = function (row) {
            var index = $scope.$parent.alumni_family_members.indexOf(row);
            if (index !== -1) {
                $scope.$parent.alumni_family_members.splice(index, 1);
            }
        };


    }]);