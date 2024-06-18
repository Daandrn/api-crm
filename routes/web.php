<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'api-crm' => "0.01",
        'Laravel' => app()->version()
    ]);
});
