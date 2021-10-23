<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


$namespace = 'App\Http\Controllers';

//Home
Route::group(
    ['namespace' => $namespace, 'prefix' => '/'],
    function () {
        Route::get('/', 'PageHomeController@home')->name('home');
        Route::get('/all-new-post', 'PageHomeController@allPostNew')->name('allPostNew');
        Route::get('all-new-category/{id}', 'PageHomeController@allNewCategory')->name('allNewCategory');
    }
);

Route::get('/thanhnguyenduyy', function () {
    return view('admin.index');
});

// Admin
Route::group(
    ['namespace' => $namespace, 'prefix' => 'thanhnguyenduyy'],
    function () {
        //Slide
        Route::get('list-of-slide', 'SlideManagementController@ListOfSlide')->name('ListOfSlide');
        Route::get('slide-detail/create-slide', 'SlideManagementController@CreateSlide')->name('CreateSlide');
        Route::post('slide-detail/create-slide/insert-slide', 'SlideManagementController@InsertSlide')->name('InsertSlide');
        Route::get('slide-detail/delete-slide/{id}', 'SlideManagementController@DeleteSlide')->name('DeleteSlide');

        //Aboutme
        Route::get('list-of-about', 'AboutManagementController@ListOfAbout')->name('ListOfAbout');
        Route::get('about-detail/create-about', 'AboutManagementController@CreateAbout')->name('CreateAbout');
        Route::post('about-detail/create-about/insert-about', 'AboutManagementController@InsertAbout')->name('InsertAbout');
        Route::get('about-detail/delete-about/{id}', 'AboutManagementController@DeleteAbout')->name('DeleteAbout');

        //New_Category
        Route::get('list-of-newcategory', 'NewCategoryManagementController@ListOfNewCategory')->name('ListOfNewCategory');
        Route::get('newcategory-detail/create-newcategory', 'NewCategoryManagementController@CreateNewCategory')->name('CreateNewCategory');
        Route::post('newcategory-detail/create-newcategory/insert-newcategory', 'NewCategoryManagementController@InsertNewCategory')->name('InsertNewCategory');
        Route::get('newcategory-detail/delete-newcategory/{id}', 'NewCategoryManagementController@DeleteNewCategory')->name('DeleteNewCategory');

        //News
        Route::get('list-of-new', 'NewManagementController@ListOfNew')->name('ListOfNew');
        Route::get('new-detail/create-new', 'NewManagementController@CreateNew')->name('CreateNew');
        Route::post('new-detail/create-new/insert-new', 'NewManagementController@InsertNew')->name('InsertNew');
        Route::get('new-detail/edit-new/{id}', 'NewManagementController@EditNew')->name('EditNew');
        Route::post('new-detail/edit-new/{id}', 'NewManagementController@UpdateNew')->name('UpdateNew');
        Route::get('new-detail/delete-new/{id}', 'NewManagementController@DeleteNew')->name('DeleteNew');

        //Menu
        Route::get('list-of-menu', 'MenuManagementController@ListOfMenu')->name('ListOfMenu');
        Route::get('menu-detail/create-menu', 'MenuManagementController@CreateMenu')->name('CreateMenu');
        Route::post('menu-detail/create-menu/insert-menu', 'MenuManagementController@InsertMenu')->name('InsertMenu');
        Route::get('menu-detail/delete-menu/{id}', 'MenuManagementController@DeleteMenu')->name('DeleteMenu');
    }
);
