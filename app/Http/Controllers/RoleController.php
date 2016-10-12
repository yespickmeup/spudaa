<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Role;
class RoleController extends Controller
{
    public function getRoles() {
        $roles = Role::All();
        return response()->json(['roles' => $roles]);
    }
}
