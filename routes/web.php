<?php

use Illuminate\Support\Facades\Route;


Route::inertia('/hello', 'Hello');

Route::get('/', function () {
    return view('dashboard', [
        'clubs' => \App\Models\Club::all()->count(),
        'members' => \App\Models\Member::all()->count(),
    ]);
});

Route::get('/clubs', [App\Http\Controllers\ClubController::class, 'index'])->name('clubs.index');
Route::get('/clubs/create', [App\Http\Controllers\ClubController::class, 'create'])->name('clubs.create');
Route::post('/clubs', [App\Http\Controllers\ClubController::class, 'store'])->name('clubs.store');
Route::get('/clubs/{club}', [App\Http\Controllers\ClubController::class, 'show'])->name('clubs.show');
Route::get('/clubs/{club}/edit', [App\Http\Controllers\ClubController::class, 'edit'])->name('clubs.edit');
Route::patch('/clubs/{club}', [App\Http\Controllers\ClubController::class, 'update'])->name('clubs.update');
Route::get('/clubs/{club}/delete', [App\Http\Controllers\ClubController::class, 'destroy'])->name('clubs.destroy');

Route::get('/members', [App\Http\Controllers\MemberController::class, 'index'])->name('members.index');
Route::get('/members/create', [App\Http\Controllers\MemberController::class, 'create'])->name('members.create');
Route::post('/members', [App\Http\Controllers\MemberController::class, 'store'])->name('members.store');
Route::get('/members/{member}', [App\Http\Controllers\MemberController::class, 'show'])->name('members.show');
Route::get('/members/{member}/edit', [App\Http\Controllers\MemberController::class, 'edit'])->name('members.edit');
Route::patch('/members/{member}', [App\Http\Controllers\MemberController::class, 'update'])->name('members.update');
Route::get('/members/{member}/delete', [App\Http\Controllers\MemberController::class, 'destroy'])->name('members.destroy');

