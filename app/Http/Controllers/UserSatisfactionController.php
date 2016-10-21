<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UserSatisfactionSurvey;

class UserSatisfactionController extends Controller {

    public function getSurvey($user_id) {
        $survey = UserSatisfactionSurvey::where('user_id', '=', $user_id)->first();
        return response()->json(['satisfaction' => $survey]);
    }

    public function postUpdateSatisfaction(Request $request) {

        $user_id = $request->get('user_id');
         $satisfaction_survey = $request->get('satisfaction_survey');


        $satSurvey = UserSatisfactionSurvey::where('user_id', '=', $user_id)->first();



        $satSurvey->a1 = $satisfaction_survey['a1'];
        $satSurvey->a2 = $satisfaction_survey['a2'];
        $satSurvey->a3 = $satisfaction_survey['a3'];
        $satSurvey->a4 = $satisfaction_survey['a4'];
        $satSurvey->a5 = $satisfaction_survey['a5'];
        $satSurvey->a6 = $satisfaction_survey['a6'];
        $satSurvey->a7 = $satisfaction_survey['a7'];
        $satSurvey->a8 = $satisfaction_survey['a8'];

        $satSurvey->b1_1 = $satisfaction_survey['b1_1'];
        $satSurvey->b1_2 = $satisfaction_survey['b1_2'];
        $satSurvey->b1_3 = $satisfaction_survey['b1_3'];
        $satSurvey->b1_4 = $satisfaction_survey['b1_4'];
        $satSurvey->b1_5 = $satisfaction_survey['b1_5'];
        $satSurvey->b1_6 = $satisfaction_survey['b1_6'];

        $satSurvey->b2_1 = $satisfaction_survey['b2_1'];
        $satSurvey->b2_2 = $satisfaction_survey['b2_2'];
        $satSurvey->b2_3 = $satisfaction_survey['b2_3'];
        $satSurvey->b2_4 = $satisfaction_survey['b2_4'];
        $satSurvey->b2_5 = $satisfaction_survey['b2_5'];
        $satSurvey->b2_6 = $satisfaction_survey['b2_6'];

        $satSurvey->b3_1 = $satisfaction_survey['b3_1'];
        $satSurvey->b3_2 = $satisfaction_survey['b3_2'];
        $satSurvey->b3_3 = $satisfaction_survey['b3_3'];
        $satSurvey->b3_4 = $satisfaction_survey['b3_4'];
        $satSurvey->b3_5 = $satisfaction_survey['b3_5'];
        $satSurvey->b3_6 = $satisfaction_survey['b3_6'];

        $satSurvey->b4_1 = $satisfaction_survey['b4_1'];
        $satSurvey->b4_2 = $satisfaction_survey['b4_2'];

        $satSurvey->b5_1 = $satisfaction_survey['b5_1'];
        $satSurvey->b5_2 = $satisfaction_survey['b5_2'];

        $satSurvey->b6_1 = $satisfaction_survey['b6_1'];
        $satSurvey->b6_2 = $satisfaction_survey['b6_2'];

        $satSurvey->c1 = $satisfaction_survey['c1'];
        $satSurvey->c2 = $satisfaction_survey['c2'];
        $satSurvey->c3 = $satisfaction_survey['c3'];
        $satSurvey->c4 = $satisfaction_survey['c4'];
        $satSurvey->c5 = $satisfaction_survey['c5'];
        $satSurvey->c6 = $satisfaction_survey['c6'];
        $satSurvey->c7 = $satisfaction_survey['c7'];
        $satSurvey->c8 = $satisfaction_survey['c8'];
        $satSurvey->c9 = $satisfaction_survey['c9'];
        $satSurvey->c10 = $satisfaction_survey['c10'];
        $satSurvey->c11 = $satisfaction_survey['c11'];

        $satSurvey->d1 = $satisfaction_survey['d1'];
        $satSurvey->d2 = $satisfaction_survey['d2'];
        $satSurvey->d3 = $satisfaction_survey['d3'];
        $satSurvey->d4 = $satisfaction_survey['d4'];
        $satSurvey->d5 = $satisfaction_survey['d5'];

        $satSurvey->e1_1 = $satisfaction_survey['e1_1'];
        $satSurvey->e1_2 = $satisfaction_survey['e1_2'];
        $satSurvey->e1_3 = $satisfaction_survey['e1_3'];
        $satSurvey->e1_4 = $satisfaction_survey['e1_4'];
        $satSurvey->e1_5 = $satisfaction_survey['e1_5'];
        $satSurvey->e1_6 = $satisfaction_survey['e1_6'];
        $satSurvey->e1_7 = $satisfaction_survey['e1_7'];
        $satSurvey->e1_8 = $satisfaction_survey['e1_8'];
        $satSurvey->e1_9 = $satisfaction_survey['e1_9'];
        $satSurvey->e1_10 = $satisfaction_survey['e1_10'];
        $satSurvey->e1_11 = $satisfaction_survey['e1_11'];
        $satSurvey->e1_12 = $satisfaction_survey['e1_12'];

        $satSurvey->e2_1 = $satisfaction_survey['e2_1'];
        $satSurvey->e2_2 = $satisfaction_survey['e2_2'];
        $satSurvey->e2_3 = $satisfaction_survey['e2_3'];
        $satSurvey->e2_4 = $satisfaction_survey['e2_4'];
        $satSurvey->e2_5 = $satisfaction_survey['e2_5'];
        $satSurvey->e2_6 = $satisfaction_survey['e2_6'];
        $satSurvey->e2_7 = $satisfaction_survey['e2_7'];
        $satSurvey->e2_8 = $satisfaction_survey['e2_8'];
        $satSurvey->e2_9 = $satisfaction_survey['e2_9'];
        $satSurvey->e2_10 = $satisfaction_survey['e2_10'];
        $satSurvey->e2_11 = $satisfaction_survey['e2_11'];
        $satSurvey->e2_12 = $satisfaction_survey['e2_12'];
        $satSurvey->e2_13 = $satisfaction_survey['e2_13'];

        $satSurvey->e3_1 = $satisfaction_survey['e3_1'];
        $satSurvey->e3_2 = $satisfaction_survey['e3_2'];
        $satSurvey->e3_3 = $satisfaction_survey['e3_3'];

        $satSurvey->e4_1 = $satisfaction_survey['e4_1'];
        $satSurvey->e4_2 = $satisfaction_survey['e4_2'];
        $satSurvey->e4_3 = $satisfaction_survey['e4_3'];
        $satSurvey->e4_4 = $satisfaction_survey['e4_4'];
        $satSurvey->e4_5 = $satisfaction_survey['e4_5'];

        $satSurvey->e5_1 = $satisfaction_survey['e5_1'];
        $satSurvey->e5_2 = $satisfaction_survey['e5_2'];

        $satSurvey->e6_1 = $satisfaction_survey['e6_1'];
        $satSurvey->e6_2 = $satisfaction_survey['e6_2'];
        $satSurvey->e6_3 = $satisfaction_survey['e6_3'];
        $satSurvey->e6_4 = $satisfaction_survey['e6_4'];
        $satSurvey->e6_5 = $satisfaction_survey['e6_5'];
        $satSurvey->e6_6 = $satisfaction_survey['e6_6'];

        $satSurvey->e7_1 = $satisfaction_survey['e7_1'];
        $satSurvey->e7_2 = $satisfaction_survey['e7_2'];
        $satSurvey->e7_3 = $satisfaction_survey['e7_3'];

        $satSurvey->f1 = $satisfaction_survey['f1'];
        $satSurvey->f2 = $satisfaction_survey['f2'];
        $satSurvey->f3 = $satisfaction_survey['f3'];
        $satSurvey->f4 = $satisfaction_survey['f4'];

        $satSurvey->g1 = $satisfaction_survey['g1'];
        $satSurvey->g2 = $satisfaction_survey['g2'];
        $satSurvey->g3 = $satisfaction_survey['g3'];
        $satSurvey->g4 = $satisfaction_survey['g4'];

        $satSurvey->h1 = $satisfaction_survey['h1'];
        $satSurvey->h2 = $satisfaction_survey['h2'];
        $satSurvey->h3 = $satisfaction_survey['h3'];
        $satSurvey->h4 = $satisfaction_survey['h4'];
        $satSurvey->suggestion = $satisfaction_survey['suggestion'];

        if ($satSurvey->save()) {
            return response()->json(['message' => 'successfully added', 'survey' => $satSurvey]);
        }
        return response()->json(['message' => 'error', 'data' => $user_id]);
    }

}
