<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(array('prefix'=>'api'), function() {
	# user
	Route::post('/login', array('as'=>'login', 'uses'=>'PlayerController@login'));
	Route::post('/register', array('as'=>'register', 'uses'=>'PlayerController@reg'));
	Route::get('/logout', array('as'=>'logout', 'uses'=>'PlayerController@logout'));
	Route::get('/player/{id}', array('as'=>'player_view', 'uses'=>'PlayerController@view'));
	Route::post('/check_login', 'PlayerController@check_login');

	# legacy item
	Route::get('/legacy/item/{entry}', array('as'=>'legacy_item_view', 'uses'=>'LegacyItemController@view'));
	Route::get('/legacy/item/{entry}/desc', array('as'=>'legacy_item_desc', 'uses'=>'LegacyItemController@desc'));

	#legacy wiki
	Route::get('/legacy/wiki/{param}', array('as'=>'legacy_wiki_view', 'uses'=>'LegacyWikiController@act'));
	Route::get('/legacy/wiki', array('as'=>'legacy_wiki_index', 'uses'=>'LegacyWikiController@index'));
	Route::post('/legacy/wiki', array('as'=>'legacy_wiki_store', 'uses'=>'LegacyWikiController@store'));

	#article
	Route::get('/article/{id}', array('as'=>'article_view', 'uses'=>'ArticleController@view'));
	Route::get('/articles', 'ArticleController@fetch');
	Route::get('/articles/{page}', 'ArticleController@fetch_page');
	Route::post('/publish_article', 'ArticleController@publish');
});

# index
Route::get('/', array('as'=>'index', 'uses'=>'SiteController@index'));

# default redirect
App::missing(function() {
    return View::make('index');
});