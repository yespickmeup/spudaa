





/* global CKEDITOR */

settingsApp.controller('preferenceController', ['$scope', '$http', 'preferenceService', 'ModalService', 'Upload', function ($scope, $http, preferenceService, ModalService, Upload) {


        $scope.showUpdatPreferenceSuccess = false;



        preferenceService.getPreference().then(function (resp) {
            var preference = JSON.parse(resp.data['preference']);
            $scope.$parent.preference.id = preference[0].id;
            $scope.$parent.preference.school_name = preference[0].school_name;
            $scope.$parent.preference.school_label = preference[0].school_label;
            $scope.$parent.preference.contact_no = preference[0].contact_no;
            $scope.$parent.preference.email_address = preference[0].email_address;
            $scope.$parent.preference.address = preference[0].address;
            $scope.$parent.preference.about_us = preference[0].about_us;


        });

        $scope.updatePreference = function () {
            var data = CKEDITOR.instances.editor1.getData();
            $scope.$parent.preference.about_us = data;

            preferenceService.updatePreference($scope.$parent.preference).then(function (resp) {
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

        $scope.uploadBanner = false;
        $scope.fileNameChaged = function (element, filename) {

            $scope.photoFile = element.files[0];
            var reader = new FileReader();
            reader.onload = function (e) {
                $scope.$apply(function () {
                    if (filename === 'banner1.jpg') {
                        $scope.$parent.imageSourceBanner1 = e.target.result;
                    }
                    if (filename === 'banner2.jpg') {
                        $scope.$parent.imageSourceBanner2 = e.target.result;
                    }
                    if (filename === 'banner3.jpg') {
                        $scope.$parent.imageSourceBanner3 = e.target.result;
                    }

                    uploadImage(filename);
                });
            };
            reader.readAsDataURL(element.files[0]);
        };
        function uploadImage(filename) {
            if ($scope.photoFile) {
                $scope.photoFile.upload = Upload.upload({
                    url: '/fileUpload3',
                    data: {
                        _token: myToken,
                        file: $scope.photoFile,
                        filename: filename
                    }
                });
                $scope.photoFile.upload.then(function (response) {

                    $scope.uploadBanner = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.photoFile.result = response.data;
                            $scope.uploadBanner = false;
                        });
                    }, 1000);

                }, function (response) {
                    if (response.status > 0)
                        $scope.errorMsg = response.status + ': ' + response.data;
                }, function (evt) {
                    $scope.photoFile.progress = Math.min(100, parseInt(100.0 *
                            evt.loaded / evt.total));
//                    console.log($scope.photoFile.progress);
                });
            }
        }



    }]);

settingsApp.controller('ModalPreferenceController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});