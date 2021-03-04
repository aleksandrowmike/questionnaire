<?php

Route::group(['prefix' => 'v1', 'namespace' => 'Api/v1'], function () {
    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::post('sign-in', 'AuthController@signIn')
            ->name('auth.sign-in');

        Route::post('forgot-password', 'AuthController@forgotPassword')
            ->name('auth.forgot-password');

        Route::get('me', 'AuthController@me')->name('auth.me')->middleware('auth:api');
    });

    Route::group(['middleware' => 'auth:api'], function () {
        Route::apiResource('faculties', 'FacultyController')
            ->only(['index', 'store', 'update', 'destroy'])
            ->names('facylties');

        Route::apiResource('students', 'StudentController')
            ->only(['index', 'store', 'update', 'destroy'])
            ->names('students');

        Route::apiResource('employers', 'EmployerController')
            ->only(['index', 'store', 'update', 'destroy'])
            ->names('employers');
    });
});


// Deprecated

// Route::group(['prefix' => 'auth'], function () {
//     Route::post('sign-up', 'AuthController@signUp')
//         ->name('auth.sign-up');

//     Route::get('user', 'AuthController@user')
//         ->name('auth.user')
//         ->middleware('auth:api');
// });

// Route::resource('departments', 'DepartmentController')
//     ->only(['index', 'show'])
//     ->names('departments');

// Route::resource('students', 'StudentController')
//     ->only(['store'])
//     ->names('students');

// Route::middleware('auth:api')->group(function () {
//     Route::prefix('students')->group(function () {
//         Route::get('department/{id}', 'StudentController@showByDepartment')
//             ->name('students.department');
//         Route::get('department/{id}/all', 'StudentController@showByDepartmentAll')
//             ->name('students.department.all');
//         Route::get('direction/{id}', 'StudentController@showByDirection')
//             ->name('students.directions');

//         Route::get('filter', 'StudentController@filter')
//             ->name('students.filter');
//     });

//     Route::resource('directions', 'DirectionController')
//         ->only(['show']);

//     Route::resource('students', 'StudentController')
//         ->only(['index','update', 'delete']);

// //    Route::resource('statistics', 'StatisticsController')
// //        ->only(['index','show']);
// });
