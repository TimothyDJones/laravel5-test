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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Special route for using PHP Data Grid to display "dashboard" list of users.
 * See http://www.codeproject.com/Articles/1006057/phpGrid-Laravel-and-Bootstrap for details.
 */
Route::get('dashboard', function() {
	require_once(public_path() . '/assets/plugins/phpGrid_Lite/conf.php');
	
	$dg = new C_DataGrid("SELECT * FROM users", "id", "users");
	$dg->enable_edit("INLINE", "CRUD");
	$dg->enable_autowidth(true)->enable_autoheight(true);
	$dg->set_theme('cobalt-flat');
	$dg->display(false);
	
	$grid = $dg->get_display(true);
	return view('dashboard', array('grid' => $grid));
});

// Provide controller methods with model object instance instead of ID
// by using route-model binding
Route::model('projects', 'Project');
Route::model('tasks', 'Task');
Route::model('users', 'User');

Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});
Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('users', function($value, $route) {
	return App\User::find($value)->first();
});

Route::resource('projects', 'ProjectsController');
//Route::resource('tasks', 'TasksController');
Route::resource('projects.tasks', 'TasksController');
Route::resource('users', 'UsersController');


