<?php

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


Route::get('/test', function () {
    dd(config('app.debug'));
})->name('test');

Route::get('/', function () { return view('landing'); })->name('landing');

Route::get('/faqs', function () { abort(404); })->name('faqs');

Route::get('/docs', function () { abort(404); })->name('docs');

Route::get('/helps', function () { abort(404); })->name('helps');

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/route-verify', function () {
        if (Auth::user()->hasRole('admin'))
            return redirect('admin/home');
        if (Auth::user()->hasRole('staff'))
            return redirect('staff/home');
    });

    Route::group([
        'prefix'=>'account',
        'as' => 'account.',
        'namespace' => 'Account'
    ], function () {
        Route::group(['prefix' => 'activity'], function () {
            // Dashboards
            Route::get('/', 'ActivityController@index')->name('activity');
            Route::get('/cleared', ['uses' => 'ActivityController@showClearedActivityLog'])->name('cleared');
            // Drill Downs
            Route::get('/log/{id}', 'ActivityController@show');
            Route::get('/cleared/log/{id}', 'ActivityController@showClearedAccessLogEntry');
            // Forms
            Route::delete('/clear-activity', ['uses' => 'ActivityController@clearActivityLog'])->name('clear-activity');
            Route::delete('/destroy-activity', ['uses' => 'ActivityController@destroyAccessActivityLog'])->name('destroy-activity');
            Route::post('/restore-log', ['uses' => 'ActivityController@restoreClearedAccessActivityLog'])->name('restore-activity');
        });

        Route::get('/profile', 'ProfileController@index')->name('profile');
    });


    Route::group([
        'prefix'=>'admin',
        'as' => 'admin.',
        'namespace' => 'Admin',
        'middleware' => ['role:admin', 'access.log']
    ], function () {
        Route::get('/', function () { return redirect('admin/home'); });

        Route::get('/home', 'HomeController@index')->name('home');

        // Route::get('/home', function () {
        //     echo "hello from admin page";
        // });
    });

    Route::group([
        'prefix'=>'staff',
        'as' => 'staff.',
        'namespace' => 'Staff',
        'middleware' => ['role:staff', 'access.log']
    ], function () {
        Route::get('/', function () { return redirect('staff/home'); });

        Route::get('/home', 'HomeController@index')->name('home');

        // Route::get('/home', function () {
        //     echo "hello from staff page";
        // });

    });

});

