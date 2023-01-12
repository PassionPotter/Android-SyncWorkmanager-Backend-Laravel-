<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use App\Models\SubContractor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SubContractorController extends Controller
{
    use ResponseTrait;
    
    public function __construct()
    {
        //$this->middleware('auth:api', ['except' => ['login']]);
    }


    public function getList(Request $request)
    {
        $contractors = SubContractor::get();
        return json_encode($contractors);
    }

}