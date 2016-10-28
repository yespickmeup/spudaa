







/* global photo */

settingsApp.controller('idCardReleasingController', ['$scope', '$http', 'ModalService', 'accountApprovalService', function ($scope, $http, ModalService, accountApprovalService) {


        $scope.print = function () {
            var innerContents = document.getElementById('mySelector').innerHTML;
            var popupWinindow = window.open('', '_blank', 'width=1000,height=900,scrollbars=no,menubar=no,toolbar=no,location=no,status=no,titlebar=no');
            popupWinindow.document.open();
            popupWinindow.document.write('<html><head><link rel="stylesheet" type="text/css" href="../src/angular/css/printPreview.css" /></head>\n\
            <body onload="window.print()">' + innerContents + '</body></html>');

            popupWinindow.document.close();

        };
        $scope.users = [];

        $scope.itemsUsers = 20;

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


    }]);


settingsApp.controller('idCardReleasingController2', ['$scope', '$http', 'ModalService', 'accountApprovalService', function ($scope, $http, ModalService, accountApprovalService) {

        $scope.print = function () {
            var innerContents = document.getElementById('mySelector').innerHTML;
            var popupWinindow = window.open('', '_blank', 'width=1000,height=900,scrollbars=no,menubar=no,toolbar=no,location=no,status=no,titlebar=no');
            popupWinindow.document.open();
            popupWinindow.document.write('<html><head><link rel="stylesheet" type="text/css" href="../src/angular/css/printPreview.css" /></head>\n\
            <body onload="window.print()">' + innerContents + '</body></html>');

            popupWinindow.document.close();

        };
        $scope.users = [];

        $scope.itemsUsers = 20;
        $scope.imageSource = '';
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
        $scope.view = function (user) {
            
            $scope.$parent.printName = user.first_name + ' ' + user.middle_name + ' ' + user.last_name;
            $scope.$parent.printID = '0000000000000' + user.id;
            $scope.$parent.printImage = photo + '/' + user.id + '.jpg';
           

        };

    }]);


settingsApp.controller('ModalAccountApprovallController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});
