<?php

use Illuminate\Support\Facades\Route;
use Muazan\Dell\Controllers\InspirationController;

Route::get('inspire', function (Muazan\Dell\Inspire $inspire) {
    return $inspire->alert();
});

// Route::get('greeting', [
//     Muazan\Dell\Controllers\InspirationController::class,
//     'greeting',
// ]);

Route::get('inspire', [InspirationController::class, 'google']);
// Route::get('inspire', [InspirationController::class, 'yahooo']);
