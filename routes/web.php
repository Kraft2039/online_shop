<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\MainController@main')->name('layouts.main');

Route::group(['namespace' => '\App\Http\Controllers\Category' ], function (){
    Route::get('/categories', 'IndexController')->name('categories.index');
    Route::get('/categories/{category}', 'ShowController')->name('categories.show');

});

Route::group(['namespace' => '\App\Http\Controllers\L2Category' ], function (){
    Route::get('/l2_categories/{l2_category}', 'ShowController')->name('l2_categories.show');
});

Route::group(['namespace' => '\App\Http\Controllers\L3Category' ], function (){
    Route::get('/l3_categories/{l3_category}', 'ShowController')->name('l3_categories.show');
});

Route::group(['namespace' => '\App\Http\Controllers\Product' ], function (){
    Route::get('/products/create', 'CreateController')->name('products.create');
    Route::post('/products', 'StoreController')->name('products.store');
    Route::get('/products/{product}/edit', 'EditController')->name('products.edit');
    Route::patch('/products/{product}', 'UpdateController')->name('products.update');
});

Route::group(['namespace' => '\App\Http\Controllers\Purchas' ], function (){
    Route::get('/purchases', 'IndexController')->name('purchases.index');
    Route::post('/purchases', 'StoreController')->name('purchases.store');
});

Route::get('/reports', '\App\Http\Controllers\Api\ReportController@getReport')->name('reports.getReport');

Route::get('/categories/{category}/edit', '\App\Http\Controllers\CategoryController@edit')->name('categories.edit');
Route::patch('/categories/{category}', '\App\Http\Controllers\CategoryController@update')->name('categories.update');
