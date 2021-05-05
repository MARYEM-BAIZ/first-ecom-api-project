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

Route::apiResource("categories","CategorieController");




Route::post('souscategories',['uses'=>'SouscategorieController@store','as'=>'pagesouscategorie.store']);

Route::put('souscategories/{souscategorie_id}',['uses'=>'SouscategorieController@update','as'=>'pagesouscategorie.update']);

Route::delete('souscategories/{souscategorie_id}',['uses'=>'SouscategorieController@destroy','as'=>'pagesouscategorie.destroy']);

Route::get('categories/{categorie_id}/souscategories/{souscategorie_id}',['uses'=>'SouscategorieController@show','as'=>'pagesouscategorie.show']);

Route::get('categories/{categorie_id}/souscategories',['uses'=>'SouscategorieController@index','as'=>'pagesouscategorie.index']);

Route::get('souscategories',['uses'=>'SouscategorieController@souscategories','as'=>'pagesouscategorie.souscategories']);

Route::get('souscategories/{souscategorie_id}',['uses'=>'SouscategorieController@souscategorie','as'=>'pagesouscategorie.souscategorie']);





Route::post('articles',['uses'=>'ArticleController@store','as'=>'pagearticle.store']);

Route::put('articles/{article_id}',['uses'=>'ArticleController@update','as'=>'pagearticle.update']);

Route::delete('articles/{article_id}',['uses'=>'ArticleController@destroy','as'=>'pagearticle.destroy']);

Route::get('articles',['uses'=>'ArticleController@articles','as'=>'pagearticles.articles']);

Route::get('articles/{article_id}',['uses'=>'ArticleController@article','as'=>'pagearticle.article']);



Route::post('users',['uses'=>'AuthController@register','as'=>'pageuser.register']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
