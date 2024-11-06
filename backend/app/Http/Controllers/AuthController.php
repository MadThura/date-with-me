<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        try {
            $user = User::where('email', $request->email)->first();
            $isPasswordCorrect = Hash::check($request->password, $user->password);
            if (!$isPasswordCorrect) {
                return response()->json([
                    'message' => 'Incorrect Password'
                ], 401);
            }
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

    public function logout()
    {
        try {
            $user = Auth::user();

            if ($user) {
                $user->currentAccessToken()->delete();

                return response()->json([
                    'message' => 'Logout successful.'
                ], 200);
            }
            return response()->json([
                'message' => 'No user is currently authenticated.'
            ], 401);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'An unexpected error occurred.',
                'details' => $e->getMessage(),
            ], 500);
        }
    }
}
