<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use App\Models\Component;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ComponentController extends Controller
{
    use ResponseTrait;
    
    public function __construct()
    {
        //$this->middleware('auth:api', ['except' => ['login']]);
    }


    public function getList(Request $request)
    {
        $companies = Component::get();
        return json_encode($companies);
    }

}