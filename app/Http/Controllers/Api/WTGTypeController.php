<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use App\Models\WTGType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WTGTypeController extends Controller
{
    use ResponseTrait;
    
    public function __construct()
    {
        //$this->middleware('auth:api', ['except' => ['login']]);
    }


    public function getList(Request $request)
    {
        $types = WTGType::get();
        return json_encode($types);
    }

}