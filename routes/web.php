<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\MainComponent;
use App\Livewire\ConfirmDelete;
use App\Livewire\EditContact;

// composer require livewire/livewire para instalar as depedencias
Route::get('/', MainComponent::class)->name('home');
Route::get('/contacts/{id}/delete', ConfirmDelete::class)->name('contacts.delete');
Route::get('/contacts/{id}/edit', EditContact::class)->name('contacts.edit');
