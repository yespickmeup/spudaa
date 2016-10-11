



/* global baseURL, myToken */

var settingsApp = angular.module('settingsApp', ['angularSpinner', 'smart-table', 'angularModalService'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});



/* Start of Service */


settingsApp.service('levelService', function ($http) {
    this.getLevels = function () {
        return $http({
            method: 'GET',
            url: baseURL + '/api/levels'
        })
                .success(function (data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function (data, status, headers, config) {
//                    console.log('getlevels() error');
                });
    };

    this.addLevel = function (level) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/level_add',
            data: {
                _token: myToken,
                level: level
            }
        })
                .success(function (data, status, headers, config) {
//                    console.log('add_level() success ');
                })
                .error(function (data, status, headers, config) {
//                    console.log('add_level() error');
                });
    };

    this.updateLevel = function (id, level) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/level_update',
            data: {
                _token: myToken,
                id: id,
                level: level
            }
        })
                .success(function (data, status, headers, config) {
//                    console.log('update_level() success ');
                })
                .error(function (data, status, headers, config) {
//                    console.log('update_level() error');
                });
    };
    this.deleteLevel = function (id) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/level_delete',
            data: {
                _token: myToken,
                id: id
            }
        })
                .success(function (data, status, headers, config) {
//                    console.log('delete_level() success ');
                })
                .error(function (data, status, headers, config) {
//                    console.log('delete_level() error');
                });
    };

});

settingsApp.service('yearService', function ($http) {
    this.getYears = function () {
        return $http({
            method: 'GET',
            url: baseURL + '/api/years'
        })
                .success(function (data, status, headers, config) {
                    /* console.log('getYears() success ');*/
                })
                .error(function (data, status, headers, config) {
                    console.log('getYears() error');
                });
    };

    this.addYear = function (year) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/year_add',
            data: {
                _token: myToken,
                year: year
            }
        })
                .success(function (data, status, headers, config) {
                    /* console.log('add_year() success ');*/
                })
                .error(function (data, status, headers, config) {
                    console.log('add_year() error');
                });
    };

    this.updateYear = function (id, year) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/year_update',
            data: {
                _token: myToken,
                id: id,
                year: year
            }
        })
                .success(function (data, status, headers, config) {
                    /* console.log('update_year() success ');*/
                })
                .error(function (data, status, headers, config) {
                    console.log('update_year() error');
                });
    };
    this.deleteYear = function (id) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/year_delete',
            data: {
                _token: myToken,
                id: id
            }
        })
                .success(function (data, status, headers, config) {
                    /* console.log('delete_year() success ');*/
                })
                .error(function (data, status, headers, config) {
                    console.log('delete_year() error');
                });
    };

});

settingsApp.service('courseService', function ($http) {
    this.getCourses = function () {
        return $http({
            method: 'GET',
            url: baseURL + '/api/courses'
        })
                .success(function (data, status, headers, config) {
                    /* console.log('getYears() success ');*/
                })
                .error(function (data, status, headers, config) {
//                    console.log('getYears() error');
                });
    };

    this.addCourse = function (course) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/course_add',
            data: {
                _token: myToken,
                course: course
            }
        })
                .success(function (data, status, headers, config) {
                    /* console.log('add_year() success ');*/
                })
                .error(function (data, status, headers, config) {
//                    console.log('add_year() error');
                });
    };

    this.updateCourse = function (id, course) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/course_update',
            data: {
                _token: myToken,
                id: id,
                course: course
            }
        })
                .success(function (data, status, headers, config) {
                    /* console.log('update_year() success ');*/
                })
                .error(function (data, status, headers, config) {
                    console.log('update_year() error');
                });
    };
    this.deleteCourse = function (id) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/course_delete',
            data: {
                _token: myToken,
                id: id
            }
        })
                .success(function (data, status, headers, config) {
                    /* console.log('delete_year() success ');*/
                })
                .error(function (data, status, headers, config) {
//                    console.log('delete_year() error');
                });
    };

});

settingsApp.service('majorService', function ($http) {
    this.getMajors = function () {
        return $http({
            method: 'GET',
            url: baseURL + '/api/majors'
        })
            .success(function (data, status, headers, config) {
                /* console.log('getMajors() success ');*/
            })
            .error(function (data, status, headers, config) {
                console.log('getMajors() error');
            });
    };

    this.addMajor = function (major, level_id, year_id,course_id) {

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
            .success(function (data, status, headers, config) {
                /*  console.log('add_major() success ');*/
            })
            .error(function (data, status, headers, config) {
                console.log('add_major() error');
            });
    };

    this.updateMajor = function (id, major) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/major_update',
            data: {
                _token: myToken,
                id: id,
                major: major
            }
        })
            .success(function (data, status, headers, config) {
                /* console.log('update_year() success ');*/
            })
            .error(function (data, status, headers, config) {
                console.log('update_major() error');
            });
    };
    this.deleteMajor = function (id) {
        return $http({
            method: 'POST',
            url: baseURL + '/api/major_delete',
            data: {
                _token: myToken,
                id: id
            }
        })
            .success(function (data, status, headers, config) {
                /* console.log('delete_year() success ');*/
            })
            .error(function (data, status, headers, config) {
                console.log('delete_major() error');
            });
    };

});