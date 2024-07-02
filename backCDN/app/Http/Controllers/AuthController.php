<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $code ;

    public function login(Request $request)
    {
        $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string'
            ]);        
    
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = 'ConnectToken';
                return response()->json([
                    'token' => $token,
                    'user' => $user
                ], 200);
            }else {
                return response()->json(['message' => 'Unauthorized'], 401);
            }
    }

    public function loginPage(){
        return view('login') ;
    }

    public function logout(Request $request)
    {
       $request->user()->token()->revoke();
       return response()->json(['message' => 'Successfully logged out']);
    }


    private function code(){
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $code = '';
        $length = strlen($characters);
        for ($i = 0; $i < 6; $i++) {
            $code .= $characters[rand(0, $length - 1)];
        }
        return $code;
    }
}
