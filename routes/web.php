<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\MainComponent;

// composer require livewire/livewire para instalar as depedencias
Route::get('/', MainComponent::class);
