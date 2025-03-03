<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRequestController extends Controller
{
    // ## -- 1. View Landing
    public function viewLanding(){
        return view("landing.landingIndex");
    }
    
    // ## -- 2. View About
    public function viewAbout(){
        return view("about.aboutIndex");
    }

    // ## -- 3. View Test
    public function viewTest(){
        return view("test.testIndex");
    }
}
