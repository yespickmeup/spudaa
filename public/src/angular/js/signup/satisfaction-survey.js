signupApp.controller('satisfactionSurveyController', ['$scope', '$http', function ($scope, $http) {


        $scope.uncheck = function (event) {
            console.log('asdadad');
            if ($scope.checked === event.target.value)
                $scope.checked === false;
        };


        $scope.checkA = function () {
            var a1 = $('input[name="a1"]:checked').val() ? $('input[name="a1"]:checked').val() : 0;
            var a2 = $('input[name="a2"]:checked').val() ? $('input[name="a2"]:checked').val() : 0;
            var a3 = $('input[name="a3"]:checked').val() ? $('input[name="a3"]:checked').val() : 0;
            var a4 = $('input[name="a4"]:checked').val() ? $('input[name="a4"]:checked').val() : 0;
            var a5 = $('input[name="a5"]:checked').val() ? $('input[name="a5"]:checked').val() : 0;
            var a6 = $('input[name="a6"]:checked').val() ? $('input[name="a6"]:checked').val() : 0;
            var a7 = $('input[name="a7"]:checked').val() ? $('input[name="a7"]:checked').val() : 0;
            var a8 = $('input[name="a8"]:checked').val() ? $('input[name="a8"]:checked').val() : 0;
            var satisfaction_survey = {
                a1: a1,
                a2: a2,
                a3: a3,
                a4: a4,
                a5: a5,
                a6: a6,
                a7: a7,
                a8: a8,
            };
            console.log('----------------------------------');
            console.log('satisfaction_survey: ' + JSON.stringify(satisfaction_survey));
        };

        $scope.checkB = function () {
            var b1_1 = $('input[name="b1_1"]:checked').val() ? $('input[name="b1_1"]:checked').val() : 0;
            var b1_2 = $('input[name="b1_2"]:checked').val() ? $('input[name="b1_2"]:checked').val() : 0;
            var b1_3 = $('input[name="="]:checked').val() ? $('input[name="="]:checked').val() : 0;
            var b1_4 = $('input[name="b1_4"]:checked').val() ? $('input[name="b1_4"]:checked').val() : 0;
            var b1_5 = $('input[name="b1_5"]:checked').val() ? $('input[name="b1_5"]:checked').val() : 0;
            var b1_6 = $('input[name="b1_6"]:checked').val() ? $('input[name="b1_6"]:checked').val() : 0;

            var b2_1 = $('input[name="b2_1"]:checked').val() ? $('input[name="b2_1"]:checked').val() : 0;
            var b2_2 = $('input[name="b2_2"]:checked').val() ? $('input[name="b2_2"]:checked').val() : 0;
            var b2_3 = $('input[name="="]:checked').val() ? $('input[name="="]:checked').val() : 0;
            var b2_4 = $('input[name="b2_4"]:checked').val() ? $('input[name="b2_4"]:checked').val() : 0;
            var b2_5 = $('input[name="b2_5"]:checked').val() ? $('input[name="b2_5"]:checked').val() : 0;
            var b2_6 = $('input[name="b2_6"]:checked').val() ? $('input[name="b2_6"]:checked').val() : 0;

            var b3_1 = $('input[name="b3_1"]:checked').val() ? $('input[name="b3_1"]:checked').val() : 0;
            var b3_2 = $('input[name="b3_2"]:checked').val() ? $('input[name="b3_2"]:checked').val() : 0;
            var b3_3 = $('input[name="="]:checked').val() ? $('input[name="="]:checked').val() : 0;
            var b3_4 = $('input[name="b3_4"]:checked').val() ? $('input[name="b3_4"]:checked').val() : 0;
            var b3_5 = $('input[name="b3_5"]:checked').val() ? $('input[name="b3_5"]:checked').val() : 0;
            var b3_6 = $('input[name="b3_6"]:checked').val() ? $('input[name="b3_6"]:checked').val() : 0;

            var b4_1 = $('input[name="b4_1"]:checked').val() ? $('input[name="b4_1"]:checked').val() : 0;
            var b4_2 = $('input[name="b4_2"]:checked').val() ? $('input[name="b4_2"]:checked').val() : 0;

            var b5_1 = $('input[name="b5_1"]:checked').val() ? $('input[name="b5_1"]:checked').val() : 0;
            var b5_2 = $('input[name="b5_2"]:checked').val() ? $('input[name="b5_2"]:checked').val() : 0;

            var b6_1 = $('input[name="b6_1"]:checked').val() ? $('input[name="b6_1"]:checked').val() : 0;
            var b6_2 = $('input[name="b6_2"]:checked').val() ? $('input[name="b6_2"]:checked').val() : 0;

            var satisfaction_survey = {
                b6_1: b6_1,
                b6_2: b6_2


            };
            console.log('----------------------------------');
            console.log('satisfaction_survey: ' + JSON.stringify(satisfaction_survey));
        };
        $scope.checkC = function () {
            var c1 = $('input[name="c1"]:checked').val() ? $('input[name="c1"]:checked').val() : 0;
            var c2 = $('input[name="c2"]:checked').val() ? $('input[name="c2"]:checked').val() : 0;
            var c3 = $('input[name="c3"]:checked').val() ? $('input[name="c3"]:checked').val() : 0;
            var c4 = $('input[name="c4"]:checked').val() ? $('input[name="c4"]:checked').val() : 0;
            var c5 = $('input[name="c5"]:checked').val() ? $('input[name="c5"]:checked').val() : 0;
            var c6 = $('input[name="c6"]:checked').val() ? $('input[name="c6"]:checked').val() : 0;
            var c7 = $('input[name="c7"]:checked').val() ? $('input[name="c7"]:checked').val() : 0;
            var c8 = $('input[name="c8"]:checked').val() ? $('input[name="c8"]:checked').val() : 0;
            var c9 = $('input[name="c9"]:checked').val() ? $('input[name="c9"]:checked').val() : 0;
            var c10 = $('input[name="c10"]:checked').val() ? $('input[name="c10"]:checked').val() : 0;
            var c11 = $('input[name="c11"]:checked').val() ? $('input[name="c11"]:checked').val() : 0;


            var satisfaction_survey = {
                c1: c1,
                c2: c2,
                c3: c3,
                c4: c4,
                c5: c5,
                c6: c6,
                c7: c7,
                c8: c8,
                c9: c9,
                c10: c10,
                c11: c11


            };
            console.log('----------------------------------');
            console.log('satisfaction_survey: ' + JSON.stringify(satisfaction_survey));
        };
        $scope.checkD = function () {
            var d1 = $('input[name="d1"]:checked').val() ? $('input[name="d1"]:checked').val() : 0;
            var d2 = $('input[name="d2"]:checked').val() ? $('input[name="d2"]:checked').val() : 0;
            var d3 = $('input[name="d3"]:checked').val() ? $('input[name="d3"]:checked').val() : 0;
            var d4 = $('input[name="d4"]:checked').val() ? $('input[name="d4"]:checked').val() : 0;
            var d5 = $('input[name="d5"]:checked').val() ? $('input[name="d5"]:checked').val() : 0;


            var satisfaction_survey = {
                d1: d1,
                d2: d2,
                d3: d3,
                d4: d4,
                d5: d5


            };
            console.log('----------------------------------');
            console.log('satisfaction_survey: ' + JSON.stringify(satisfaction_survey));
        };
        $scope.checkE = function () {
            var e1_1 = $('input[name="e1_1"]:checked').val() ? $('input[name="e1_1"]:checked').val() : 0;
            var e1_2 = $('input[name="e1_2"]:checked').val() ? $('input[name="e1_2"]:checked').val() : 0;
            var e1_3 = $('input[name="e1_3"]:checked').val() ? $('input[name="e1_3]:checked').val() : 0;
            var e1_4 = $('input[name="e1_4"]:checked').val() ? $('input[name="e1_4"]:checked').val() : 0;
            var e1_5 = $('input[name="e1_5"]:checked').val() ? $('input[name="e1_5"]:checked').val() : 0;
            var e1_6 = $('input[name="e1_6"]:checked').val() ? $('input[name="e1_6"]:checked').val() : 0;
            var e1_7 = $('input[name="e1_7"]:checked').val() ? $('input[name="e1_7"]:checked').val() : 0;
            var e1_8 = $('input[name="e1_8"]:checked').val() ? $('input[name="e1_8"]:checked').val() : 0;
            var e1_9 = $('input[name="e1_9"]:checked').val() ? $('input[name="e1_9"]:checked').val() : 0;
            var e1_10 = $('input[name="e1_10"]:checked').val() ? $('input[name="e1_10"]:checked').val() : 0;
            var e1_11 = $('input[name="e1_11"]:checked').val() ? $('input[name="e1_11"]:checked').val() : 0;
            var e1_12 = $('input[name="e1_12"]:checked').val() ? $('input[name="e1_12"]:checked').val() : 0;

            var e2_1 = $('input[name="e2_1"]:checked').val() ? $('input[name="e2_1"]:checked').val() : 0;
            var e2_2 = $('input[name="e2_2"]:checked').val() ? $('input[name="e2_2"]:checked').val() : 0;
            var e2_3 = $('input[name="e2_3"]:checked').val() ? $('input[name="e2_3]:checked').val() : 0;
            var e2_4 = $('input[name="e2_4"]:checked').val() ? $('input[name="e2_4"]:checked').val() : 0;
            var e2_5 = $('input[name="e2_5"]:checked').val() ? $('input[name="e2_5"]:checked').val() : 0;
            var e2_6 = $('input[name="e2_6"]:checked').val() ? $('input[name="e2_6"]:checked').val() : 0;
            var e2_7 = $('input[name="e2_7"]:checked').val() ? $('input[name="e2_7"]:checked').val() : 0;
            var e2_8 = $('input[name="e2_8"]:checked').val() ? $('input[name="e2_8"]:checked').val() : 0;
            var e2_9 = $('input[name="e2_9"]:checked').val() ? $('input[name="e2_9"]:checked').val() : 0;
            var e2_10 = $('input[name="e2_10"]:checked').val() ? $('input[name="e2_10"]:checked').val() : 0;
            var e2_11 = $('input[name="e2_11"]:checked').val() ? $('input[name="e2_11"]:checked').val() : 0;
            var e2_12 = $('input[name="e2_12"]:checked').val() ? $('input[name="e2_12"]:checked').val() : 0;
            var e2_13 = $('input[name="e2_13"]:checked').val() ? $('input[name="e2_13"]:checked').val() : 0;



            var e3_1 = $('input[name="e3_1"]:checked').val() ? $('input[name="e3_1"]:checked').val() : 0;
            var e3_2 = $('input[name="e3_2"]:checked').val() ? $('input[name="e3_2"]:checked').val() : 0;
            var e3_3 = $('input[name="e3_3"]:checked').val() ? $('input[name="e3_3"]:checked').val() : 0;
            var e3_4 = $('input[name="e3_4"]:checked').val() ? $('input[name="e3_4"]:checked').val() : 0;
            var e3_5 = $('input[name="e3_5"]:checked').val() ? $('input[name="e3_5"]:checked').val() : 0;

            var e4_1 = $('input[name="e4_1"]:checked').val() ? $('input[name="e4_1"]:checked').val() : 0;
            var e4_2 = $('input[name="e4_2"]:checked').val() ? $('input[name="e4_2"]:checked').val() : 0;
            var e4_3 = $('input[name="e4_3"]:checked').val() ? $('input[name="e4_3"]:checked').val() : 0;
            var e4_4 = $('input[name="e4_4"]:checked').val() ? $('input[name="e4_4"]:checked').val() : 0;
            var e4_5 = $('input[name="e4_5"]:checked').val() ? $('input[name="e4_5"]:checked').val() : 0;


            var e5_1 = $('input[name="e5_1"]:checked').val() ? $('input[name="e5_1"]:checked').val() : 0;
            var e5_2 = $('input[name="e5_2"]:checked').val() ? $('input[name="e5_2"]:checked').val() : 0;


            var e6_1 = $('input[name="e6_1"]:checked').val() ? $('input[name="e6_1"]:checked').val() : 0;
            var e6_2 = $('input[name="e6_2"]:checked').val() ? $('input[name="e6_2"]:checked').val() : 0;
            var e6_3 = $('input[name="e6_3"]:checked').val() ? $('input[name="e6_3"]:checked').val() : 0;
            var e6_4 = $('input[name="e6_4"]:checked').val() ? $('input[name="e6_4"]:checked').val() : 0;
            var e6_5 = $('input[name="e6_5"]:checked').val() ? $('input[name="e6_5"]:checked').val() : 0;
            var e6_6 = $('input[name="e6_6"]:checked').val() ? $('input[name="e6_6"]:checked').val() : 0;


            var e7_1 = $('input[name="e7_1"]:checked').val() ? $('input[name="e7_1"]:checked').val() : 0;
            var e7_2 = $('input[name="e7_2"]:checked').val() ? $('input[name="e7_2"]:checked').val() : 0;
            var e7_3 = $('input[name="e7_3"]:checked').val() ? $('input[name="e7_3"]:checked').val() : 0;
            var satisfaction_survey = {
                e7_1: e7_1,
                e7_2: e7_2,
                e7_3: e7_3

            };
            console.log('----------------------------------');
            console.log('satisfaction_survey: ' + JSON.stringify(satisfaction_survey));
        };

        $scope.checkF = function () {
            var f1 = $('input[name="f1"]:checked').val() ? $('input[name="f1"]:checked').val() : 0;
            var f2 = $('input[name="f2"]:checked').val() ? $('input[name="f2"]:checked').val() : 0;
            var f3 = $('input[name="f3"]:checked').val() ? $('input[name="f3"]:checked').val() : 0;
            var f4 = $('input[name="f4"]:checked').val() ? $('input[name="f4"]:checked').val() : 0;



            var satisfaction_survey = {
                f1: f1,
                f2: f2,
                f3: f3,
                f4: f4



            };
            console.log('----------------------------------');
            console.log('satisfaction_survey: ' + JSON.stringify(satisfaction_survey));
        };
        $scope.checkG = function () {
            var g1 = $('input[name="g1"]:checked').val() ? $('input[name="g1"]:checked').val() : 0;
            var g2 = $('input[name="g2"]:checked').val() ? $('input[name="g2"]:checked').val() : 0;
            var g3 = $('input[name="g3"]:checked').val() ? $('input[name="g3"]:checked').val() : 0;
            var g4 = $('input[name="g4"]:checked').val() ? $('input[name="g4"]:checked').val() : 0;
            var satisfaction_survey = {
                g1: g1,
                g2: g2,
                g3: g3,
                g4: g4
            };
            console.log('----------------------------------');
            console.log('satisfaction_survey: ' + JSON.stringify(satisfaction_survey));
        };
        $scope.checkH = function () {
            var h1 = $('input[name="h1"]:checked').val() ? $('input[name="h1"]:checked').val() : 0;
            var h2 = $('input[name="h2"]:checked').val() ? $('input[name="h2"]:checked').val() : 0;
            var h3 = $('input[name="h3"]:checked').val() ? $('input[name="h3"]:checked').val() : 0;
            var h4 = $('input[name="h4"]:checked').val() ? $('input[name="h4"]:checked').val() : 0;
            var satisfaction_survey = {
                h1: h1,
                h2: h2,
                h3: h3,
                h4: h4
            };
            console.log('----------------------------------');
            console.log('satisfaction_survey: ' + JSON.stringify(satisfaction_survey));
             console.log('suggestion: '+$scope.suggestion);
        };
    }]);