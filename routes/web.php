<?php

use App\Models\Resume; 
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $data = Resume::all();
    $data = $data[0];

    return view('welcome', ['data' => $data]);
});
