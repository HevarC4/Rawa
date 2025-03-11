<?php

use App\Livewire\App;
use App\Livewire\Home;
use App\Livewire\WorkRequest;
use Illuminate\Support\Facades\Route;


Route::get('/',Home::class );
Route::get('/request',WorkRequest::class );

Route::get('/reload', function(){
    return view('welcome');
});



