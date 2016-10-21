<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UserAlumniProfessionalService;

class UserAlumniProfessionalServiceController extends Controller {

    public function getServices($user_id) {

        $services = UserAlumniProfessionalService::where('user_id', '=', $user_id)->get();
        return response()->json(['services' => $services]);
    }

    public function postAddService(Request $request) {

        $data = $request->get('service');
        $service = new UserAlumniProfessionalService();
        $service->user_id = $data['user_id'];
        $service->service = $data['service'];
        $service->status = 1;
        if ($service->save()) {
            return response()->json(['message' => 'successfully added', 'service' => $service]);
        }
        return response()->json(['message' => 'error', 'data' => $data]);
    }

    public function postUpdateService(Request $request) {

        $data = $request->get('service');
        $service = UserAlumniProfessionalService::find($data['id']);

        $service->service = $data['service'];

        if ($service->save()) {
            return response()->json(['message' => 'successfully added', 'service' => $service]);
        }
        return response()->json(['message' => 'error', 'data' => $data]);
    }

    public function postDeleteService(Request $request) {
        $id = $request->get('id');
        $service = UserAlumniProfessionalService::find($id);

        if ($service->delete()) {
            return response()->json(['message' => 'successfully deleted'], 200);
        }
        return response()->json(['message' => 'error'], 500);
    }

}
