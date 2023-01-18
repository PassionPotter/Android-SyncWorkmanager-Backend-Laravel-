<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\WTGTypeController;
use App\Http\Controllers\Api\SubContractorController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\CraneController;
use App\Http\Controllers\Api\WTGController;
use App\Http\Controllers\Api\PersonelController;
use App\Http\Controllers\Api\ResourceActivationController;
use App\Http\Controllers\Api\CraneRecolocationController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\DailyStatusController;
use App\Http\Controllers\Api\CraneTaskController;
use App\Http\Controllers\Api\CraneDailyStatusController;
use App\Http\Controllers\Api\InefficienciesController;
use App\Http\Controllers\Api\CraneInefficienciesController;
use App\Http\Controllers\Api\TrazabilityController;
use App\Http\Controllers\Api\CraneTrazabilityController;
use App\Http\Controllers\Api\ComponentController;
use App\Http\Controllers\Api\PhaseController;
use App\Http\Controllers\Api\OTS1Controller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('checkUser',[UsersController::class, 'checkUser']);

//POST URL
Route::post('login', [AuthController::class, 'login']);
Route::post('project', [ProjectController::class, 'save']);
Route::post('wtg', [WTGController::class, 'save']);
Route::post('crane', [CraneController::class, 'save']);
Route::post('personel', [PersonelController::class, 'save']);
Route::post('resourceActivation', [ResourceActivationController::class, 'save']);
Route::post('craneRecolocation', [CraneRecolocationController::class, 'save']);
Route::post('task', [TaskController::class, 'save']);
Route::post('daily-status',[DailyStatusController::class, 'save']);
Route::post('crane-task', [CraneTaskController::class, 'save']);
Route::post('crane-daily-status',[CraneDailyStatusController::class, 'save']);
Route::post('inefficiencies',[InefficienciesController::class, 'save']);
Route::post('crane-inefficiencies',[CraneInefficienciesController::class, 'save']);
Route::post('trazability',[TrazabilityController::class, 'save']);
Route::post('crane-trazability',[CraneTrazabilityController::class, 'save']);
Route::post('ots1',[OTS1Controller::class, 'save']);
//GET URL
Route::get('fetchCompany', [CompanyController::class, 'getList']);
Route::get('fetchWTGType', [WTGTypeController::class, 'getList']);
Route::get('fetchSubContractor', [SubContractorController::class, 'getList']);
Route::get('fetchComponent', [ComponentController::class, 'getList']);
Route::get('fetchPhase', [PhaseController::class, 'getList']);

Route::get('wtgs', [WTGController::class, 'getList']);
Route::get('fetchCrane', [CraneController::class, 'getList']);
Route::get('fetchProject', [ProjectController::class, 'getList']);
Route::get('fetchPersonel', [PersonelController::class, 'getList']);
Route::get('fetchTask', [TaskController::class, 'getList']);
Route::get('fetchCtrazabilityraneTask', [CraneTaskController::class, 'getList']);
Route::get('fetchInefficiencies',[InefficienciesController::class, 'getList']);
Route::get('fetchCraneInefficiencies',[CraneInefficienciesController::class, 'getList']);
Route::get('fetchTrazability',[TrazabilityController::class, 'getList']);
Route::get('crane-fetchTrazability',[CraneTrazabilityController::class, 'getList']);
Route::get('fetchots1',[OTS1Controller::class, 'getList']);