<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package! rswa';
// });

// Route::get('Lasa/test', 'EdgeWizz\Lasa\Controllers\LasaController@test')->name('test');

Route::post('fmt/lasa/store', 'EdgeWizz\Lasa\Controllers\LasaController@store')->name('fmt.lasa.store');

Route::post('fmt/lasa/csv', 'EdgeWizz\Lasa\Controllers\LasaController@csv_upload')->name('fmt.lasa.csv');

Route::post('fmt/lasa/update/{id}', 'EdgeWizz\Lasa\Controllers\LasaController@update')->name('fmt.lasa.update');


Route::any('fmt/lasa/inactive/{id}',  'EdgeWizz\Lasa\Controllers\LasaController@inactive')->name('fmt.lasa.inactive');
Route::any('fmt/lasa/active/{id}',  'EdgeWizz\Lasa\Controllers\LasaController@active')->name('fmt.lasa.active');
