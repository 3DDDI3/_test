<?php

use App\Events\TestEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    TestEvent::dispatch("meesage");
});
