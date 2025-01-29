<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request): JsonResponse {
        if(Auth::attempt(['email' => $request->email, 'password'=> $request->password])){

            $user = Auth::user();

            $token = $request->user()->createToken('api-token')->plainTextToken;

            return response()->json([
                'status' => true,
                'token' => $token,
                'user' => $user,
            ], 201);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'login ou senha incorreto'
            ], 404);
        }
    }

    public function logout(User $user): JsonResponse
    {
        try{
            $user->tokens()->delete();
            return response()->json([
                'status' => true,
                'message' => 'Houve logout'
            ], 200);

        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Não houve logout'
            ], 400);
        }
    }
}
