<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class NewsController extends Controller
{


    public function index()
    {
       // $news= News::latest()->take(4)->get();
        $news = News::latest()->paginate(3);
        return view('dashboard.news.index', compact('news'));
    }

//Open Create Page
    public function createNewsPage()
    {
            return view('dashboard.news.createNewsPage');
    }

    // public function createNewsTitle()
    // {
           //  return view('dashboard.news.create_news_title');
    // }



    public function CreateNewsTitle(Request  $request)
    {
        $request->validate([

            'title' => "required"
        ]);


        $title = $request->input('title');
        $slug = Str::slug($title,'-');

        $user_id = Auth::user()->id;




        $newsitem = new News();
        $newsitem->title = $title;

        $newsitem->slug = $slug;
        $newsitem->user_id = $user_id;


        $newsitem->save();

        toast('Your Post as been submited!','success');


       // Alert::success('Congratulations', 'News Item Successfuly Created');

        //return redirect()->back();

        return redirect()->back()->with('toast_success', 'News  Item Created Successfully');
    }










}



