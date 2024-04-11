<?php

use Src\Route;

Route::add('GET', '/welcome', [Controller\Site::class, 'index'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup'])->middleware('auth');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/add_pacient', [Controller\Site::class, 'addPatients'])->middleware('auth');
Route::add(['GET', 'POST'], '/addDoctor', [Controller\Site::class, 'addDoctor'])->middleware('auth');
Route::add(['GET'], '/doctors', [Controller\Site::class, 'doctors'])->middleware('auth');
Route::add('GET', '/patients', [Controller\Site::class, 'patients'])->middleware('auth');
Route::add(['GET', 'POST'], '/createRecord', [Controller\Site::class, 'createRecord'])->middleware('auth');
Route::add(['GET', 'POST'], '/records', [Controller\Site::class, 'records'])->middleware('auth');
Route::add('GET', '/users', [Controller\Site::class, 'users'])->middleware('auth');

