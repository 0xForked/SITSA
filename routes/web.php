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

Route::get('/migrate-old-data', function() {
    // $kecamatan = OldDB::all();
    // foreach($kecamatan as $subdistrict) {
    //     Subdistrict::create([
    //         "name" => $subdistrict->kecamatan,
    //         "district_id" => $subdistrict->id_kabkota
    //     ]);
    // }
    // $kelurahan = OldDB::all();
    // $id_lanjutan = 0;
    // foreach($kelurahan as $urban_village) {
    //     if ($urban_village->id_kecamatan >= 113) {
    //         $id_lanjutan = $urban_village->id_kecamatan - 1;
    //         $urban_village->id_kecamatan = $id_lanjutan;
    //     }
    //     if ($id_lanjutan == 174) {
    //         $urban_village->id_kecamatan = 167;
    //     }
    //     UrbanVillage::create([
    //         "name" => $urban_village->kelurahan,
    //         "subdistrict_id" => $urban_village->id_kecamatan
    //     ]);
    // }
    // return response()->json($test);
});

Route::get('/', 'LandingController@index')->name('landing');

Route::get('/articles', function () { abort(404); })->name('articles');
Route::get('/articles/{slug}', function () { abort(404); })->name('articles.detail');
Route::get('/contacts', function () { abort(404); })->name('contacts');
Route::get('/faqs', function () { abort(404); })->name('faqs');
Route::get('/docs/{version}', function () { abort(404); })->name('docs');
Route::get('/helps', function () { abort(404); })->name('helps');
Route::get('/helps/{topic}', function () { abort(404); })->name('help.detail');


Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/route-verify', function () {
        if (Auth::user()->hasRole('root'))
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
        'middleware' => ['role:root,admin', 'access.log']
    ], function () {
        Route::get('/', function () { return redirect('admin/home'); });

        Route::get('/home', 'HomeController@index')->name('home');

        Route::group([
            'namespace' => 'Data\User'
        ], function () {
            Route::resource('users', 'UserController')
            ->only(['index', 'create', 'store', 'show', 'edit', 'update']);;
            Route::get('users/{id}/delete', 'UserController@destroy');

            Route::resource('roles', 'RoleController')
            ->only(['index', 'create', 'store', 'show', 'edit', 'update']);
            Route::get('/roles/{id}/delete', 'RoleController@destroy');

            Route::resource('permissions', 'PermissionController')
            ->only(['index', 'store']);
            Route::get('/permissions/{id}/delete', 'PermissionController@destroy');
        });

        Route::group([
            'prefix'=>'profile',
            'as' => 'profile.',
            'namespace' => 'Data\Profile'
        ], function () {

            Route::resource('congregations', 'CongregationController')
            ->only(['index', 'show', 'store']);
            // Route::put('/districts', 'DistrictController@update')->name('districts.update');
            // Route::get('/districts/{id}/delete', 'DistrictController@destroy');

            Route::resource('assets', 'AssetController')
            ->only(['index', 'show', 'store']);

            Route::group([
                'prefix'=>'commissions',
                'as' => 'commissions.',
            ], function () {
                Route::resource('bipra', 'BipraCommissionController')
                    ->only(['index', 'show', 'store']);

                Route::resource('work', 'WorkCommissionController')
                    ->only(['index', 'show', 'store']);

            });

            Route::resource('period', 'ServicePeriodController')
                ->only(['index', 'update', 'show', 'store']);

        });


        Route::group([
            'prefix'=>'region',
            'as' => 'region.',
            'namespace' => 'Data\Region'
        ], function () {

            Route::resource('districts', 'DistrictController')
            ->only(['index', 'show', 'store']);
            Route::put('/districts', 'DistrictController@update')->name('districts.update');
            Route::get('/districts/{id}/delete', 'DistrictController@destroy');

            Route::resource('subdistricts', 'SubdistrictController')
            ->only(['index', 'show', 'store']);
            Route::put('/subdistricts', 'SubdistrictController@update')->name('subdistricts.update');
            Route::get('/subdistricts/{id}/delete', 'SubdistrictController@destroy');

            Route::resource('urbanvillages', 'UrbanVillageController')
            ->only(['index', 'show', 'store']);
            Route::put('/urbanvillages', 'UrbanVillageController@update')->name('urbanvillages.update');
            Route::get('/urbanvillages/{id}/delete', 'UrbanVillageController@destroy');

            Route::resource('topographies', 'TopographyController')
            ->only(['index', 'show', 'store']);
            Route::put('/topographies', 'TopographyController@update')->name('topographies.update');
            Route::get('/topographies/{id}/delete', 'TopographyController@destroy');

            Route::resource('regions', 'RegionController')
            ->only(['index', 'show', 'store']);
            Route::put('/regions', 'RegionController@update')->name('regions.update');
            Route::get('/regions/{id}/delete', 'RegionController@destroy');

            Route::resource('positions', 'RegionPositionController')
            ->only(['index', 'show', 'store']);
            Route::put('/positions', 'RegionPositionController@update')->name('positions.update');
            Route::get('/positions/{id}/delete', 'RegionPositionController@destroy');

        });

        Route::group([
            'prefix'=>'general',
            'as' => 'general.',
            'namespace' => 'Data\General'
        ], function () {
            Route::get('/', function () { return redirect('admin/home'); });

            Route::group([
                'prefix'=>'assets',
                'as' => 'assets.',
                'namespace' => 'Asset'
            ], function () {
                // Route::get('/', 'AssetOverviewController@index')->name('overview');

                Route::resource('conditions', 'AssetConditionController')
                ->only(['index', 'show', 'store']);
                Route::put('/conditions', 'AssetConditionController@update')->name('conditions.update');
                Route::get('/conditions/{id}/delete', 'AssetConditionController@destroy');

                Route::resource('managers', 'AssetManagerController')
                ->only(['index', 'show', 'store']);
                Route::put('/managers', 'AssetManagerController@update')->name('managers.update');
                Route::get('/managers/{id}/delete', 'AssetManagerController@destroy');

                Route::resource('obtains', 'AssetObtainController')
                ->only(['index', 'show', 'store']);
                Route::put('/obtains', 'AssetObtainController@update')->name('obtains.update');
                Route::get('/obtains/{id}/delete', 'AssetObtainController@destroy');

                Route::resource('types', 'AssetTypeController')
                ->only(['index', 'show', 'store']);
                Route::put('/types', 'AssetTypeController@update')->name('types.update');
                Route::get('/types/{id}/delete', 'AssetTypeController@destroy');
            });

            Route::resource('ethnics', 'EthnicController')
            ->only(['index', 'show', 'store']);
            Route::put('/ethnics', 'EthnicController@update')->name('ethnics.update');
            Route::get('/ethnics/{id}/delete', 'EthnicController@destroy');

            Route::resource('bloods', 'BloodTypeController')
            ->only(['index', 'show']);
            Route::put('/bloods', 'BloodTypeController@update')->name('bloods.update');
            Route::get('/bloods/{id}/delete', 'BloodTypeController@destroy');

            Route::resource('disabilities', 'DisabilityTypeController')
            ->only(['index', 'show', 'store']);
            Route::put('/disabilities', 'DisabilityTypeController@update')->name('disabilities.update');
            Route::get('/disabilities/{id}/delete', 'DisabilityTypeController@destroy');

            Route::resource('trainings', 'TrainingTypeController')
            ->only(['index', 'show', 'store']);
            Route::put('/trainings', 'TrainingTypeController@update')->name('trainings.update');
            Route::get('/trainings/{id}/delete', 'TrainingTypeController@destroy');

            Route::resource('jobs', 'JobTypeController')
            ->only(['index', 'show', 'store']);
            Route::put('/jobs', 'JobTypeController@update')->name('jobs.update');
            Route::get('/jobs/{id}/delete', 'JobTypeController@destroy');

            Route::resource('educations', 'EducationController')
            ->only(['index', 'show', 'store']);
            Route::put('/educations', 'EducationController@update')->name('educations.update');
            Route::get('/educations/{id}/delete', 'EducationController@destroy');

            Route::resource('member-moves', 'MemberMoveTypeController')
            ->only(['index', 'show', 'store']);
            Route::put('/member-moves', 'MemberMoveTypeController@update')->name('member-moves.update');
            Route::get('/member-moves/{id}/delete', 'MemberMoveTypeController@destroy');

            Route::resource('family-trees', 'FamilyTreeController')
            ->only(['index', 'show', 'store']);
            Route::put('/family-trees', 'FamilyTreeController@update')->name('family-trees.update');
            Route::get('/family-trees/{id}/delete', 'FamilyTreeController@destroy');

            Route::resource('maritals', 'MaritalStatusController')
            ->only(['index', 'show', 'store']);
            Route::put('/maritals', 'MaritalStatusController@update')->name('maritals.update');
            Route::get('/maritals/{id}/delete', 'MaritalStatusController@destroy');

        });


        Route::group([
            'namespace' => 'Site'
        ], function () {
            Route::get('/settings', 'SettingController@index')->name('app.setting');
            Route::put('/settings/generals', 'SettingController@updateGeneralData')->name('app.setting.generals');
            Route::put('/settings/contacts', 'SettingController@updateContactData')->name('app.setting.contacts');
            Route::get('/settings/databases/backup', 'DatabaseSettingController@create')->name('setting.database.backup');
            Route::get('/settings/databases/download/{file_name}', 'DatabaseSettingController@download')->name('setting.database.download');
            Route::get('/settings/databases/delete/{file_name}', 'DatabaseSettingController@delete')->name('setting.database.delete');
            Route::put('/settings/databases/restore', 'DatabaseSettingController@restore')->name('setting.database.restore');
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
