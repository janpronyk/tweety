<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/tweets', [TweetController::class, 'index'])->name('home');

    Route::post('/tweets', [TweetController::class, 'store']);

    Route::post('/follow/{user:username}', [FollowsController::class, 'store'])->name('follow');

    Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profile');

    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])
        ->name('profile.edit')
        ->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}', [ProfilesController::class, 'update'])
        ->name('profile.update')
        ->middleware('can:edit,user');


    Route::get('/explore', [ExploreController::class, 'index']);

});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
