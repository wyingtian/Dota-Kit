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



Route::group(['middleware' => ['web']], function () {

    Route::auth();
    Route::get('/hero', 'HeroController@index');
    Route::get('/hero/create', 'HeroController@create');
    Route::post('/hero', 'HeroController@store');
    Route::get('/hero/{hero_id}', 'HeroController@show');
    Route::get('/hero/{hero_id}/edit', 'HeroController@edit');
    Route::put('/hero/{hero_id}', 'HeroController@update');
    Route::delete('/hero/{hero_id}', 'HeroController@destroy');

    Route::get('/build', 'BuildController@index');
    Route::get('/build/create', 'BuildController@create');
    Route::post('/build', 'BuildController@store');
    Route::get('/build/{build_id}', 'BuildController@show');
    Route::get('/build/{build_id}/edit', 'BuildController@edit');
    Route::post('/build/{build_id}', 'BuildController@update');
    Route::delete('/build/{build_id}', 'BuildController@destroy');




    Route::resource('item', 'ItemController');
    Route::get('/hero/create', 'TagController@create');
   // Route::get('display','HeroItemController@getDota2');
    Route::get('/home', 'HomeController@index');
    Route::get('/','HeroItemController@getDota2');
    //Route::get('/build','BuildController@getDota2');
    //Route::get('/build/show','BuildController@showBuilds');

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
// Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');





    Route::post('/build/create','BuildController@postDota2');
    # Restrict certain routes to only be viewable in the local environments
    if(App::environment('local')) {
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    }

    if(App::environment('local')) {

        Route::get('/drop', function() {

            DB::statement('DROP database dota2kit');
            DB::statement('CREATE database dota2kit');

            return 'Dropped database dota2kit; created database dota2kit.';
        });

    };

    Route::get('/debug', function() {

        echo '<pre>';

        echo '<h1>Environment</h1>';
        echo App::environment().'</h1>';

        echo '<h1>Debugging?</h1>';
        if(config('app.debug')) echo "Yes"; else echo "No";

        echo '<h1>Database Config</h1>';
        /*
        The following line will output your MySQL credentials.
        Uncomment it only if you're having a hard time connecting to the database and you
        need to confirm your credentials.
        When you're done debugging, comment it back out so you don't accidentally leave it
        running on your live server, making your credentials public.
        */
        //print_r(config('database.connections.mysql'));

        echo '<h1>Test Database Connection</h1>';
        try {
            $results = DB::select('SHOW DATABASES;');
            echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
            echo "<br><br>Your Databases:<br><br>";
            print_r($results);
        }
        catch (Exception $e) {
            echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
        }

        echo '</pre>';

    });
});

