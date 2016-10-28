<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Preference;

class PreferenceController extends Controller {

    public function getPreference() {
        $preference = Preference::where('id', '=', '1')->get();
        return response()->json(['preference' => json_encode($preference)]);
    }

    public function postUpdatePreference(Request $request) {

        $data = $request->get('preference');

        $preference = Preference::where('id', '=', '1')->first();
        $preference->school_name = $data['school_name'];
        $preference->school_label = $data['school_label'];
        $preference->contact_no = $data['contact_no'];
        $preference->email_address = $data['email_address'];
        $preference->address = $data['address'];
        $preference->about_us = $data['about_us'];

        if ($preference->save()) {
            return response()->json(['message' => 'successfully updated'], 200);
        }
        return response()->json(['message' => 'error'], 500);
    }

}
