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

        Route::post('Add','Back\SliderController@add')->name('slider-add');
        Route::post('Edit/{id}','Back\SliderController@edit')->name('slider-edit');
        Route::get('Delete/{id}','Back\SliderController@delete')->name('slider-delete');
    });

    // Places
    Route::group(['prefix'=>'Places'], function(){
        Route::get('','Back\PlaceController@index')->name('Admin.Places');

        
        Route::post('Add','Back\PlaceController@add')->name('places-add');
        Route::post('Edit/{id}','Back\PlaceController@edit')->name('places-edit');
        Route::get('Delete/{id}','Back\PlaceController@delete')->name('places-delete');
    });
    // Tours
    Route::group(['prefix'=>'Tours'], function(){
        Route::get('','Back\TourController@index')->name('Admin.Tours');

        Route::post('Add','Back\TourController@add')->name('tours-add');
        Route::post('Edit/{id}','Back\TourController@edit')->name('tours-edit');
        Route::get('Delete/{id}','Back\TourController@delete')->name('tours-delete');
    });
    //Blogs
    Route::group(['prefix'=>'Blogs'], function(){
        Route::get('','Back\BlogController@index')->name('Admin.Blogs');

        Route::post('Add','Back\BlogController@add')->name('blogs-add');
        Route::post('Edit/{id}','Back\BlogController@edit')->name('blogs-edit');
        Route::get('Delete/{id}','Back\BlogController@delete')->name('blogs-delete');
    });
    //Informations
    Route::group(['prefix'=>'Informations'], function(){
        Route::get('','Back\InformationController@index')->name('Admin.Informations');

        Route::post('Add','Back\InformationController@add')->name('info-add');
        Route::post('Edit/{id}','Back\InformationController@edit')->name('info-edit');
        Route::get('Delete/{id}','Back\InformationController@delete')->name('info-delete');
    });
    //Category
    Route::group(['prefix'=>'Category'], function(){
        Route::get('','Back\CategoryController@index')->name('Admin.Category');

        Route::post('Add','Back\CategoryController@add')->name('category-add');
        Route::get('Delete/{id}','Back\CategoryController@delete')->name('category-delete');
    });

});