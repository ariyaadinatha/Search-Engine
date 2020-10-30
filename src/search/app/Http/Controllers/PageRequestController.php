<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRequestController extends Controller
{
    // ## -- 1. View Landing
    public function viewLanding(){
        return view("landing.landingIndex");
    }

     // ## -- 2. View Artikel
     public function viewArticle(){
        return view("article.articleIndex");
    }   
  
    // ## -- 3. View Search
    public function viewSearch(){
        return view("search.searchIndex");
    }

}
