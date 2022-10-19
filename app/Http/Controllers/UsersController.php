<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Image;

class UsersController extends Controller
{


      //View  Registered Users

    public function index(User $user)
    {
         // $users = User::all();
          $users = User::latest()->paginate(6);
        return view('dashboard.users.index', compact('users'));
        }



          // View  User Profile
    public function viewProfile()
    {
    	$users = User::all();
        return view('dashboard.userProfiles.index', compact('users'));
    }




        //Edit User Profile

    public function editProfile(User $user){

        $user = auth()->user();
        $data['user'] = $user;
        return view('dashboard.userProfiles.editprofile', $data);
        }


             //Edit User Pwd

    public function passwordEdit(User $user){

        $user = auth()->user();
        $data['user'] = $user;
        return view('dashboard.userProfiles.editpwd', $data);
        }



             //Update  User Pwd

    public function updatePwd(Request  $request){

        $this->validate($request, [
            'newpassword' => 'required|min:6|max:30|confirmed'
        ]);

        $user = auth()->user();

        $user->update([
            'password' => bcrypt($request->newpassword)
        ]);




    Alert::success('Dear User', ' Your Password has been Changed Successfully');
    //return redirect()->route('permissions.index')->with('status', 'Permission Created');

    return redirect()->route('editPwd');

       // return redirect()->back()->with('status', 'Password has been Changed Successfully');
        //return redirect()->back()->with('toast_success', 'Password has been Changed Successfully');
    }






    //The Update Full Name
    public function updateFullName(Request  $request)
    {
        $request->validate([

            'name' => "required"
        ]);

        $user_id = Auth::user()->id;
        $user = User::findOrfail($user_id);
        $user->name = $request->input('name');


        $user->save();
        return redirect()->back()->with('status', 'Your Full Name has been Successfully Updated');
    }


        //The Update Email
        public function updateEmail(Request  $request)
        {
            $request->validate([

                'email' => "required"
            ]);

            $user_id = Auth::user()->id;
            $user = User::findOrfail($user_id);
            $user->email = $request->input('email');

            $user->save();
            return redirect()->back()->with('status', 'Your Email has been Successfully Updated');
        }


               //The Update Mobile
               public function updateMobile(Request  $request)
               {
                   $request->validate([

                       'mobile' => "required"
                   ]);

                   $user_id = Auth::user()->id;
                   $user = User::findOrfail($user_id);
                   $user->mobile = $request->input('mobile');

                   $user->save();
                   return redirect()->back()->with('status', 'Your Mobile No has been Successfully Updated');
               }


                //The Update Mobile
                public function updateSpecialization(Request  $request)
                {
                    $request->validate([

                        'specialization' => "required"
                    ]);

                    $user_id = Auth::user()->id;
                    $user = User::findOrfail($user_id);
                    $user->specialization = $request->input('specialization');

                    $user->save();
                    return redirect()->back()->with('status', 'Your Specialization has been Successfully Updated');
                }


                 //The Update School
               public function updateSchool(Request  $request)
               {
                   $request->validate([

                       'school' => "required"
                   ]);

                   $user_id = Auth::user()->id;
                   $user = User::findOrfail($user_id);
                   $user->school = $request->input('school');

                   $user->save();
                   return redirect()->back()->with('status', 'Your School has been Successfully Updated');
               }


                            //The Update About
                            public function updateAbout(Request  $request)
                            {
                                $request->validate([

                                    'about' => "required"
                                ]);

                                $user_id = Auth::user()->id;
                                $user = User::findOrfail($user_id);
                                $user->about = $request->input('about');

                                $user->save();
                                return redirect()->back()->with('status', 'Your About  has been Successfully Updated');
                            }

 //The Update Publications
 public function updatePublications(Request  $request)
 {
     $request->validate([

         'publications' => "required"
     ]);

     $user_id = Auth::user()->id;
     $user = User::findOrfail($user_id);
     $user->publications = $request->input('publications');

     $user->save();
     return redirect()->back()->with('status', 'Your Publications has been Successfully Updated');
 }


  //The Update Experience
  public function updateExperience(Request  $request)
  {
      $request->validate([

          'experience' => "required"
      ]);

      $user_id = Auth::user()->id;
      $user = User::findOrfail($user_id);
      $user->experience = $request->input('experience');

      $user->save();
      return redirect()->back()->with('status', 'Your Experience has been Successfully Updated');
  }



      //The Update Consultancy
      public function updateConsultancy(Request  $request)
      {
          $request->validate([

              'consultancy' => "required"
          ]);

          $user_id = Auth::user()->id;
          $user = User::findOrfail($user_id);
          $user->consultancy = $request->input('consultancy');

          $user->save();
          return redirect()->back()->with('status', 'Your Consultancy has been Successfully Updated');
      }




    //The Update Education
    public function updateEducation(Request  $request)
    {
        $request->validate([

            'education' => "required"
        ]);

        $user_id = Auth::user()->id;
        $user = User::findOrfail($user_id);
        $user->education = $request->input('education');

        $user->save();
        return redirect()->back()->with('status', 'Your Education has been Successfully Updated');
    }



   //Update Profile Picture

   public function updatePicha(Request  $request)

   {

    // Handle the User Upload of Avatar

    if($request->hasFile('avatar'))
    {
        $avatar = $request->file('avatar');
        $filename=time().'.'. $avatar->getClientOriginalExtension();

         //Image::make($avatar)->resize(300,300)->save(public_path('/profilePhotos/'.$filename));

    Image::make($avatar)->resize(300,300)->save(public_path('/assets/admin/images/avatars/'.$filename));

       // $avatar = 'storage/' . $request->file('avatar')->store('profilePhotos','public');

        $user = Auth::user();
       $user->avatar = $filename;
        $user->save();

    }

    return redirect()->back()->with('status', 'Your Profile Picture  has been Successfully Updated');

    }


}
    function crop(Request $request){
        $user = User::find(auth('web')->id());
        $path = 'assets/admin/images/avatars/';
        $file = $request->file('avatar');
        $old_picture = $user->getAttributes()['avatar'];
        $file_path = $path.$old_picture;
        $new_picture_name = 'AIMG'.$user->id.time().rand(1,100000).'.jpg';

        if($old_picture != null && File::exists(public_path($file_path))){
            File::delete(public_path($file_path));
        }

        // Upload New Image
        $upload = $file->move(public_path($path), $new_picture_name);
        if($upload){


        }

        // Upload New Image
        $upload = $file->move(public_path($path), $new_picture_name);
        if($upload){

            $user->update(['avatar'=>$new_picture_name]);
            return response()->json(['status'=>1, 'msg'=>'Image has been cropped successfully.']);

        } else{

            return response()->json(['status'=>0, 'msg'=>'Something went wrong, try again later']);
        }




    }

