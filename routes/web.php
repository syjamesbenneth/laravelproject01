<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/sample", function () {
// 	return "<h1>Hello World</h1>";
// });

// Route::get("/sample2", function () {
// 	// return "<h2>JB Sy</h2>";
// 	return ("sampleview");
// });



Route::get("/profile", "SampleController@showProfile");
Route::get("/tasks","SampleController@showTasks");

// Route::get("/tasks", function () {
	// $name = "Brandon";
	// $task1 = "eat";
	// $task2 = "get ready";
	// $task3 = "code";
	//return view ("tasks.sampletask");
	// return view("tasks/sampletask");
	// return view("tasks.sampletask", compact("task1", "task2", "task3"));


	// return view("tasks.sampletask", ["task1=>"eat", "task2=>"get ready", "task3 => "code"]);

	// return view("tasks.sampletasks"->with("task1", "eat")->with("task2","get ready")->with("task3", "code"));


Route::get("/greetings", "SampleController@greetName");
	// $name = "Terence";
	//method 1 - using assoc arrays
	// return view("hello", ["name"=>"Name1"]);
	//method 2 - using the with() function

	// return view("hello")->with("name", "Brandon");
	

Route::get("/samplenav","SampleController@showNav");
// Route::get("/samplenav", function() {
// 	// return view("samplenav", ["name"=>"Terence"]);
// 	return view("samplenav");
// });

Route::get("/sampleloop", "SampleController@showLoop") ;
	// $names = ["John", "Paul", "George", "Ringo"];
	// return view("sampleloop", compact("names"));


Route::get("/profile", "SampleController@showProfile");

Route::get("/homepage", "StaticController@homePage");
Route::get("/about", "StaticController@aboutUs");

Route::get("/template", "StaticController@templateUs");

Route::get("/gallery", "StaticController@homeGallery");