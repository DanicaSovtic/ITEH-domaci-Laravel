<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        $user = User::where("email", $req->email)->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return response()->json([
                "error" => "Invalid credentials"
            ], 400);
        }
        return $user->createToken($user->email)->plainTextToken;
    }
    public function logout(Request $req)
    {
        $req->user()->currentAccessToken()->delete();
        return response()->noContent();
    }

    public function register(Request $req)
    {
        $user = User::where("email", $req->email)->first();
        if ($user) {
            return response()->json(["error" => "User already exists"], 400);
        }
        $user = User::create([
            "name" => $req->name,
            "email" => $req->email,
            "password" => Hash::make($req->password)
        ]);
        return $user->createToken($user->email)->plainTextToken;
    }
}
