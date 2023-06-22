<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\XmltoJsonController;
use App\Http\Controllers\FileUploadController;

Route::get('/signup', [EmployeeController::class, 'signup']);
Route::get('/login',[EmployeeController::class, 'login']);

Route::get('/uploadxml', [XmltoJsonController::class, 'uploadxml']);
Route::post('/xmltojson',[XmltoJsonController::class, 'xmltojson']);

Route::get('/fileupload',[FileUploadController::class, 'fileUpload']);