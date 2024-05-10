<?php

use App\Livewire\StudentList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/studentlist', StudentList::class);
