<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/

    Route::auth();
    Route::get('/', function(){
        return view('home');
    });
    Route::get('/home', function(){
        return view('home');
    });

    Route::get('/hero', 'HeroController@index');
    Route::get('/hero/{hero_id}', 'HeroController@show');

    Route::resource('item', 'ItemController');

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/build', 'BuildController@index');
    Route::get('/build/create', 'BuildController@create');
    Route::post('/build', 'BuildController@store');
    Route::get('/build/{build_id}', 'BuildController@show');
    Route::get('/build/{build_id}/edit', 'BuildController@edit');
    Route::post('/build/{build_id}', 'BuildController@update');
    Route::post('/build/delete/{build_id}', 'BuildController@destroy');
});


# Restrict certain routes to only be viewable in the local environments
    # route "debug" code is from class notes
    if(App::environment('local')) {
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

        Route::get('/drop', function() {

            DB::statement('DROP database dota2kit');
            DB::statement('CREATE database dota2kit');

            return 'Dropped database dota2kit; created database dota2kit.';
        });


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

    };



