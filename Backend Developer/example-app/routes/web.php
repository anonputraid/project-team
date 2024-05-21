<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPagesController;

Route::get('/', [LandingPagesController::class, 'home']);
