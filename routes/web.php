<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::prefix('admin')->group(function () {
    Route::get('/add',
        [PropertyController::class, 'show'])->name('property_page');
    Route::post('/add',
        [PropertyController::class, 'add'])->name('add-property');
    Route::post('/update/{id}',
        [PropertyController::class, 'updateProperty']);
    Route::delete('/delete/{id}',
        [PropertyController::class, 'deleteProperty']);
    Route::get('/xml-feed',
        [PropertyController::class, 'generateXmlFeed'])->name('xml_feed');

});



