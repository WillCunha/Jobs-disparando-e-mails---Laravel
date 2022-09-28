<?php

use App\Jobs\newMailWF;
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

Route::get('envio-email', function(){

    $user = new stdClass();
    $user->name = 'Willian Cunha';
    $user->email = 'willian.fernando.cunha@hotmail.com';

    newMailWF::dispatch($user)->delay(now()->addSeconds('5'));
    //return new \App\Mail\newMailWF($user);
});
