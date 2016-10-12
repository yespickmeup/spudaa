







settingsApp.controller('idCardReleasingController', ['$scope', '$http', 'ModalService', function ($scope, $http, ModalService) {

        $scope.print = function () {
            var innerContents = document.getElementById('mySelector').innerHTML;
            var popupWinindow = window.open('', '_blank', 'width=1000,height=600,scrollbars=no,menubar=no,toolbar=no,location=no,status=no,titlebar=no');
            popupWinindow.document.open();
            popupWinindow.document.write('<html><head><link rel="stylesheet" type="text/css" href="style.css" /></head><body onload="window.print()">' + innerContents + '</html>');
            popupWinindow.document.close();

        };

    }]);

settingsApp.controller('ModalAccountApprovallController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});