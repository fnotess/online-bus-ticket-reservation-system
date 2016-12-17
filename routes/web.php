<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::group(['middleware'=>['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/dashboard', function () {
        return view('vendor.dashboard');
    })->name('page2');

    Route::get('/conductorPage',[
        'uses'=>'tripController@displayAllTrips',
        'as'=>'conductorPage'
        //return view('conductorPage');
    ]);//->name('conductorPage');

    Route::get('/ticketPage', function () {
        return view('ticketPage');
    })->name('ticketPage');
//    Route::get('/trips',[
//        'uses'=>'tripController@displayAllTrips',
//        'as'=>'trips'
//
//    ]);

    Route::get('/get-order-ID/{trip_ID}',[
        'uses'=>'tripController@getOrderID',
        'as'=>'getOrderID'

    ]);

    Route::post('/getMID',[
        'uses'=>'tripController@getMID',
        'as'=>'getMID'
        //return view('conductorPage');
    ]);//->name('conductorPage');


   Route::get('/tickets',function(){

        return view('tickets');
    })->name('tickets');


//    Route::get('/get-ticket-ID/{myarray}',[
//        'uses'=>'tripController@getOrderID',
//        'as'=>'tickets'
//
//    ]);





    Route::post('/signin',[
        'uses'=>'userController@postSignIn',
        'as'=>'signin'

    ]);

    Route::post('/signup',[
        'uses'=>'userController@postSignUp',
        'as'=>'signup'

    ]);


    

    Route::post('/createpost',[
        'uses'=>'PostController@postCreatePost',
        'as'=>'post.create'

    ]);

    Route::get('/logout',[
        'uses'=>'userController@getLogout',
        'as'=>'logout'

    ]);

    Route::get('/delete-post/{post_id}',[
        'uses'=>'PostController@getDeletePost',
        'as'=>'post.delete'
        //'middleware'=>'auth'
    ]);


});
