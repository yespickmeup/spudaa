/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


signupApp.controller('schoolActivitiesInvolvementsController', ['$scope', '$http', function ($scope, $http) {


        var activityId = 0;
        $scope.showActivityAdd = true;
        $scope.showActivityUpdate = false;

        $scope.activity_involvements = [];
        $scope.itemsByPage = 5;
        $scope.addActivity = function () {
            var data = {};
            data.id = activityId;
            data.activity = $scope.inputActivity;
            if (data.activity !== '') {
                $scope.activity_involvements.push(data);
                activityId++;
                $scope.inputActivity = '';
            }

        };
        $scope.editInvolvement = function (activity) {
            $scope.activitiesOnEdit = activity;
            $scope.inputActivity = activity.activity;
            $scope.showActivityAdd = false;
            $scope.showActivityUpdate = true;
        };
        $scope.updateActivity = function () {
            if ($scope.inputActivity !== '') {
                $scope.activitiesOnEdit.activity = $scope.inputActivity;
                $scope.inputActivity = '';
                $scope.showActivityAdd = true;
                $scope.showActivityUpdate = false;
            }

        };
        $scope.removeInvolvement = function (row) {
            var index = $scope.activities.indexOf(row);
            if (index !== -1) {
                $scope.activities.splice(index, 1);
            }
        };
    }]);