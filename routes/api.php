<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\FactureController;

Route::apiResource('clients', ClientController::class);
Route::apiResource('factures', FactureController::class);