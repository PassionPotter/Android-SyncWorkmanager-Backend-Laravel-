<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use App\Models\CraneTask;
use App\Http\Controllers\Controller;
use JWTAuth;
class CraneTaskController extends Controller
{
    use ResponseTrait;
    
    public function __construct()
    {
        //$this->middleware('auth:api', ['except' => ['login']]);
    }


    public function save(Request $request)
    {
        $token = $request->header('Authorization');
        $user = JWTAuth::parseToken()->authenticate();
        if($user->roles()->get()[0]->title == "Super Admin" || $user->roles()->get()[0]->title == "Admin")
        {
            CraneTask::create($request->input());
        }
        return json_encode("success");
        
    }
    public function getList(Request $request)
    {
        $tasks = CraneTask::get();
        return json_encode($tasks);
    }

}