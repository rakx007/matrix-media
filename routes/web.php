<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('get-project-list', [TestController::class, 'getProjectList'])->name('get_project_list');
Route::get('get-task-list', [TestController::class, 'getTaskList'])->name('get_task_list');
Route::get('get-task/{data}', [TestController::class, 'getTask'])->name('get_task');
