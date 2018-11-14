<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    //
    public function showProfile() {
    	return view ("profile");
    };


	public function showTasks(){
		$task1 = "eat";
		$task2 = "get ready";
		$task3 = "code";
		return view("tasks.sampletask", compact('task1','task2','task3'));
	};

	public function showNav() {
		// Route::get("/samplenav", function() {
	// return view("samplenav", ["name"=>"Terence"]);
	return view("samplenav");

	};

	public function greetName() {
		$name = "Terence";
		return view('hello',compact('name'));
	 
	};

	public function showLoop () {
		$names = ["John", "Paul", "George", "Ringo"];
	return view("sampleloop", compact("names"));
	};
}
