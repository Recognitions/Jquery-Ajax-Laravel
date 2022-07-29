<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Code;

Route::get('/', function () {
    return view('index',[Code::class,'create']);
});
