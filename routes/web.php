<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;

// Main home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Blog routes
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');

// Project portfolio routes
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Resume/CV route
Route::get('/resume', [ResumeController::class, 'show'])->name('resume.show');
