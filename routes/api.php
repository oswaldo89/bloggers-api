<?php

use App\Http\Controllers\API\BloggerController;
use Illuminate\Support\Facades\Route;

Route::resource('blogger', BloggerController::class);
