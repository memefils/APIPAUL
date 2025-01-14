<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactureController;

Route::apiResource('clients', ClientController::class);
Route::apiResource('factures', FactureController::class);