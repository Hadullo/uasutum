<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Http\Request;

class SingleProfileController extends Controller
{
    //public function viewSingleProfile()
   // {
      //  $users = User::latest()->paginate(6);
       // return view('pages.singleProfile', compact('users'));
    //}


    //Display single Post
    public function viewSingleProfile($id)
  {
       $user  = User::where('id', $id)->first();
        return view('pages.singleProfile', compact('user'));
     }


}
