<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    public function homePage () {
    	return view("homepage");
    }

    public function aboutUs () {
    	return view ("about");
    }

    public function homeGallery () {
    	return view ("gallery");
    }

    public function templateUs () {
    	return view ("template");
    }
}
