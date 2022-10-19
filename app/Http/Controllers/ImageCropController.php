<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;




class ImageCropController extends Controller
{
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

            $user = Auth::user();
            $user->avatar = $new_picture_name;
             $user->save();


            return response()->json(['status'=>1, 'msg'=>'Image has been cropped successfully.']);

        } else{

            return response()->json(['status'=>0, 'msg'=>'Something went wrong, try again later']);
        }


    }
}


