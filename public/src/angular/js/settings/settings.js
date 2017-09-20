



/* global baseURL, myToken, photo, CKEDITOR */

var settingsApp = angular.module('settingsApp', ['angularSpinner', 'smart-table', 'angularModalService', 'ngFileUpload'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});


settingsApp.controller('settingsController', ['$scope', '$http', 'ModalService','userManagementService', function($scope, $http, ModalService,userManagementService) {
        $scope.my_id = angular.element('#my_id').val();
        $scope.defaultImage = photo + '/' + 'user1-128x128.jpg';
        $scope.printName = '';
        $scope.printID = '';
        $scope.printImage = photo + '/' + 'user1-128x128.jpg';
        $scope.imageSourceBanner1 = '../src/AdminLTE/img/home/banner1.jpg';
        $scope.imageSourceBanner2 = '../src/AdminLTE/img/home/banner2.jpg';
        $scope.imageSourceBanner3 = '../src/AdminLTE/img/home/banner3.jpg';
        $scope.htmlEditor = '...';

       


       

        userManagementService.getUser($scope.my_id).then(function (resp) {
            var user = JSON.stringify(resp.data['user']);
            user = JSON.parse(user);
            $scope.user = {
                    alumni_no: '',
                    student_no: '',
                    first_name: '',
                    middle_name: '',
                    last_name: '',
                    suffix_name: '',
                    civil_status: '',
                    gender: '',
                    date_of_birth: '',
                    blood_type: '',
                    email: '',
                    password: '',
                    confirm_password: '',
                    country: '',
                    province: ' ',
                    city: '',
                    zip_code: '',
                    home_address: '',
                    present_address: '',
                    landline_no: '',
                    cellphone_no: '',
                    level: '',
                    year: '',
                    course: '',
                    major: '',
                    father: '',
                    father_is_paulinian: '',
                    father_occupation: '',
                    father_office_address: '',
                    mother: '',
                    mother_is_paulinian: '',
                    mother_occupation: '',
                    mother_office_address: '',
                    imageSource: photo + '/' +user.image
            };

        });
        
        $scope.preference = {
            id: 0,
            school_name: '',
            school_label: '',
            contact_no: '',
            email_address: '',
            address: '',
            about_us: ''
        };

//        console.log('image: '+$scope.user.imageSource);
//        $scope.check = function () {
//
//            console.log('User: ' + $scope.user_id);
//        };


    }]);
/* Start of Service */


settingsApp.service('levelService', function($http) {
    this.getLevels = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/levels'
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
//                    console.log('getlevels() error');
                });
    };

    this.addLevel = function(level) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/level_add',
            data: {
                _token: myToken,
                level: level
            }
        })
                .success(function(data, status, headers, config) {
//                    console.log('add_level() success ');
                })
                .error(function(data, status, headers, config) {
//                    console.log('add_level() error');
                });
    };

    this.updateLevel = function(id, level) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/level_update',
            data: {
                _token: myToken,
                id: id,
                level: level
            }
        })
                .success(function(data, status, headers, config) {
//                    console.log('update_level() success ');
                })
                .error(function(data, status, headers, config) {
//                    console.log('update_level() error');
                });
    };
    this.deleteLevel = function(id) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/level_delete',
            data: {
                _token: myToken,
                id: id
            }
        })
                .success(function(data, status, headers, config) {
//                    console.log('delete_level() success ');
                })
                .error(function(data, status, headers, config) {
//                    console.log('delete_level() error');
                });
    };

});

settingsApp.service('yearService', function($http) {
    this.getYears = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/years'
        })
                .success(function(data, status, headers, config) {
                    /* console.log('getYears() success ');*/
                })
                .error(function(data, status, headers, config) {
                   /* console.log('getYears() error');*/
                });
    };

    this.addYear = function(year) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/year_add',
            data: {
                _token: myToken,
                year: year
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('add_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('add_year() error');
                });
    };

    this.updateYear = function(id, year) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/year_update',
            data: {
                _token: myToken,
                id: id,
                year: year
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('update_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('update_year() error');
                });
    };
    this.deleteYear = function(id) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/year_delete',
            data: {
                _token: myToken,
                id: id
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('delete_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('delete_year() error');
                });
    };

});



settingsApp.service('majorService', function($http) {
    this.getMajors = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/majors'
        })
                .success(function(data, status, headers, config) {
                    /* console.log('getMajors() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getMajors() error');
                });
    };

    this.addMajor = function(major, level_id, year_id, course_id) {

        return $http({
            method: 'POST',
            url: baseURL + '/api/major_add',
            data: {
                _token: myToken,
                major: major,
                level_id: level_id,
                year_id: year_id,
                course_id: course_id
            }
        })
                .success(function(data, status, headers, config) {
                    /*  console.log('add_major() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('add_major() error');
                });
    };

    this.updateMajor = function(id, major) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/major_update',
            data: {
                _token: myToken,
                id: id,
                major: major
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('update_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('update_major() error');
                });
    };
    this.deleteMajor = function(id) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/major_delete',
            data: {
                _token: myToken,
                id: id
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('delete_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('delete_major() error');
                });
    };

});

settingsApp.service('accountApprovalService', function($http) {

    this.getUsers = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/users'
        })
                .success(function(data, status, headers, config) {
                    /* console.log('getMajors() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getMajors() error');
                });
    };
    this.getUsersAll = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/users_all'
        })
                .success(function(data, status, headers, config) {
                    /* console.log('getMajors() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getMajors() error');
                });
    };
    this.getRoles = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/roles'
        })
                .success(function(data, status, headers, config) {
                    /* console.log('getMajors() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getMajors() error');
                });
    };

});

settingsApp.service('userManagementService', function($http) {

    this.getUser = function(user_id) {
        return $http({
            method: 'GET',
            url: baseURL + '/api/user/' + user_id
        })
                .success(function(data, status, headers, config) {
                    /* console.log('getMajors() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getMajors() error');
                });
    };

    this.getUsers = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/users'
        })
                .success(function(data, status, headers, config) {
                    /* console.log('getMajors() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getMajors() error');
                });
    };
    this.getUsersAll = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/users_all'
        })
                .success(function(data, status, headers, config) {
                    /* console.log('getMajors() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getMajors() error');
                });
    };
    this.getRoles = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/roles'
        })
                .success(function(data, status, headers, config) {
                    /* console.log('getMajors() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getMajors() error');
                });
    };

    this.changeRole = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/roles'
        })
                .success(function(data, status, headers, config) {
                    /* console.log('getMajors() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getMajors() error');
                });
    };
});

settingsApp.service('courseService', function($http) {


    this.getLevels = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/levels'
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };


    this.getYears = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/years'
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    /*console.log('getYears() error');*/
                });
    };
    this.getCourses = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/courses'
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getCourses() error');
                });
    };

    this.addCourse = function(course) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/course_add',
            data: {
                _token: myToken,
                course: course
            }
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getCourses() error');
                });
    };
    this.updateCourse = function(id, course) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/course_update',
            data: {
                _token: myToken,
                id: id,
                course: course
            }
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getCourses() error');
                });
    };

    this.deleteCourse = function(id) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/course_delete',
            data: {
                _token: myToken,
                id: id
            }
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getCourses() error');
                });
    };
    this.getMajors = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/majors'
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getMajors() error');
                });
    };

    this.getUserExists = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/user/exists/' + $scope.user.email
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getlevels() error'+data);
                });
    };


});
settingsApp.service('familyMembersService', function($http) {


    this.getMembers = function(user_id) {
        return $http({
            method: 'GET',
            url: baseURL + '/api/family_members/' + user_id
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };


    this.addFamily = function(member) {

        return $http({
            method: 'POST',
            url: baseURL + '/api/add_family_member',
            data: {
                _token: myToken,
                member: member
            }
        })
                .success(function(data, status, headers, config) {
                    /*  console.log('add_major() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('add_major() error');
                });
    };

    this.updateFamily = function(member) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/update_family_member',
            data: {
                _token: myToken,
                member: member
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('update_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('update_major() error');
                });
    };
    this.deleteFamily = function(id) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/delete_family_member',
            data: {
                _token: myToken,
                id: id
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('delete_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('delete_major() error');
                });
    };


});

settingsApp.service('professionalService', function($http) {
    this.getProfessionalServices = function(user_id) {
        return $http({
            method: 'GET',
            url: baseURL + '/api/professional_services/' + user_id
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };
    this.addProService = function(service) {

        return $http({
            method: 'POST',
            url: baseURL + '/api/add_professional_service',
            data: {
                _token: myToken,
                service: service
            }
        })
                .success(function(data, status, headers, config) {
                    /*  console.log('add_major() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('add_major() error');
                });
    };

    this.updateProService = function(service) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/update_professional_service',
            data: {
                _token: myToken,
                service: service
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('update_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('update_major() error');
                });
    };
    this.deleteProService = function(id) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/delete_professional_service',
            data: {
                _token: myToken,
                id: id
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('delete_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('delete_major() error');
                });
    };


});

settingsApp.service('personalService', function($http) {
    this.getPersonalServices = function(user_id) {
        return $http({
            method: 'GET',
            url: baseURL + '/api/personal_services/' + user_id
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };
    this.addPerService = function(service) {

        return $http({
            method: 'POST',
            url: baseURL + '/api/add_personal_service',
            data: {
                _token: myToken,
                service: service
            }
        })
                .success(function(data, status, headers, config) {
                    /*  console.log('add_major() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('add_major() error');
                });
    };

    this.updatePerService = function(service) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/update_personal_service',
            data: {
                _token: myToken,
                service: service
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('update_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('update_major() error');
                });
    };
    this.deletePerService = function(id) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/delete_personal_service',
            data: {
                _token: myToken,
                id: id
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('delete_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('delete_major() error');
                });
    };


});

settingsApp.service('accountSurveyService', function($http) {
    this.getEmploymentSurvey = function(user_id) {
        return $http({
            method: 'GET',
            url: baseURL + '/api/employment_surveys/' + user_id
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };

    this.getOutcomeExperiences = function(user_id) {
        return $http({
            method: 'GET',
            url: baseURL + '/api/outcome_experiences/' + user_id
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };
    this.getOutcomeStandards = function(user_id) {
        return $http({
            method: 'GET',
            url: baseURL + '/api/outcome_standards/' + user_id
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };
    this.getSatiscationSurveys = function(user_id) {
        return $http({
            method: 'GET',
            url: baseURL + '/api/satisfication_surveys/' + user_id
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };
    this.updateEmploymentSurvey = function(survey) {
//         console.log(survey);
        return $http({
            method: 'POST',
            url: baseURL + '/api/update_employment_survey',
            data: {
                _token: myToken,
                survey: survey
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('update_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('update_major() error');
                });
    };
    this.updateEducationalOutcomes = function(education_outcome_experiences, education_outcome_standards, user_id) {
//         console.log(survey);
        return $http({
            method: 'POST',
            url: baseURL + '/api/update_educational_outcomes',
            data: {
                _token: myToken,
                user_id: user_id,
                education_outcome_experiences: education_outcome_experiences,
                education_outcome_standards: education_outcome_standards
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('update_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('update_major() error');
                });
    };
    this.updateSatisfaction = function(satisfaction_survey, user_id) {

        return $http({
            method: 'POST',
            url: baseURL + '/api/update_satisfaction',
            data: {
                _token: myToken,
                user_id: user_id,
                satisfaction_survey: satisfaction_survey

            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('update_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('update_major() error');
                });
    };
});

settingsApp.service('preferenceService', function($http) {
    this.getPreference = function() {
        return $http({
            method: 'GET',
            url: baseURL + '/api/preferences'
        })
                .success(function(data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };
    this.updatePreference = function(preference) {

        return $http({
            method: 'POST',
            url: baseURL + '/api/update_preference',
            data: {
                _token: myToken,
                preference: preference
            }
        })
                .success(function(data, status, headers, config) {
                    /* console.log('update_year() success ');*/
                })
                .error(function(data, status, headers, config) {
                    console.log('update_major() error');
                });
    };



});

settingsApp.directive('ckEditor', function() {
    return {
        require: '?ngModel',
        link: function($scope, elm, attr, ngModel) {

            var ck = CKEDITOR.replace(elm[0]);

            ck.on('instanceReady', function() {
                ck.setData(ngModel.$viewValue);
            });

            ck.on('pasteState', function() {
                $scope.$apply(function() {
                    ngModel.$setViewValue(ck.getData());
                });
            });

            ngModel.$render = function(value) {
                ck.setData(ngModel.$modelValue);
            };
        }
    };
});

settingsApp.filter('trustAsHtml', function($sce) {
    return function(html) {
        return $sce.trustAsHtml(html);
    };
});
