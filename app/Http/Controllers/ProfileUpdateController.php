<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Image;

class ProfileUpdateController extends Controller
{

    //Edit Profile

    public function editProfile(User $user){

        $user = auth()->user();
        $data['user'] = $user;
        return view('dashboard.userProfiles.editprofile', $data);
        }


    //The Update method
   public function updateUserProfile(Request  $request)
   {
       $request->validate([

           'name' => "required",
           'mobile' => "required",
           'school' => "required",
           'specialization' => "required",
           'about' => "required",
           'publications' => "required",
           'experience' => "required",
           'education' => "required"
       ]);

       $user_id = Auth::user()->id;
       $user = User::findOrfail($user_id);
       $user->name = $request->input('name');
       $user->mobile = $request->input('mobile');
       $user->school = $request->input('school');
       $user->uasu_post = $request->input('uasu_post');
       $user->specialization = $request->input('specialization');
       $user->about = $request->input('about');
       $user->publications = $request->input('publications');
       $user->experience = $request->input('experience');
       $user->education = $request->input('education');


       $user->save();

       return redirect()->back()->with('status', 'Your Profile has been Successfully Updated');
   }




   //Uploading and Saving a Record

   public function updatePicha(Request  $request)

   {

    // Handle the User Upload of Avatar

    if($request->hasFile('avatar'))
    {
        $avatar = $request->file('avatar');
        $filename=time().'.'. $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300,300)->save(public_path('/assets/admin/images/avatars/'.$filename));

       // $avatar = 'storage/' . $request->file('avatar')->store('profilePhotos','public');

        $user = Auth::user();
       $user->avatar = $filename;
        $user->save();

    }

    return redirect()->back()->with('status', 'Your Profile Picture  has been Successfully Updated');

    }


}
