<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
	
	Route::get('/',[
	'uses' => 'eventcontroller@index',
	'as' => 'welcome',
	]);

// add event 
Route::get('addevent',[
 'uses' => 'eventcontroller@pageevent',
 'as' => 'events.event',
 
]);
//event update
Route::post('eventupdate',[
'uses' => 'Updatecontroller@update',
 'as' => 'update',
]);
//search event
Route::post('result',[
'uses' => 'eventcontroller@search',
'as' => 'search',
]);
 Route::post('addevent', [
 'uses' => 'eventcontroller@postevent',
 'as' => 'home',
 ]);
 Route::get('admin',[
 'uses' => 'eventcontroller@admin',
 'as' => 'admin.login',
 ]);
 Route::post('admin',[
 'uses' => 'eventcontroller@login',
 'as' => 'admin.member',
 ]);
 Route::get('delete/{id}',[
 'uses' => 'eventcontroller@delete',
 'as' => 'delete',
 ]);
 Route::get('post/{id}',[
 'uses' => 'eventcontroller@post',
 'as' => 'post',
 ]);
 Route::get('events',[
 'uses' => 'eventcontroller@showevent',
 'as' => 'events.showevent',
 ]);

});
