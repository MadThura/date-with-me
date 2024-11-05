<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        "message" => "Welcome from Date with me Api",
    ]);
});
