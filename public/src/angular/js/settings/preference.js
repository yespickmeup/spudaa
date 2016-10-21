





settingsApp.controller('preferenceController', ['$scope', '$http', 'preferenceService', 'ModalService', function ($scope, $http, preferenceService, ModalService) {


        $scope.showUpdatPreferenceSuccess = false;
        $scope.preference = {
            id: 0,
            school_name: '',
            school_label: '',
            contact_no: '',
            email_address: '',
            address: '',
            about_us: ''
        };
        preferenceService.getPreference().then(function (resp) {
            var preference = JSON.parse(resp.data['preference']);
            $scope.preference.id = preference[0].id;
            $scope.preference.school_name = preference[0].school_name;
            $scope.preference.school_label = preference[0].school_label;
            $scope.preference.contact_no = preference[0].contact_no;
            $scope.preference.email_address = preference[0].email_address;
            $scope.preference.address = preference[0].address;
            $scope.preference.about_us = preference[0].about_us;


        });

        $scope.updatePreference = function () {
            preferenceService.updatePreference($scope.preference).then(function (resp) {
                var message = JSON.stringify(resp.data['message']);
                if (resp.status === 200) {
                    $scope.showUpdatPreferenceSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showUpdatPreferenceSuccess = false;
                        });
                    }, 500);
                }
            });
        };





    }]);

settingsApp.controller('ModalPreferenceController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});