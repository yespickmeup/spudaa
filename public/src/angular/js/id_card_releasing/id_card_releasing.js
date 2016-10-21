







settingsApp.controller('idCardReleasingController', ['$scope', '$http', 'ModalService', function ($scope, $http, ModalService) {

        $scope.print = function () {
            var innerContents = document.getElementById('mySelector').innerHTML;
            var popupWinindow = window.open('', '_blank', 'width=1000,height=900,scrollbars=no,menubar=no,toolbar=no,location=no,status=no,titlebar=no');
            popupWinindow.document.open();
            popupWinindow.document.write('<html><head><link rel="stylesheet" type="text/css" href="../src/angular/css/printPreview.css" /></head>\n\
            <body onload="window.print()">' + innerContents + '</body></html>');

            popupWinindow.document.close();


        };
        $scope.options = {
            width: 1.5,
            height: 25,
            quite: 10,
            displayValue: true,
            font: "monospace",
            textAlign: "center",
            fontSize: 12,
            backgroundColor: "",
            lineColor: "#000"
        };
        
        $scope.items = [{
                'name': 'Item 1'
            }, {
                'name': 'Item 2'
            }, {
                'name': 'Account 3'
            }, {
                'name': 'Account 4'
            }, {
                'name': 'Item 5'
            }, {
                'name': 'Item 6'
            }, {
                'name': 'User 7'
            }, {
                'name': 'User 8'
            }, {
                'name': 'Item 9'
            }, {
                'name': 'Item 10'
            }, {
                'name': 'Item 11'
            }, {
                'name': 'Item 12'
            }, {
                'name': 'Item 13'
            }, {
                'name': 'Item 14'
            }, {
                'name': 'User 15'
            }, {
                'name': 'User 16'
            }, {
                'name': 'Person 17'
            }, {
                'name': 'Person 18'
            }, {
                'name': 'Person 19'
            }, {
                'name': 'Item 20'
            }];
    }]);




settingsApp.controller('ModalAccountApprovallController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});
