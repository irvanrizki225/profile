<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('education', 'API\EducationController@get');
route::get('experience', 'API\ExperienceController@get');
route::get('blog', 'API\BlogController@get');
route::get('project', 'API\ProjectController@get');
route::get('skill', 'API\SkillController@get');
route::get('category', 'API\CategoryController@get');
route::get('tag', 'API\TagController@get');
// route::get('about', 'AboutController@get');