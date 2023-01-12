<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Traits\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use ResponseTrait;
    
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(LoginRequest $request): JsonResponse
    {
        try {
            $credentials = $request->only('email', 'password');
            $token = auth('api')->attempt($credentials);
            if ($token) {
                $data =  $this->respondWithToken($token);
            } else {
                return $this->responseError(null, 'Invalid Email and Password !', Response::HTTP_UNAUTHORIZED);
            }
            return $this->responseSuccess($data, 'Logged In Successfully !');
        } catch (\Exception $e) {
            return $this->responseError(null, $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token): array
    {
        $user = auth('api')->user();
        
        $data = [[
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60 * 24 * 30, // 43200 Minutes = 30 Days
            'user' => auth('api')->user(),
            'role' => auth('api')->user()->roles()->get()[0]->title
        ]];
        return $data[0];
    }



}