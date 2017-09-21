
/* global myToken, Upload */

settingsApp.controller('accountBackgroundController', ['$scope', '$http', 'ModalService', 'courseService', 'userManagementService', '$filter', 'Upload', '$timeout','usSpinnerService','$rootScope', function($scope, $http, ModalService, courseService, userManagementService, $filter, Upload, $timeout,usSpinnerService,$rootScope) {

        $scope.startcounter = 0;
        $scope.startSpin = function () {

            if (!$scope.spinneractive) {
                usSpinnerService.spin('spinner-1');
                $scope.startcounter++;
            }
        };

        $scope.stopSpin = function () {

            if ($scope.spinneractive) {
                usSpinnerService.stop('spinner-1');
            }
        };
        $scope.spinneractive = false;

        $rootScope.$on('us-spinner:spin', function (event, key) {
            $scope.spinneractive = true;
        });

        $rootScope.$on('us-spinner:stop', function (event, key) {
            $scope.spinneractive = false;
        });

        $scope.showUpdateAccountSuccess = false;
        $http.get('../src/json/countries.json').success(function(data) {
            $scope.country = {
                availableOptions: data,
                selectedOption: {"name": "Philippines", "code": "PH"}
            };

        });

        $scope.countryOnChange = function(country) {
            if (country.name !== 'Philippines') {
                $scope.province = {
                    availableOptions: [],
                    selectedOption: {}
                };
            } else {
                $scope.province = {
                    availableOptions: $scope.cacheProvinces,
                    selectedOption: {"name": "Negros Oriental", "region": "VII", "key": "NER"}
                };
            }
        };

        $scope.cacheProvinces = [];
        $http.get('../src/json/provinces.json').success(function(data) {
            $scope.cacheProvinces = data;
            $scope.province = {
                availableOptions: data,
                selectedOption: {"name": "Negros Oriental", "region": "VII", "key": "NER"}
            };
        });


        $scope.provinceOnChange = function(province) {

        };
        $scope.cacheCities = [];
        $http.get('../src/json/cities.json').success(function(data) {
            $scope.cacheCities = data;
            $.each(data, function(idx, obj) {
                if (obj.city) {
                    obj.name = obj.name + ' City';
                }
            });
            $scope.city = {
                availableOptions: data,
                selectedOption: {"name": "Dumaguete City", "province": "NER", "city": true}
            };
        });

        $scope.level = {
            availableOptions: [],
            selectedOption: {id: 0, level: ''}
        };

        courseService.getLevels().then(function(resp) {
            var levels = JSON.stringify(resp.data['levels']);
            $.each(JSON.parse(levels), function(idx, obj) {
                var data = {};
                data.id = obj.id;
                data.level = obj.level;
                $scope.level.availableOptions.push(data);
            });
        });
        $scope.year = {
            availableOptions: [],
            selectedOption: {id: 0, year: ''}
        };
        courseService.getYears().then(function(resp) {
            var years = JSON.stringify(resp.data['years']);
            /*console.log('years: ' + years);*/
            $.each(JSON.parse(years), function(idx, obj) {
                var data = {};
                data.id = obj.id;
                data.year = obj.year;
                $scope.year.availableOptions.push(data);
            });
        });
        $scope.course = {
            availableOptions: [],
            selectedOption: {id: 0, course: ''}
        };
        courseService.getCourses().then(function(resp) {
            var courses = JSON.stringify(resp.data['courses']);
            $.each(JSON.parse(courses), function(idx, obj) {
                var data = {};
                data.id = obj.id;
                data.course = obj.course;
                $scope.course.availableOptions.push(data);
            });
        });
        $scope.major = {
            availableOptions: [],
            selectedOption: {id: 0, major: ''}
        };
        courseService.getMajors().then(function(resp) {
            var majors = JSON.stringify(resp.data['majors']);
            $.each(JSON.parse(majors), function(idx, obj) {
                var data = {};
                data.id = obj.id;
                data.major = obj.major;
                $scope.major.availableOptions.push(data);
            });
        });


        userManagementService.getUser($scope.my_id).then(function(resp) {
            var user = resp.data['user'];
            $scope.user.alumni_no = '0000000000' + user.id;
            $scope.user.student_no = user.student_no;
            $scope.user.first_name = user.first_name;
            $scope.user.middle_name = user.middle_name;
            $scope.user.last_name = user.last_name;
            $scope.user.suffix_name = user.suffix_name;
            $scope.user.civil_status = user.civil_status;
            $scope.user.gender = user.gender;
            $scope.user.date_of_birth = $filter('date')(user.date_of_birth, "MM/dd/yyyy");
            $scope.user.blood_type = user.blood_type;
            $scope.user.zip_code = user.zip_code;
            $scope.user.home_address = user.home_address;
            $scope.user.present_address = user.present_address;
            $scope.user.landline_no = user.landline_no;
            $scope.user.cellphone_no = user.cellphone_no;
            $scope.user.father = user.father;
            $scope.user.father_occupation = user.father_occupation;
            $scope.user.father_office_address = user.father_office_address;
            $scope.user.mother = user.mother;
            $scope.user.mother_occupation = user.mother_occupation;
            $scope.user.mother_office_address = user.mother_office_address;
            $scope.user.image = user.image;


            $scope.mother_is_paulinian = false;

            $scope.father_is_paulinian = user.father_is_paulinian === '1' ? true : false;




            if (user.mother_is_paulinian === '1') {
                angular.element('#mother_is_paulinian').prop("checked", 0);
            }

            $scope.country.selectedOption = {"name": user.country, "code": ""};
            $scope.province.selectedOption = {"name": user.province, "region": "", "key": ""};
            $scope.city.selectedOption = {"name": user.city, "province": "", "city": false};

            $scope.level.selectedOption = {id: 0, level: user.level};
            $scope.year.selectedOption = {id: 0, year: user.year};
            $scope.course.selectedOption = {id: 0, course: user.course};
            $scope.major.selectedOption = {id: 0, major: user.major};
        });

        $scope.uploadComplete = false;
        $scope.fileNameChaged = function(element) {

            $scope.photoFile1 = element.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                $scope.$apply(function() {
                    $scope.$parent.user.imageSource = e.target.result;

                    uploadImage($scope.my_id,$scope.photoFile1);
                });
            };
            reader.readAsDataURL(element.files[0]);
        };
        function uploadImage(filename,photoFile1) {
            $scope.photoFile2 = photoFile1;
            $scope.startSpin();
            var extention = $scope.photoFile2.name.split('.').pop();   
            extention = $scope.my_id+ '.'+extention;
            
            if ($scope.photoFile2) {
                $scope.photoFile2.upload = Upload.upload({
                    url: '/fileUpload2',
                    data: {
                        _token: myToken,
                        file: $scope.photoFile2,
                        filename: filename
                    }
                });


                $scope.photoFile2.upload.then(function(response) {

                    $scope.uploadComplete = true;
                    setTimeout(function() {
                        $scope.$apply(function() {

                            $scope.uploadComplete = false;
                            $http.post('/api/account/updateImage', $data)
                                .success(function(data, status, headers, config) {

                                    var all = data['all'];
                                    var user = data['user'];
                                    console.log('Photo Updated!');
                                    $scope.showUpdateAccountSuccess = true;
                                    $scope.photoFile = photoFile1;
                                    $scope.photoFile.result = response.data;
                                    alert('Successfully Updated!');
                                    $scope.stopSpin();
                                    setTimeout(function() {
                                        $scope.$apply(function() {
                                            $scope.showUpdateAccountSuccess = false;
                                            
                                        });
                                    }, 500);

/*                                    $scope.spinner.off();*/
                            })
                            .error(function(data, status, headers, config) {
                                console.log('data: ' + data);
                                console.log('status: ' + status);
        //                        $scope.spinner.off();
                            }); 
                        });
                    }, 500);
                   
                    $scope.user.id = $scope.my_id;
                    $scope.user.image = extention;
                    $data = {
                        '_token': myToken,
                        'user': $scope.user,
                        id: $scope.my_id
                    };


                }, function(response) {
                    if (response.status > 0)
                        $scope.errorMsg = response.status + ': ' + response.data;
                }, function(evt) {
                    $scope.photoFile1.progress = Math.min(100, parseInt(100.0 *
                            evt.loaded / evt.total));
                   console.log($scope.photoFile1.progress);
                });
            }
        }

        $scope.updateUser = function(userForm) {

            var email = $('input[name="email"]').val();
            $scope.user.id = $scope.my_id;
            $scope.user.email = email;
            $scope.user.country = $scope.country.selectedOption.name;
            $scope.user.province = $scope.province.selectedOption.name;
            $scope.user.city = $scope.city.selectedOption.name;
            $scope.user.level = $scope.level.selectedOption.level;
            $scope.user.year = $scope.year.selectedOption.year;
            $scope.user.course = $scope.course.selectedOption.course;
            $scope.user.major = $scope.major.selectedOption.major;
            var father_is_paulinian = $('input[name="father_is_paulinian"]:checked').val() ? 1 : 0;
            var mother_is_paulinian = $('input[name="mother_is_paulinian"]:checked').val() ? 1 : 0;
            $scope.user.father_is_paulinian = father_is_paulinian;
            $scope.user.mother_is_paulinian = mother_is_paulinian;
            var _date = $filter('date')(new Date($scope.user.date_of_birth), 'yyyy-MM-dd');
            $scope.user.date_of_birth = _date;
            $data = {
                '_token': myToken,
                'user': $scope.user,
                id: $scope.my_id
            };
            $http.post('/api/account/update', $data)
                    .success(function(data, status, headers, config) {

                        var all = data['all'];
                        var user = data['user'];
//                        console.log('user: ' + JSON.stringify(all));
                        $scope.showUpdateAccountSuccess = true;
                        setTimeout(function() {
                            $scope.$apply(function() {
                                $scope.showUpdateAccountSuccess = false;
                            });
                        }, 2000);
//
//                        $scope.spinner.off();
                    })
                    .error(function(data, status, headers, config) {
                        console.log('data: ' + data);
                        console.log('status: ' + status);
//                        $scope.spinner.off();
                    });

        };

    }]);

settingsApp.controller('ModalAccountApprovallController', function($scope, close) {
    
    $scope.close = function(result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});

