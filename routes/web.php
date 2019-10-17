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

// dd(parse_url('https://aasumitro.id/blog'))
// hasilnya
// array:3 [
//   "scheme" => "https"
//   "host" => "aasumitro.id"
//   "path" => "/blog"
// ]

Route::get('/test', function() {
    // test your function here
});


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
    })->name('route-verify');

    Route::group([
        'prefix'=>'account',
        'as' => 'account.',
        'namespace' => 'Account'
    ], function () {
        Route::get('/', function() { return redirect('account/profile'); });
        Route::group(['prefix' => 'activity'], function () {
            Route::get('/', 'ActivityController@index')->name('activity');
            Route::get('/cleared', ['uses' => 'ActivityController@showClearedActivityLog'])->name('cleared');
            Route::get('/log/{id}', 'ActivityController@show');
            Route::get('/cleared/log/{id}', 'ActivityController@showClearedAccessLogEntry');
            Route::delete('/clear-activity', ['uses' => 'ActivityController@clearActivityLog'])->name('clear-activity');
            Route::delete('/destroy-activity', ['uses' => 'ActivityController@destroyAccessActivityLog'])
                ->name('destroy-activity')
                ->middleware('password.confirm');
            Route::post('/restore-log', ['uses' => 'ActivityController@restoreClearedAccessActivityLog'])->name('restore-activity');
        });
        Route::get('/profile', 'ProfileController@index')->name('profile');

        Route::put('/profile/password', 'ProfileController@setPassword')->name('password');
        Route::put('/profile/basic', 'ProfileController@setBasicInfo')->name('basic');

    });


    Route::group([
        'prefix'=>'admin',
        'as' => 'admin.',
        'namespace' => 'Admin',
        'middleware' => ['role:admin', 'access.log']
    ], function () {
        Route::get('/', function () { return redirect('admin/home'); });
        Route::get('/home', 'HomeController@index')->name('home');
    });

    Route::group([
        'prefix'=>'staff',
        'as' => 'staff.',
        'namespace' => 'Staff',
        'middleware' => ['role:staff', 'access.log']
    ], function () {
        Route::get('/', function () { return redirect('staff/home'); });
        Route::get('/home', 'HomeController@index')->name('home');
    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
