<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authtentication(Request $request)
    {
        $validations = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        $user = User::where('email', $validations['email'])->first();


        if (!$user || !Hash::check($validations['password'], $user->password)) {

       
            return response()->json([
                'message' => 'password dan email tidak sesuai'
            ], 401);
        }


        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'message' => 'Login Berhasil',
            'auth_token' => $token
        ]);

    }
}
