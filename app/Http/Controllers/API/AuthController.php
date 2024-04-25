<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['login', 'register']);
    }

    public function login (LoginRequest $request): \Illuminate\Http\JsonResponse
    {
        $user = User::where("email", $request->email)->first();

        if(!$user){
            return $this->sendError('Data not found', 404);
        }
        else {
            if (!Hash::check($request->password, $user->password)) {
                return $this->sendError('Invalid credentials.', 401);
            }
            else {
                if($this->guardAPI()->setUser($user)){
                    $user = $this->guardAPI()->user();
                    $success['token'] =  $user->createToken('Halosis')->accessToken;

                    return $this->sendResponse(['data' => $success], 'User login successfully.');
                }
                else {
                    return $this->sendError('Unauthorised.', 401);
                }
            }
        }
    }

    public function register (RegisterRequest $request): \Illuminate\Http\JsonResponse
    {
        $user = User::where("email", $request->email)->first();

        if($user){
            return $this->sendError('Data exists', 404);
        }
        else {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'email_verified_at' => now(),
                'password' => Hash::make($request->password)
            ]);

            return $this->sendResponse(['data' => null], 'User register successfully.');
        }
    }
}
