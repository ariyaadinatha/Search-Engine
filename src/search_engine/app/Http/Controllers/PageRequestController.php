<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRequestController extends Controller
{
    // ## -- 1. View Landing
    public function viewLanding(){
        return view("landing.landingIndex");
    }
    
    // ## -- 2. View Test
    public function viewTest(){
        return view("test.testIndex");
    }

    // ## -- 3. View About
    public function viewAbout(){
        return view("about.aboutIndex");
    }

    // ## -- 4. View Post
    public function viewPost(){
        return view("post.postIndex");
    }

    // ## -- 4. View Create Post
    public function viewCreatePost(){
        return view("post.postCreate");
    }
}