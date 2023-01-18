<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use App\Models\Phase;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PhaseController extends Controller
{
    use ResponseTrait;
    
    public function __construct()
    {
        //$this->middleware('auth:api', ['except' => ['login']]);
    }


    public function getList(Request $request)
    {
        $companies = Phase::get();
        return json_encode($companies);
    }

}