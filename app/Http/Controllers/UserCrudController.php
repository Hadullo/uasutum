<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;


class UserCrudController extends Controller
{
    public function __construct()
    {
        $this->middleware(middleware:'auth');
    }

    //View  Registered Users
   public function index(User $user)
   {
        // $users = User::all();
         $users = User::latest()->paginate(6);
       return view('dashboard.crudUsers.index', compact('users'));
       }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function show(User $user)
   // {
       // return view('dashboard.crudUsers.show',['user'=>$user]);
   // }

    public function show($slug)
    {
        return view ('dashboard.crudUsers.show')
        ->with('user', User::where('slug', $slug )->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit(User $user)
   {
     return view('dashboard.crudUsers.edit', compact('user'));
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
