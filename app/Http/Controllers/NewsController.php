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

     public function create()
     {
             return view('dashboard.news.create');
     }

     public function store(Request  $request)
    {
        $request->validate([

            'title' => "required",
            'neimage' => 'required|image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=250,min_height=100,max_width=800,max_height=465',
            'newsPhotoCaption' => "required",
            'body' => "required"
        ]);


        $title = $request->input('title');
        $slug = Str::slug($title,'-');
        $newsPhotoCaption = $request->input('newsPhotoCaption');
        $user_id = Auth::user()->id;
        $body = $request->input('body');


        //Image Upload
        $newsPhotoPath = 'storage/' . $request->file('neimage')->store('newsPhotos','public');

        $newsitem = new News();
        $newsitem->title = $title;
        $newsitem->newsPhotoCaption = $newsPhotoCaption;
        $newsitem->slug = $slug;
        $newsitem->user_id = $user_id;
        $newsitem->body = $body;
        $newsitem->newsPhotoPath = $newsPhotoPath;
        $newsitem->save();

        toast('Your Post as been submited!','success');


       // Alert::success('Congratulations', 'News Item Successfuly Created');

        //return redirect()->back();

        return redirect()->back()->with('toast_success', 'News  Item Created Successfully');
    }



    //Display single Post
    public function show($slug)
   {
        $newsitem  = News::where('slug', $slug)->first();
        return view('dashboard.news.single-news-post', compact('newsitem'));
     }


   public function edit(News $newsitem)
   {

        return view('dashboard.news.edit-news-item', compact('newsitem'));
   }

      //The Update method
      public function update(Request  $request, News  $newsitem)
    {
        $request->validate([

            'title' => "required",
            'neimage' => 'required|image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=250,min_height=100,max_width=700,max_height=365',
            'newsPhotoCaption' => "required",
            'body' => "required"
        ]);

        $title = $request->input('title');
        $slug = Str::slug($title,'-');
        $newsPhotoCaption = $request->input('newsPhotoCaption');
        $body = $request->input('body');


        //Image Upload
        $newsPhotoPath = 'storage/' . $request->file('neimage')->store('newsPhotos','public');

        $newsitem->title = $title;
        $newsitem->newsPhotoCaption = $newsPhotoCaption;
        $newsitem->slug = $slug;
        $newsitem->body = $body;
        $newsitem->newsPhotoPath = $newsPhotoPath;
        $newsitem->save();

        return redirect()->back()->with('status', 'News Post Edit Successfully Saved');
    }

    public function delete(News $newsitem)
    {
         $newsitem->delete();

         Alert::success('Dear Admin', 'News  Post Deleted Successfully');

         return redirect()->back();

         //return redirect()->back()->with('status', 'News  Post Deleted Successfully');


         //return redirect()->route('permissions.index')->with('status', 'Permission Created');

         //return redirect()->route('editPwd');

    }


}



