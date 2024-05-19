<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistFormController;

Route::get('/', [TodolistFormController::class, 'index']);
Route::get('/create-page', [TodolistFormController::class, 'createPage']);
Route::post('/create', [TodolistFormController::class, 'create']);
Route::get('/edit-page/{id}', [TodolistFormController::class, 'editPage']);
Route::post('/edit', [TodolistFormController::class, 'edit']);
Route::get('/delete-page/{id}', [TodolistFormController::class, 'deletePage']);
Route::delete('/delete/{id}', [TodolistFormController::class, 'delete']);
