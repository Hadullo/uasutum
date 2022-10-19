<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;


class ManageUsersController extends Controller
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
       return view('dashboard.manageUsers.index', compact('users'));
       }

        //Edit User
    public function edit(User $user){


        $roles = Role:: all();
        return view('dashboard.manageUsers.edit')->with([
                'user'=> $user,
                'roles'=> $roles
        ]);
    }


      // Update User
      public function update(Request $request, User $user){

       $user->roles()->sync($request->roles);
       
      return redirect()->route('registeredUsers');

    //return redirect()->back('dashboard.manageUsers.index')->with('status', 'Your Profile Picture  has been Successfully Updated');

    }
}
