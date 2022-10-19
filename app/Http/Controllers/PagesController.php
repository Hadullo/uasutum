<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class PagesController extends Controller
{
    //public function index()
    //{
       // $newsitems= News::latest()->take(3)->get();
       // return view('pages.index', compact('newsitems'));
    //}

    public function index()
     {
         $news = News::latest()->paginate(4);
         return view('pages.index', compact('news'));
     }

      //Display single Post for unlogged in Users
    //public function feshow($slug)
    //{
        // $newsitem  = News::where('slug', $slug)->first();
         //return view('pages.single-news-post', compact('newsitem'));
      //}

// Our Mandate Page

      public function mandate()      {

          return view('pages.mandate');
      }



      //Display single Post
      public function feshow($slug)
      {
           $newsitem  = News::where('slug', $slug)->first();
           return view('pages.single-news-post', compact('newsitem'));
        }

}
