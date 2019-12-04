<?php

use App\Models\Dump;
use Illuminate\Support\Facades\Response;

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

// Route::get('/dump', function() {
//     $headers = array(
//         "Content-type" => "text/csv",
//         "Content-Disposition" => "attachment; filename=wilayah.csv",
//         "Pragma" => "no-cache",
//         "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
//         "Expires" => "0"
//     );

//     $dump_data = Dump::all();

//     $callback = function() use ($dump_data)
//     {
//         $file = fopen('php://output', 'w');
//         // fputcsv($file, $columns);

//         foreach($dump_data as $data) {
//             fputcsv($file, array($data->wilayah));
//         }
//         fclose($file);
//     };
//     return Response::stream($callback, 200, $headers);
// });


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

        Route::group([
            'middleware' => ['access.log']
        ], function () {
            Route::get('/profile', 'ProfileController@index')->name('profile');
            Route::put('/profile/password', 'ProfileController@setPassword')->name('password');
            Route::put('/profile/basic', 'ProfileController@setBasicInfo')->name('basic');
        });
    });

    Route::group([
        'prefix'=>'admin',
        'as' => 'admin.',
        'namespace' => 'Admin',
        'middleware' => ['role:admin', 'access.log']
    ], function () {
        Route::get('/', function () { return redirect('admin/home'); });
        Route::get('/home', 'HomeController@index')->name('home');

        Route::resource('users', 'UserController')
        ->only(['index', 'create', 'store', 'show', 'edit', 'update']);;
        Route::get('users/{id}/delete', 'UserController@destroy');

        Route::resource('roles', 'RoleController')
        ->only(['index', 'create', 'store', 'show', 'edit', 'update']);
        Route::get('/roles/{id}/delete', 'RoleController@destroy');

        Route::resource('permissions', 'PermissionController')
        ->only(['index', 'store']);
        Route::get('/permissions/{id}/delete', 'PermissionController@destroy');

        Route::get('/settings', 'SettingController@index')->name('app.setting');


        Route::group([
            'prefix'=>'general',
            'as' => 'general.',
            'namespace' => 'Data\General'
        ], function () {
            Route::get('/', function () { return redirect('admin/home'); });

            // Route::group([
            //     'prefix'=>'assets',
            //     'as' => 'asset.',
            //     'namespace' => 'Asset'
            // ], function () {
            //     Route::get('/', 'AssetOverviewController@index')->name('overview');
            // });

            // Route::group([
            //     'prefix'=>'jobs',
            //     'as' => 'job.',
            //     'namespace' => 'Job'
            // ], function () {
            //     Route::get('/', 'JobOverviewController@index')->name('overview');
            // });

            // Route::group([
            //     'prefix'=>'zone',
            //     'as' => 'zone.',
            //     'namespace' => 'Zone'
            // ], function () {
            //     Route::get('/', 'ZoneOverviewController@index')->name('overview');
            // });

            Route::resource('trainings', 'TrainingTypeController')
            ->only(['index', 'show', 'store']);
            Route::put('/trainings', 'TrainingTypeController@update')->name('trainings.update');
            Route::get('/trainings/{id}/delete', 'TrainingTypeController@destroy');

            Route::resource('maritals', 'MaritalStatusController')
            ->only(['index', 'show', 'store']);
            Route::put('/maritals', 'MaritalStatusController@update')->name('maritals.update');
            Route::get('/maritals/{id}/delete', 'MaritalStatusController@destroy');

            Route::resource('educations', 'EducationController')
            ->only(['index', 'show', 'store']);
            Route::put('/educations', 'EducationController@update')->name('educations.update');
            Route::get('/educations/{id}/delete', 'EducationController@destroy');

            Route::resource('ethnics', 'EthnicController')
                ->only(['index', 'show', 'store']);
            Route::put('/ethnics', 'EthnicController@update')->name('ethnics.update');
            Route::get('/ethnics/{id}/delete', 'EthnicController@destroy');

        });


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
