<?php

// Front

Route::get('/', "Front\HomeController@index")->name("main");
Route::get('/Places', "Front\PlaceController@index")->name("places");
Route::get('/Tours', "Front\TourController@index")->name("tours");
Route::get('/About', "Front\AboutController@index")->name("about");
Route::get('/Blogs', "Front\BlogController@index")->name("blogs");
Route::get('/Contact', "Front\ContactController@index")->name("contact");

// Back
Route::group(['prefix'=>'Admin'], function(){
    // Main
    Route::get('','Back\MainController@index')->name('Admin');

    // Slider
    Route::group(['prefix'=>'Slider'], function(){
        Route::get('','Back\SliderController@index')->name('Admin.Slider');
    });

    // Places
    Route::group(['prefix'=>'Places'], function(){
        Route::get('','Back\PlaceController@index')->name('Admin.Places');
    });
    // Tours
    Route::group(['prefix'=>'Tours'], function(){
        Route::get('','Back\TourController@index')->name('Admin.Tours');
    });
    //Blogs
    Route::group(['prefix'=>'Blogs'], function(){
        Route::get('','Back\BlogController@index')->name('Admin.Blogs');
    });
    //Informations
    Route::group(['prefix'=>'Informations'], function(){
        Route::get('','Back\InformationController@index')->name('Admin.Informations');
    });
    //Category
    Route::group(['prefix'=>'Category'], function(){
        Route::get('','Back\CategoryController@index')->name('Admin.Category');
    });




// EXAMPLE

    //Production
    // Route::group(['prefix'=>'Production'], function(){
    //     Route::get('','Back\ProductController@index')->name('Back.Production');
    //     Route::get('Add','Back\ProductController@add_view')->name('Back.Production.Add_View');
    //     Route::get('Edit/{id}','Back\ProductController@edit_view')->name('Back.Production.Edit_View');

    //     Route::post('Add','Back\ProductController@add')->name('Back.Production.Add');
    //     Route::post('Edit/{id}','Back\ProductController@edit')->name('Back.Production.Edit');
    //     Route::get('Delete/{id}','Back\ProductController@delete')->name('Back.Production.Delete');
    // });

});