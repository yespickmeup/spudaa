<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UserAlumniMember;

class UserAlumniMembersController extends Controller {

    public function getMembers($user_id) {
        $members = UserAlumniMember::where('user_id', '=', $user_id)->get();
        return response()->json(['members' => $members]);
    }

    public function postAddMember(Request $request) {
        $data = $request->get('member');
        $member = new UserAlumniMember();

        $member->user_id = $data['user_id'];
        $member->name = $data['name'];
        $member->relation = $data['relation'];
        $member->name_before_married = $data['name_before_married'];
        $member->email = $data['email'];
        $member->contact_number = $data['contact_number'];
        $member->address = $data['address'];
        $member->occupation = $data['occupation'];
        $member->office_address = $data['office_address'];


        if ($member->save()) {
            return response()->json(['message' => 'successfully added', 'member' => $member]);
        }
        return response()->json(['message' => 'error', 'data' => $data]);
    }

    public function postUpdateMember(Request $request) {
        $data = $request->get('member');
        $member = UserAlumniMember::find($data['id']);
        $member->name = $data['name'];
        $member->relation = $data['relation'];
        $member->name_before_married = $data['name_before_married'];
        $member->email = $data['email'];
        $member->contact_number = $data['contact_number'];
        $member->address = $data['address'];
        $member->occupation = $data['occupation'];
        $member->office_address = $data['office_address'];


        if ($member->save()) {
            return response()->json(['message' => 'successfully added', 'member' => $member]);
        }
        return response()->json(['message' => 'error', 'data' => $data]);
    }

    public function postDeleteMember(Request $request) {
        $id = $request->get('id');
        $myMember = UserAlumniMember::find($id);

        if ($myMember->delete()) {
            return response()->json(['message' => 'successfully deleted'], 200);
        }
        return response()->json(['message' => 'error'], 500);
    }

}
