<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('active');
            $table->string('code',60);
            $table->enum('type', ['admin', 'editor']);

            $table->rememberToken();

            $table->timestamps(); //created_at, update_at
            $table->softDeletes(); //deleted_at
        });

        Schema::create('user_profiles', function(Blueprint $table)
        {
        	$table->increments('id');
            
            $table->string('slug_url');
            $table->string('nombre', 100);
            $table->string('apellidos', 100);
            $table->text('descripcion');

            $table->string('documento_tipo', 100);
            $table->string('documento_numero', 20);
            
            $table->string('telefono', 15);
            $table->string('direccion');
            
            $table->string('imagen');
            $table->string('imagen_carpeta', 100);
            
            $table->string('social_facebook');
            $table->string('social_twitter');
            $table->string('social_google');
            $table->string('social_youtube');
            $table->string('social_pinterest');
            $table->string('social_instagram');
            $table->string('social_linkedin');
            $table->string('social_tumblr');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

        	$table->timestamps();
        });

        Schema::create('tags', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('slug_url');
            $table->text('descripcion');

            $table->boolean('publicar')->default(false);

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps(); //created_at, update_at
            $table->softDeletes(); //deleted_at
        });

        Schema::create('categories', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('slug_url');
            $table->text('descripcion');

            $table->boolean('publicar')->default(false);

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps(); //created_at, update_at
            $table->softDeletes(); //deleted_at
        });

        Schema::create('post_orders', function(Blueprint $table)
        {
        	$table->increments('id');

            $table->string('titulo', 100);
            $table->integer('orden')->unsigned();

        	$table->timestamps();
        });

        Schema::create('posts', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('slug_url');
            $table->string('descripcion');
            $table->text('contenido');
            $table->string('imagen');
            $table->string('imagen_carpeta');
            $table->string('video');
            $table->text('audio');
            $table->string('tags');

            $table->boolean('publicar')->default(false);
            $table->integer('contador')->unsigned();

            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->integer('post_order_id')->unsigned();
            $table->foreign('post_order_id')->references('id')->on('post_orders');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamp('published_at');
            $table->timestamps(); //created_at, update_at
            $table->softDeletes(); //deleted_at
        });

        Schema::create('post_histories', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('post_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->enum('type', ['update', 'restore', 'delete']);
            $table->text('descripcion');

            $table->timestamps(); //created_at, update_at
        });

        Schema::create('post_photos', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('imagen');
            $table->string('imagen_carpeta');
            $table->integer('orden');

            $table->integer('post_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

            $table->boolean('publicar')->default(false);

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamp('published_at');
            $table->timestamps(); //created_at, update_at
            $table->softDeletes(); //deleted_at
        });

        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');

            $table->string('titulo');
            $table->string('slug_url');
            $table->string('descripcion');
            $table->text('contenido');
            $table->string('imagen');
            $table->string('imagen_carpeta');

            $table->boolean('publicar')->default(false);

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamp('published_at');
            $table->timestamps(); //created_at, update_at
            $table->softDeletes(); //deleted_at
        });

        Schema::create('videos', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('slug_url');
            $table->string('descripcion');
            $table->text('contenido');
            $table->string('imagen');
            $table->string('imagen_carpeta');
            $table->string('video');
            
            $table->boolean('publicar')->default(false);
            $table->integer('contador')->unsigned();

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamp('published_at');
            $table->timestamps(); //created_at, update_at
            $table->softDeletes(); //deleted_at
        });

        Schema::create('galleries', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('slug_url');
            $table->string('descripcion');
            $table->text('contenido');
            $table->string('imagen');
            $table->string('imagen_carpeta');

            $table->boolean('publicar')->default(false);

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamp('published_at');
            $table->timestamps(); //created_at, update_at
            $table->softDeletes(); //deleted_at
        });

        Schema::create('gallery_photos', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('imagen');
            $table->string('imagen_carpeta');
            $table->integer('orden');

            $table->integer('gallery_id')->unsigned()->nullable();
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');;

            $table->boolean('publicar')->default(false);

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps(); //created_at, update_at
            $table->softDeletes(); //deleted_at
        });

        Schema::create('configurations', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('dominio');
            $table->string('description');
            $table->text('keywords');
            $table->string('email');

            $table->integer('user_id')->nullable()->default(NULL);

            $table->text('history');

            $table->timestamps();
        });

        Schema::create('contacto_mensajes', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('nombre');
            $table->string('apellidos');
            $table->string('email');
            $table->string('telefono');
            $table->boolean('telefono_whatsapp');
            $table->text('mensaje');
            $table->boolean('leido');
            $table->enum('type', ['contacto', 'sugerencia']);

            $table->integer('user_id')->nullable()->default(NULL);

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('sliders', function(Blueprint $table)
        {
            $table->increments('id');

            $table->text('header');
            $table->text('body');
            $table->text('footer');

            $table->integer('user_id')->nullable()->default(NULL);

            $table->timestamps();
        });

        Schema::create('social_media', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('facebook');
            $table->string('google');
            $table->string('pinterest');
            $table->string('skype');
            $table->string('tumblr');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('whatsapp');

            $table->integer('user_id')->nullable()->default(NULL);

            $table->text('history');

            $table->timestamps();
        });
        
        Schema::create('team_modalities', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('slug_url');
            $table->string('descripcion');

            $table->boolean('publicar')->default(false);

            $table->integer('user_id')->nullable()->default(NULL);

            $table->text('history');

            $table->timestamps();
        });

        Schema::create('team_members', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('nombre');
            $table->string('apellidos');
            $table->text('descripcion');
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento');

            $table->string('imagen');
            $table->string('imagen_carpeta');

            $table->string('modality');

            $table->boolean('publicar')->default(false);

            $table->integer('user_id')->nullable()->default(NULL);

            $table->text('history');

            $table->timestamps();
        });

        Schema::create('team_member_modalities', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('team_member_id');
            $table->integer('team_modality_id');

            $table->timestamps();
        });


        Schema::create('team_member_results', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('team_member_id')->nullable();

            $table->integer('puesto');
            $table->string('competencia');
            $table->date('fecha');

            $table->integer('user_id')->nullable()->default(NULL);

            $table->timestamps();
        });

        Schema::create('histories', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('tabla');
            $table->integer('tabla_id')->unsigned()->nullable();

            $table->integer('user_id')->nullable()->default(NULL);

            $table->enum('type', ['create','update', 'restore', 'delete']);
            $table->text('descripcion');

            $table->timestamps();
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('histories');
        Schema::drop('team_member_results');
        Schema::drop('team_member_modalities');
        Schema::drop('team_members');
        Schema::drop('team_modalities');
        Schema::drop('social_media');
        Schema::drop('sliders');
        Schema::drop('contacto_mensajes');
        Schema::drop('configurations');
        Schema::drop('gallery_photos');
        Schema::drop('galleries');
        Schema::drop('videos');
        Schema::drop('pages');
        Schema::drop('post_photos');
        Schema::drop('post_histories');
        Schema::drop('posts');
        Schema::drop('post_orders');
        Schema::drop('categories');
        Schema::drop('tags');
        Schema::drop('user_profiles');
        Schema::drop('users');
	}

}
