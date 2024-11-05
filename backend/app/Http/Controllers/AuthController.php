<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request)
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'gender' => $request->gender,
                'birthdate' => $request->birthdate,
                'location' => $request->location,
                'bio' => $request->bio,
                'profile_img' => $request->profile_img
            ]);
            $token = $user->createToken('user-token')->plainTextToken;
            return response()->json([
                "message" => "User registerd successfully",
                "token" => $token,
                "user" => $user
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'An unexpected error occurred.',
                'details' => $e->getMessage(),
            ], 500);
        }
    }

    public function login(LoginUserRequest $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'message' => 'Invalid email or password.'
                ], 401);
            }
            $user = Auth::user();
            $token = $user->createToken('user-token')->plainTextToken;
            return response()->json([
                'message' => 'Login successful.',
                'token' => $token,
                'user' => $user
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'An unexpected error occurred.',
                'details' => $e->getMessage(),
            ], 500);
        }
    }
}
