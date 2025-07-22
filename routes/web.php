<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\MainComponent;
use App\Livewire\ConfirmDelete;

// composer require livewire/livewire para instalar as depedencias
Route::get('/', MainComponent::class)->name('home');
Route::get('/contacts/{id}/delete', ConfirmDelete::class)->name('contacts.delete');
