<?php

namespace App\Http\Controllers\Identity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function Login(Request $request){
        return response()->json(['message' => $request['username'], 'password' => $request['password']]);
    }
}
