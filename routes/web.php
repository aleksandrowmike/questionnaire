<?php

Route::fallback(function () {
    View::addExtension('html', 'php');
    return View::make('index');
});

Route::any('test1', function ($id) {
    Artisan::call('storage:link');
});
