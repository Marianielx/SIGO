<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Administrador;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Grupo de Rotas Autenticadas */

Route::middleware(['auth'])->group(function () {
  /* Manager Dashboard  */
  Route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

  Route::middleware(['Administrador'])->group(function () {

    /* User */
    Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/create', ['as' => 'admin.user.create', 'uses' => 'Admin\UserController@create'])->withoutMiddleware(['Administrador']);
    Route::post('admin/user/store', ['as' => 'admin.user.store', 'uses' => 'Admin\UserController@store'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);
    Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/edits/{id}', ['as' => 'admin.user.edits', 'uses' => 'Admin\UserController@edits'])->withoutMiddleware(['Administrador']);
    Route::put('admin/user/updates/{id}', ['as' => 'admin.user.updates', 'uses' => 'Admin\UserController@updates'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/userSearch', ['as' => 'admin.user.userSearch', 'uses' => 'Admin\UserController@search']);
    Route::get('admin/signup/logs', ['as' => 'admin.signup.log', 'uses' => 'Admin\CredencialController@log']);
    /* end */
  });

  /* O/O */
  Route::get('oficial-list', ['as' => 'admin.offop.index', 'uses' => 'Admin\OffopController@index'])->withoutMiddleware(['Administrador']);
  Route::get('oficial-create', ['as' => 'admin.offop.create', 'uses' => 'Admin\OffopController@create'])->withoutMiddleware(['Administrador']);
  Route::post('admin/offop/store', ['as' => 'admin.offop.store', 'uses' => 'Admin\OffopController@store']);
  Route::get('admin/offop/show/{id}', ['as' => 'admin.offop.show', 'uses' => 'Admin\OffopController@show'])->withoutMiddleware(['Administrador']);
  Route::get('admin/offop/edit/{id}', ['as' => 'admin.offop.edit', 'uses' => 'Admin\OffopController@edit']);
  Route::put('admin/offop/update/{id}', ['as' => 'admin.offop.update', 'uses' => 'Admin\OffopController@update']);
  /* End */

  /* A/S */
  Route::get('as-list', ['as' => 'admin.as.index', 'uses' => 'Admin\AsController@index'])->withoutMiddleware(['Administrador']);
  Route::get('as-create', ['as' => 'admin.as.create', 'uses' => 'Admin\AsController@create'])->withoutMiddleware(['Administrador']);
  Route::post('admin/as/store', ['as' => 'admin.as.store', 'uses' => 'Admin\AsController@store']);
  Route::get('admin/as/show/{id}', ['as' => 'admin.as.show', 'uses' => 'Admin\AsController@show'])->withoutMiddleware(['Administrador']);
  Route::get('admin/as/edit/{id}', ['as' => 'admin.as.edit', 'uses' => 'Admin\AsController@edit']);
  Route::put('admin/as/update/{id}', ['as' => 'admin.as.update', 'uses' => 'Admin\AsController@update']);
  /* End */
  
  /* Mission */
  Route::get('mission-list', ['as' => 'admin.mission.index', 'uses' => 'Admin\MissionController@index'])->withoutMiddleware(['Administrador']);
  Route::get('mission-create', ['as' => 'admin.mission.create', 'uses' => 'Admin\MissionController@create'])->withoutMiddleware(['Administrador']);
  Route::post('admin/mission/store', ['as' => 'admin.mission.store', 'uses' => 'Admin\MissionController@store']);
  Route::get('admin/mission/show/{id}', ['as' => 'admin.mission.show', 'uses' => 'Admin\MissionController@show'])->withoutMiddleware(['Administrador']);
  Route::get('admin/mission/edit/{id}', ['as' => 'admin.mission.edit', 'uses' => 'Admin\MissionController@edit']);
  Route::put('admin/mission/update/{id}', ['as' => 'admin.mission.update', 'uses' => 'Admin\MissionController@update']);
  /* End */

  /* As Mission */
  Route::get('admin/asmission/index/{id}', ['as' => 'admin.asmission.index', 'uses' => 'Admin\AsMissionController@index'])->withoutMiddleware(['Administrador']);
  Route::get('as-mission-create/{id}', ['as' => 'admin.asmission.create', 'uses' => 'Admin\AsMissionController@create'])->withoutMiddleware(['Administrador']);
  Route::post('admin/asmission/store/{id}', ['as' => 'admin.asmission.store', 'uses' => 'Admin\AsMissionController@store']);
  Route::get('admin/asmission/show/{id}', ['as' => 'admin.asmission.show', 'uses' => 'Admin\AsMissionController@show'])->withoutMiddleware(['Administrador']);
  Route::get('admin/asmission/edit/{id}', ['as' => 'admin.asmission.edit', 'uses' => 'Admin\AsMissionController@edit']);
  Route::put('admin/asmission/update/{id}', ['as' => 'admin.asmission.update', 'uses' => 'Admin\AsMissionController@update']);
  /* End */
  
  /* Trust People */
  Route::get('pc-list', ['as' => 'admin.pc.index', 'uses' => 'Admin\TrustPersonController@index'])->withoutMiddleware(['Administrador']);
  Route::get('pc-create', ['as' => 'admin.pc.create', 'uses' => 'Admin\TrustPersonController@create'])->withoutMiddleware(['Administrador']);
  Route::post('admin/pc/store', ['as' => 'admin.pc.store', 'uses' => 'Admin\TrustPersonController@store']);
  Route::get('admin/pc/show/{id}', ['as' => 'admin.pc.show', 'uses' => 'Admin\TrustPersonController@show'])->withoutMiddleware(['Administrador']);
  Route::get('admin/pc/edit/{id}', ['as' => 'admin.pc.edit', 'uses' => 'Admin\TrustPersonController@edit']);
  Route::put('admin/pc/update/{id}', ['as' => 'admin.pc.update', 'uses' => 'Admin\TrustPersonController@update']);
  /* End */
  
  /* TaskTrust People */
  Route::get('admin/pcTask/index/{id}', ['as' => 'admin.pcTask.index', 'uses' => 'Admin\TrustPersonTaskController@index'])->withoutMiddleware(['Administrador']);
  Route::get('admin/pcTask/create/{id}', ['as' => 'admin.pcTask.create', 'uses' => 'Admin\TrustPersonTaskController@create'])->withoutMiddleware(['Administrador']);
  Route::get('admin/pcTask/show/{id}/{idOut}', ['as' => 'admin.pcTask.show', 'uses' => 'Admin\TrustPersonTaskController@show'])->withoutMiddleware(['Administrador']);
  Route::post('admin/pcTask/store/{id}', ['as' => 'admin.pcTask.store', 'uses' => 'Admin\TrustPersonTaskController@store']);
  /* End */

});
