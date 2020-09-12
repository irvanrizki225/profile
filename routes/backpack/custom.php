<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
    ],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('blog', 'BlogCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('education', 'EducationCrudController');
    Route::crud('experience', 'ExperienceCrudController');
    Route::crud('project', 'ProjectCrudController');
    Route::crud('skill', 'SkillCrudController');
    Route::crud('article', 'ArticleCrudController');
    Route::crud('tag', 'TagCrudController');
}); // this should be the absolute last line of this file