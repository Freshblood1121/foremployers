<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\FilterDataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('candidates')->group(function () {

    Route::get('/all', [CandidateController::class, 'index'])
        ->name('candidates.all');

    Route::get('/search/{id}', [CandidateController::class, 'show'])
        ->name('candidates.search');
});

Route::prefix('vacancy')->as('vacancy.')->group(function () {

    Route::post('/create', [CandidateController::class, 'store'])
        ->name('create');

    Route::put('/update/{id}', [CandidateController::class, 'update'])
        ->name('update');

    Route::delete('/delete', [CandidateController::class, 'destroy'])
        ->name('delete');

    Route::get('/sort/date', [FilterDataController::class, 'sortByDate'])
        ->name('sort.date');

    Route::get('/sort/salary', [FilterDataController::class, 'salaryAsc'])
        ->name('sort.salary');
});
