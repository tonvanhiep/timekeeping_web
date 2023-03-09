<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //WEB
    public function login() {
        return view('admin.login.login');
    }

    public function checkLogin(Request $request) {
        // dd($request->name);
        if (Auth::attempt(['email' => $request->name, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard')->with('success', 'Login successfully');
        }
        return redirect()->route('admin.auth.login')->with('error','Login failed');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin.auth.login');
    }

    //API
    public function ApiCheckLogin(Request $request) {
        if (Auth::attempt(['email' => $request->name, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('face_recognition')->accessToken;
            return response()->json(['message' => 'Login successful', 'code' => 200, 'token' => $token]);
        }
        return response()->json(['message' => 'Login fail', 'code' => 501]);
    }

    public function ApiLogout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json(['message' => 'Logout successfully', 'code' => 200]);
    }

    public function ApiGetInfo(Request $request)
    {
        $user = Auth::user();

        return response()->json(['data' => $user, 'code' => 200]);
    }
}
