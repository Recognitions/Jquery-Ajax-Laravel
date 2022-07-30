<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Items;

Route::get('/', [Items::class,'Main']);

Route::get('/a', function(){
    return view('index');
});