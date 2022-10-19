<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Image;
use Cviebrock\EloquentSluggable\Services\SlugService;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     *
     */


    public function index()
     {
         $users = User::latest()->paginate(12);
         return view('tumProfile.index', compact('users'));
     }


    // public function index()
     //{
       //  $meetings = Meeting::latest()->paginate(4);
        // return view('dashboard.meetings.index', compact('meetings'));
    // }

   // public function index()
   // {
    //   // $user = User:: all();
      //  //dd($user);
      //  return view ('tumProfile.index')
      //  ->with('users', User::orderBy('created_at', 'DESC')->get());
   // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view ('tumProfile.singleProfile')
        ->with('user', User::where('slug', $slug )->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
