<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
//    Route::group(['middleware' => ['role:Admin']], function () {
//        CRUD::resource('role', 'Admin\Permission\RoleCrudController');
//        CRUD::resource('user', 'Admin\Permission\UserCrudController');
//    });
}); // this should be the absolute last line of this file

//Route::get('/home', function() {
//    if(\Auth::check()) {
//        return redirect()->route('backpack.dashboard');
//    } else {
//        abort(404);
//    }
//});

Route::post('admin/password/email', function() {
    abort(404);
});
Route::post('admin/password/reset', function() {
    abort(404);
});
Route::get('admin/password/reset', function() {
    abort(404);
});
Route::get('admin/password/reset/{token}', function() {
    abort(404);
});
