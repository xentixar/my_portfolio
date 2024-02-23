<?php

use App\Livewire\Frontend\Home;
use App\Livewire\Frontend\About;
use App\Livewire\Frontend\Service;
use App\Livewire\Frontend\Project;
use App\Livewire\Frontend\Contact;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/projects', Project::class)->name('projects');