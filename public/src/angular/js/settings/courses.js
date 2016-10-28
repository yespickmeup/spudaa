





settingsApp.controller('courseController', ['$scope', '$http', 'courseService', 'ModalService', function ($scope, $http, courseService, ModalService) {

        $scope.courses = [];
        $scope.inputCourse = '';
        $scope.itemsByPage = 10;

        $scope.showAddCourseSuccess = false;
        $scope.showUpdateCourseSuccess = false;
        $scope.showDeleteCourseSuccess = false;
        $scope.showCourseAdd = true;
        $scope.showCourseUpdate = false;

        
        courseService.getCourses().then(function (resp) {
            var courses = JSON.stringify(resp.data['courses']);
            $.each(JSON.parse(courses), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.course = obj.course;
                $scope.courses.push(data);
            });
        });


        $scope.newCourse = function () {
            $scope.inputCourse = '';
            angular.element('#inputCourse').focus();
        };

        $scope.addCourse = function () {
            var data = {};
            data.id = 0;
            data.course = $scope.inputCourse;
            courseService.addCourse($scope.inputCourse).then(function (resp) {
                var message = JSON.stringify(resp.data['course']);
                if (resp.status === 200) {
                    var id = JSON.parse(message).id;
                    data.id = id;
                    $scope.courses.push(data);
                    $scope.inputCourse = '';

                    angular.element('#inputCourse').focus();
                    $scope.showAddCourseSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showAddCourseSuccess = false;
                        });
                    }, 500);
                }
            });


        };

        $scope.editCourse = function (course) {

            $scope.courseOnEdit = course;
            $scope.inputCourse = course.course;
            $scope.showCourseAdd = false;
            $scope.showCourseUpdate = true;
            angular.element('#inputCourse').focus();
        };

        $scope.updateCourse = function () {

            courseService.updateCourse($scope.courseOnEdit.id, $scope.inputCourse).then(function (resp) {
                var message = JSON.stringify(resp.data['message']);

                if (resp.status === 200) {
                    $scope.courseOnEdit.course = $scope.inputCourse;
                    $scope.showCourseAdd = true;
                    $scope.showCourseUpdate = false;
                    $scope.inputCourse = '';
                    angular.element('#inputCourse').focus();
                    $scope.showUpdateCourseSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showUpdateCourseSuccess = false;
                        });
                    }, 500);
                }
            });
        };

        $scope.confirmDeleteCourse = function (course) {

            ModalService.showModal({
                templateUrl: 'modalCourse.html',
                controller: "ModalCourselController"
            }).then(function (modal) {
                modal.element.modal();
                modal.close.then(function (result) {
                    if (result === 'Yes') {
                        courseService.deleteCourse(course.id).then(function (resp) {
                            var message = JSON.stringify(resp.data['message']);
                            if (resp.status === 200) {
                                var index = $scope.courses.indexOf(course);
                                if (index !== -1) {
                                    $scope.courses.splice(index, 1);
                                    angular.element('#inputCourse').focus();
                                }
                                $scope.showDeleteCourseSuccess = true;
                                setTimeout(function () {
                                    $scope.$apply(function () {
                                        $scope.showDeleteCourseSuccess = false;
                                    });
                                }, 500);
                            }
                        });

                    }
                });
            });


        };





    }]);

settingsApp.controller('ModalCourselController', function ($scope, close) {
    $scope.close = function (result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
});