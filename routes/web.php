<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TelephoneController;
use App\Http\Controllers\InternetController;
use App\Http\Controllers\CableController;
use App\Http\Controllers\ProgramationController;
use App\Http\Controllers\PackchannelController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\PackserviceController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/home',HomeController::class)->name('home');

Route::resource('telephones',TelephoneController::class);

Route::resource('cables',CableController::class);

Route::resource('internets',InternetController::class);



Route::resource('packchannels',PackchannelController::class);

Route::get("packchannels/{packchannel}/crear",[PackchannelController::class,'crear'])->name('packchannels.crear');

Route::get("packchannels/{packchannel}/ver",[PackchannelController::class,'ver'])->name('packchannels.ver');



Route::resource('channels',ChannelController::class);

Route::get("channels/{channel}/crear",[ChannelController::class,'crear'])->name('channels.crear');

Route::get("channels/{channel}/ver",[ChannelController::class,'ver'])->name('channels.ver');

Route::resource('programations',ProgramationController::class);

Route::get("programations/{programation}/crear",[ProgramationController::class,'crear'])->name('programations.crear');

Route::get("programations/{programation}/ver",[ProgramationController::class,'ver'])->name('programations.ver');


Route::get("packservices/user",[PackserviceController::class,'usuario'])->name('packservices.user');
Route::get("packservices/{packservice}/ver",[PackserviceController::class,'ver'])->name('packservices.ver');
Route::resource('packservices',PackserviceController::class);

Route::get("invoices/error",[InvoiceController::class,'error'])->name('invoices.error');
Route::resource('invoices',InvoiceController::class);

Route::resource('users',UserController::class);