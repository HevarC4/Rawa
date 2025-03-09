<?php

use App\Livewire\App;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/home',App::class );
Route::get('/',Home::class );

Route::get('/tem',function(){
    return view('template.index');
});

