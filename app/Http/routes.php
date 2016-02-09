<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//HOME
Route::group(['namespace' => 'Frontend'], function() {

	Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
	Route::get('team', ['as' => 'home.team', 'uses' => 'HomeController@team']);

	//BLOG
	Route::group(['prefix' => 'blog'], function(){
		Route::get('/', ['as' => 'home.blog', 'uses' => 'HomeController@blog']);
		Route::get('{id}-{url}', ['as' => 'home.blog.noticia', 'uses' => 'HomeController@noticia']);
		Route::get('categoria/{url}', ['as' => 'home.blog.categoria', 'uses' => 'HomeController@noticiaCategoria']);
		Route::get('tag/{url}', ['as' => 'home.blog.tag', 'uses' => 'HomeController@noticiaTag']);
	});

	Route::get('fotos', ['as' => 'home.fotos', 'uses' => 'HomeController@fotos']);
	Route::get('fotos-nota', ['as' => 'home.fotos.nota', 'uses' => 'HomeController@fotosNota']);
	Route::get('videos', ['as' => 'home.videos', 'uses' => 'HomeController@videos']);
	Route::get('contacto', ['as' => 'home.contacto', 'uses' => 'HomeController@contacto']);
	Route::get('calendario', ['as' => 'home.calendario', 'uses' => 'HomeController@calendario']);
	Route::get('patrocinadores', ['as' => 'home.patrocinadores', 'uses' => 'HomeController@patrocinadores']);
	Route::get('historia', ['as' => 'home.historia', 'uses' => 'HomeController@historia']);

});


//IMAGEN
Route::get('/upload/{folder}/{width}x{height}/{image}', ['as' => 'image.adaptiveResize', 'uses' => 'ImageController@adaptiveResize']);

//LOGIN - PASSWORD
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {

	Route::get('/', ['as' => 'admin.home', 'uses' => 'HomeController@index']);

	//POST
	Route::resource('post', 'PostsController');

	//POST - URLS
	Route::post('post/url', ['as' => 'admin.post.slugUrl', 'uses' => 'PostsController@slugUrl']);
	Route::get('post-history/{id}', ['as' => 'admin.post.history', 'uses' => 'PostsController@history']);
	Route::get('post-deletes', ['as' => 'admin.post.listsDeletes', 'uses' => 'PostsController@listsDeletes']);
	Route::delete('post-deletes/destroy/{id}', ['as' => 'admin.post.listsDeletes.destroy', 'uses' => 'PostsController@destroyTotal']);
	Route::post('post-deletes/restore/{id}', ['as' => 'admin.post.listsDeletes.restore', 'uses' => 'PostsController@restore']);

	//GALERIA DE FOTOS DE POST
	Route::group(['prefix' => 'post/photos'], function(){
		Route::get('{post}', ['as' => 'admin.post.photosList', 'uses' => 'PostsController@photosList' ]);
	    Route::post('{post}/order', ['as' => 'admin.post.photosOrder', 'uses' => 'PostsController@photosOrder' ]);
	    Route::get('{post}/upload', ['as' => 'admin.post.photosCreate', 'uses' => 'PostsController@photosCreate' ]);
	    Route::post('{post}/upload', ['as' => 'admin.post.photosStore', 'uses' => 'PostsController@photosStore' ]);
	    Route::delete('{post}/delete/{id}', ['as' => 'admin.post.photosDelete', 'uses' => 'PostsController@photosDelete' ]);
	    Route::get('{post}/edit/{id}', ['as' => 'admin.post.photosEdit', 'uses' => 'PostsController@photosEdit' ]);
	    Route::put('{post}/edit/{id}', ['as' => 'admin.post.photosUpdate', 'uses' => 'PostsController@photosUpdate' ]);
	});    

    //CATEGORIAS
	Route::resource('category', 'CategoriesController');

	//TAGS
	Route::resource('tag', 'TagsController');

	//GALERIA
	Route::group(['prefix' => 'gallery'], function(){

		//GALERIA DE FOTOS
		Route::resource('photo', 'GalleryPhotosController');
		Route::get('photo-deletes', ['as' => 'admin.gallery.photo.listsDeletes', 'uses' => 'GalleryPhotosController@listsDeletes']);
		Route::delete('photo-deletes/destroy/{id}', ['as' => 'admin.gallery.photo.listsDeletes.destroy', 'uses' => 'GalleryPhotosController@destroyTotal']);
		Route::post('photo-deletes/restore/{id}', ['as' => 'admin.gallery.photo.listsDeletes.restore', 'uses' => 'GalleryPhotosController@restore']);
		Route::post('url', ['as' => 'admin.gallery.photo.slugUrl', 'uses' => 'GalleryPhotosController@slugUrl']);

		Route::group(['prefix' => 'photo/photos'], function(){			
			Route::get('{gallery}', ['as' => 'admin.gallery.photo.photosList', 'uses' => 'GalleryPhotosController@photosList' ]);
		    Route::post('{gallery}/order', ['as' => 'admin.gallery.photo.photosOrder', 'uses' => 'GalleryPhotosController@photosOrder' ]);
		    Route::get('{gallery}/upload', ['as' => 'admin.gallery.photo.photosCreate', 'uses' => 'GalleryPhotosController@photosCreate' ]);
		    Route::post('{gallery}/upload', ['as' => 'admin.gallery.photo.photosStore', 'uses' => 'GalleryPhotosController@photosStore' ]);
		    Route::delete('{gallery}/delete/{id}', ['as' => 'admin.gallery.photo.photosDelete', 'uses' => 'GalleryPhotosController@photosDelete' ]);
		    Route::get('{gallery}/edit/{id}', ['as' => 'admin.gallery.photo.photosEdit', 'uses' => 'GalleryPhotosController@photosEdit' ]);
		    Route::put('{gallery}/edit/{id}', ['as' => 'admin.gallery.photo.photosUpdate', 'uses' => 'GalleryPhotosController@photosUpdate' ]);
		});

		//GALERIA DE VIDEOS
		Route::resource('video', 'GalleryVideosController');
		Route::get('video-deletes', ['as' => 'admin.gallery.video.listsDeletes', 'uses' => 'GalleryVideosController@listsDeletes']);
		Route::delete('video-deletes/destroy/{id}', ['as' => 'admin.gallery.video.listsDeletes.destroy', 'uses' => 'GalleryVideosController@destroyTotal']);
		Route::post('video-deletes/restore/{id}', ['as' => 'admin.gallery.video.listsDeletes.restore', 'uses' => 'GalleryVideosController@restore']);
		Route::post('video/url', ['as' => 'admin.gallery.video.slugUrl', 'uses' => 'GalleryVideosController@slugUrl']);

	});

	//CONFIGURACION
	Route::get('config', ['as' => 'admin.config', 'uses' => 'ConfigsController@edit']);
	Route::put('config', ['as' => 'admin.config.update', 'uses' => 'ConfigsController@update']);

	//USUARIOS
	Route::resource('user', 'UsersController');
	Route::post('user/{user}/password', ['as' => 'admin.user.updatePassword', 'uses' => 'UsersController@updatePassword']);

});